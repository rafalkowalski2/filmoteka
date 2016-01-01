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
    function show_loading_layer()
    {
        $(loading_layer).fadeIn('fast', function ()
        {
            $(this).removeClass('hidden-content');
        })
    }
    function hide_loading_layer()
    {
        $(loading_layer).fadeOut('fast', function ()
        {
            $(this).addClass('hidden-content');
        })
    }
    function clear_form()
    {
        for (k in film_list_input)
        {
            $('#' + film_list_input[k]).val('');
        }
        $('#poster').val('');
        $('#filmweb').val('');
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
                    $('#test').empty();
                    show_loading_layer();
                    //$('#test').append(encodeURIComponent(film_name.val()));

                },
                success: function (data) {


                    response(data);

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    hide_loading_layer();

                    $('#test').html(textStatus + " " + jqXHR.responseText);
                }
            })
                    .done(function ( )
                    {
                        hide_loading_layer();

                        /*$(":input").prop("disabled", false);
                         $(":input").removeAttr("disabled")*/
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
                            $('#test').empty();
                            show_loading_layer();
                        },
                        success: function (data)
                        {

                            $('#filmweb').val(ui.item.href);
                            $('#description').html(data.desc);
                            $('#fw_grade').val(data.fw_grade.replace(',', '.'));
                            $('#releasedate').removeAttr("type");
                            $('#releasedate').prop('type', 'text');
                            $('#releasedate').val(data.release_date);
                            $('#releasedate').removeAttr("type");
                            $('#releasedate').prop('type', 'date');
                            $('#poster').val(data.poster);
                            //alert(data.countSeason);
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
                            hide_loading_layer();
                            alert('rzucam bledem');
                            $('#test').html(jqXHR.responseText);
                        },
                    })
                    .done(function ( )
                    {
                        hide_loading_layer();
                    })
        }
    });
    //walidacja
    $("form[name=form-add-film]").submit(function (e)
    {
        var _form_stat = true;
        var _error = '<div class="alert alert-danger" role="alert"><ul>';
        for (i in film_list_input)
        {
            if (!$('#' + film_list_input[i]).val())
            {
                _form_stat = false;
                e.preventDefault(); //wyłączenie formularza 
                if (film_list_input[i] != 'genres')
                {
                    $('#' + film_list_input[i]).parent().addClass('has-error has-feedback');
                    $('#' + film_list_input[i]).after('<div id="' + i + '"><span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span><span id="inputError2Status" class="sr-only">(error)</span></div>');
                }


                _error += "<li>" + film_list_input[i] + "</li>";
            } else
            {
                // _form_stat = false;
                $('#' + film_list_input[i]).parent().removeClass('has-error has-feedback');
                $('#' + [i]).remove();

            }
        }
        e.preventDefault();
        if (_form_stat)
        {
            var filmoteka_data = new FormData();
            for (i in film_list_input)
            {
                filmoteka_data.append(film_list_input[i], $('#' + film_list_input[i]).val());
            }
            //alert($('#poster')[0].files[0]);
            filmoteka_data.append('poster', $('#poster').val());
            filmoteka_data.append('filmweb', $('#filmweb').val());
            //filmoteka_data.append('')
            $.ajax({
                method: "POST",
                url: '/en/films/ajax_add_film',
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                dataType: "JSON",
                data: filmoteka_data,
                beforeSend: function ()
                {
                    $('#js_info').empty();
                    $(":input").prop("disabled", false);
                    $(":input").removeAttr("disabled")
                    show_loading_layer();
                },
                success: function (data)
                {
                    $.each(data, function (i, item)
                    {
                        if (i == 'log')
                        {
                            for (l in item)
                            {
                                alertify.log(item[l]);
                            }
                            clear_form();
                        } else if (i == 'success')
                        {
                            for (l in item)
                            {
                                alertify.success(item[l]);
                            }
                            clear_form();
                        } else if (i == 'error')
                        {
                            for (l in item)
                            {
                                if (item[l] != '')
                                {
                                    alertify.error(item[l]);
                                }
                            }
                        }
                    })
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    hide_loading_layer();
                    //alert('rzucam bledem');
                    $('#js_info').html('<p>' + textStatus + '</p><p>' + jqXHR.responseText + '</p>');
                }
            })
                    .done(function ( )
                    {
                        hide_loading_layer();
                    })
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
                    data: {'film_id': _film_id},
                    error: function (jqXHR, textStatus, errorThrown) {
                        hide_loading_layer();
                        //alert('rzucam bledem');
                        $('#error').html(jqXHR.responseText);
                    },
                });
    })
    //alert('działa');
})