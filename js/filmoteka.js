$(document).ready(function () {
    var film_name = $('.add-film');
    var loading_layer = $('#loadind-wrapper');
    var film_list_input = new Array('film-name', 'genres', 'releasedate', 'fw_grade', 'carrier', 'location', 'description', 'resolution', 'filesize', 'duration', 'film-language');
    function msieversion() {
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");
        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))
        {
            return true;
        } else                 // If another browser, return 0
        {
            return false;
        }
    }
    $('#genres').multiselect({
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '100%',
        numberDisplayed: 5,
        maxHeight: 200,
        // $('#example-select').multiselect('select', ['1', '2', '4']); // zaznaczenie kilku opcji przez js 
    });
    film_name.autocomplete({
        source: function (request, response) {
            //alert('poszło');
            $.ajax({
                method: "POST",
                url: '/en/films/ajax_list_film',
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                dataType: "JSON",
                data: {'name': encodeURIComponent(film_name.val())},
                beforeSend: function ()
                {
                    //$('#test').append(encodeURIComponent(film_name.val()));
                    $(loading_layer).fadeIn('fast', function ()
                    {
                        $(this).removeClass('hidden-content');
                    })
                },
                success: function (data) {
                    $(loading_layer).fadeOut('fast', function ()
                    {
                        $(this).addClass('hidden-content');
                    })

                    response(data);

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    $(loading_layer).fadeOut('fast', function ()
                    {
                        $(this).addClass('hidden-content');
                    })
                    $('#test').html(textStatus + " " + jqXHR.responseText);
                }
            })
        },
        minLength: 3,
        select: function (event, ui)
        {
            $.ajax
                    ({
                        method: "POST",
                        url: '/en/films/ajax_film_detail',
                        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                        dataType: "JSON",
                        data: {'href': ui.item.href},
                        beforeSend: function ()
                        {
                            $(loading_layer).fadeIn('fast', function ()
                            {
                                $(this).removeClass('hidden-content');
                            })
                        },
                        success: function (data)
                        {
                            $(loading_layer).fadeOut('fast', function ()
                            {
                                $(this).addClass('hidden-content');
                            })
                            $('#filmweb').val(ui.item.href);
                            $('#description').html(data.desc);
                            $('#fw_grade').val(data.fw_grade.replace(',', '.'));
                            $('#releasedate').removeAttr("type");
                            $('#releasedate').prop('type', 'text');
                            $('#releasedate').val(data.release_date);
                            $('#releasedate').removeAttr("type");
                            $('#releasedate').prop('type', 'date');
                            $('#poster').val(data.poster);
                            alert(data.countSeason);
                            $('.poster-div').append('<img src="' + data.poster + '" class="img-thumbnail" width="200px"/>');
                            //$('#test').html('<img src="'+data.poster+'">');
                            $.each(data.genres, function (i, item)
                            {
                                $('#genres option').each(function ()
                                {
                                    if (item == $(this).attr('class'))
                                    {
                                        $('#genres').multiselect('select', $(this).val());
                                        // $('#test').append($(this).attr('class') + '<br />');
                                    }
                                })
                            });
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            $(loading_layer).fadeOut('fast', function ()
                            {
                                $(this).addClass('hidden-content');
                            })
                            alert('rzucam bledem');
                            $('#test').html(jqXHR.responseText);
                        },
                    })
                    .done(function ( )
                    {
                        $(":input").prop("disabled", false);
                        $(":input").removeAttr("disabled")
                    })
        }
    });
    //walidacja
    $("form[name=form-add-film]").submit(function (e)
    {

        var _error = '<div class="alert alert-danger" role="alert"><ul>';
        for (i in film_list_input)
        {
            if (!$('#' + film_list_input[i]).val())
            {
                e.preventDefault(); //wyłączenie formularza 
                if (film_list_input[i] != 'genres')
                {
                    $('#' + film_list_input[i]).parent().addClass('has-error has-feedback');
                    $('#' + film_list_input[i]).after('<div id="' + i + '"><span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span><span id="inputError2Status" class="sr-only">(error)</span></div>');
                }


                _error += "<li>" + film_list_input[i] + "</li>";
            } else
            {

                $('#' + film_list_input[i]).parent().removeClass('has-error has-feedback');
                $('#' + [i]).remove();

            }
        }
        _error += "</div></ul>";
        $('#js_info').html(_error);
    });
    $('.delete-film').click(function (e)
    {
        e.preventDefault();
        var _film_id = $(this).data('film-id');
        alert(_film_id);
        $.ajax
                ({
                    method: "POST",
                    url: '/en/films/ajax_film_remove',
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    dataType: "JSON",
                    data: {'film_id':  _film_id},
                    error: function (jqXHR, textStatus, errorThrown) {
                        $(loading_layer).fadeOut('fast', function ()
                        {
                            $(this).addClass('hidden-content');
                        })
                        //alert('rzucam bledem');
                        $('#error').html(jqXHR.responseText);
                    },
                });
    })
    //alert('działa');
})