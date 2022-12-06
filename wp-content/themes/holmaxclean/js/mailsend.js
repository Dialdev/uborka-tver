jQuery(function() {


	jQuery('.feedback').submit( function( e ){

		e.preventDefault();

		var data = jQuery( this ).serialize();

		jQuery('.status_mail').html( ajax_mailsend_object.loadingmessage );
		jQuery.ajax({
			type: 'POST',
			dataType: 'json',
			url: ajax_mailsend_object.ajaxurl,
			data: {
				'action': 'ajaxmailsend',
				'name': jQuery('input[name="name"]').val(),
				'message': jQuery('textarea[name="message"]').val(),
				'email1': jQuery('input[name="email1"]').val(),
				'page': jQuery('input[name="page"]').val(),
				'security_mailsend': jQuery('#security_mailsend').val()
			},
			success: function(data){
				jQuery('.status_mail').html( data.message );
			}
		});

	});

	jQuery('.feedback').submit( function(){
		yaCounter29815874.reachGoal('service');
		console.log('Отработала цель для заказа услуги!');
		return true;
	})


});

