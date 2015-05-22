/*$(document).ready(function(){
    $('a.locations-list').click(function(e)
    {
    	e.preventDefault();
    	if(confirm('test'))
    	{
    		alert('confirmed');
    	}
    	var id = $(this).data('id');
    	$('.'+id).hide('slow');
    	//ajaxowe zapytanie 
    })
});
*/
$(document).ready(function(){
	$('#genres').multiselect({
		enableCaseInsensitiveFiltering: true,
		buttonWidth: '100%',
		numberDisplayed: 5,
		maxHeight: 200,
		// $('#example-select').multiselect('select', ['1', '2', '4']); // zaznaczenie kilku opcji przez js 
	}); 	
	var film_name = $('.add-film');	
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
            		$('#releasedate').removeAttr("type");
					$('#releasedate').prop('type', 'text');
            		$('#releasedate').val(data.release_date);
            		$('#releasedate').removeAttr("type");
					$('#releasedate').prop('type', 'date')
					
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
          	})
    	}
    });
    $("form[name=form-add-film]").submit(function(e)
    {
    	//e.preventDefault(); wyłączenie formularza 
    	alert('wysyłanie formularza');
    })
	//alert('działa');
})