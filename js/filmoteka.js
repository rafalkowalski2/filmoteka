$(document).ready(function(){	
	var film_name = $('.add-film');
	var film_list_input = new Array('film-name', 'genres', 'releasedate','fw_grade','carrier','location','description','resolution', 'filesize', 'duration', 'film-language');	
	function msieversion() {
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");
        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))
        {
        	return true;
        }
        else                 // If another browser, return 0
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
      source: function( request, response ) {
			//alert('poszło');
       		$.ajax({
       			method: "POST",
				url: '/en/films/ajax_list_film',
				contentType: "application/x-www-form-urlencoded; charset=UTF-8",
				dataType: "JSON",     
            	data: {'name': film_name.val() },
            	beforeSend: function()
            	{
            		$(":input:not(.add-film)").prop("disabled", true);
            	},
            	success: function(data) {
            		$(":input:not(#filmweb)").prop("disabled", false);
            		if(msieversion()) $(":input:not(#filmweb)").removeAttr("disabled");
            		else $(":input:not(#filmweb)").prop("disabled", false);
              		response(data);
            		
          		},
         	 	error: function(e, xhr) {
         	 		$(":input:not(#filmweb)").prop("disabled", false);
             		//alert(xhr);
             		$('#test').html(xhr); 
          		}
        	})
      	},
    	minLength: 3,
    	select: function( event, ui ) 
    	{ 
    		$.ajax
    		({
    			method: "POST",
				url: '/en/films/ajax_film_detail',
				contentType: "application/x-www-form-urlencoded; charset=UTF-8",
				dataType: "JSON",            	
            	data: {'href': ui.item.href },
            	beforeSend: function()
            	{
            		$(":input").prop("disabled", true);
            	},
            	success: function(data)
            	{
            		$('#filmweb').val(ui.item.href);
            		$('#description').html(data.desc);
            		$('#fw_grade').val(data.fw_grade.replace(',', '.'));
            		$(":input").removeAttr("disabled")
            		$('#releasedate').removeAttr("type");
					$('#releasedate').prop('type', 'text');
            		$('#releasedate').val(data.release_date);
            		$('#releasedate').removeAttr("type");
					$('#releasedate').prop('type', 'date');
					
            		 //alert(data.desc);
            	},
            	error: function (jqXHR, textStatus, errorThrown) {
   					alert('rzucam bledem');
   					$('#test').html(jqXHR.responseText);	
    			},
    			
          	})
          	.done(function( )
          	{
          		$(":input").prop("disabled", false);
          		$(":input").removeAttr("disabled")
          	})
    	}
    });
    
    $("form[name=form-add-film]").submit(function(e)
    {
    	 
    	var _error = '<div class="alert alert-danger" role="alert"><ul>';
    	for(i in film_list_input)
    	{
    		if(!$('#'+film_list_input[i]).val())
    		{
    			e.preventDefault(); //wyłączenie formularza 
    			if(film_list_input[i] != 'genres')
    			{
    				$('#'+film_list_input[i]).parent().addClass('has-error has-feedback');
    				$('#'+film_list_input[i]).after('<div id="'+i+'"><span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span><span id="inputError2Status" class="sr-only">(error)</span></div>');
    			}
    			
    			
    			_error += "<li>"+film_list_input[i]+"</li>";
    		}
    		else
    		{
    			
    			$('#'+film_list_input[i]).parent().removeClass('has-error has-feedback');
    			$('#'+[i]).remove();

    		}	
    	}
    	_error += "</div></ul>";
    	$('#js_info').html(_error);
    })
	//alert('działa');
})