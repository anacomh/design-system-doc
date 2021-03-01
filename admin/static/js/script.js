
	//Add image as background
	$('.add-background').each(function(){
		$(this).css('background-image','url('+$(this).attr('data-src')+')');
	});

	//Delete confirm
	$('.delete-item').click(function(e){
		var ask = confirm("Deseja apagar este item?");
		if(!ask){
			e.preventDefault();
		}
	});


	$('[data-toggle="datepicker"]').datepicker({format:'yyyy-mm-dd'});
