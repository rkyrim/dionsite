$(function(){
	$('form#modal-form-login').submit(function(event) {
		var url = $(this).attr('action');
		var loader = $("#loading");
		var email_div = $('#error-msg');
		var form_data = {
			email: $('input[name="email"]').val(),
			password: $('input[name="password"]').val(),
			'guard_token': guard_value
		}

		loader.css('display', 'block');

        $.ajax({
	        url: url,
	        type: 'POST',
	        dataType: 'json',
	        encode: true,
    		data: form_data
    	})
    	.done(function( data ) {
	    	console.log(data);

	    	if ( ! data.success ) {
	    		loader.css({'display':'none'});

	    		if( data.passed_validation ) {
	    			if( data.errors.email ) {
		    			email_div.addClass('error');
		    			$('#error-msg').text(data.errors.email).css('display', 'block');
		    		}
	    		}
	    	} else {
	    		window.location.reload();
	    	}
	    })
	    .fail(function( data ) {
	    		console.log(data);
	    });

	    event.preventDefault();
	});


	$('form#modal-form-signup').submit(function(event) {
		var url = $(this).attr('action');
		var loader = $("#loading");
		var email_div = $('#error-msg');
		var form_data = {
			firstname: $('input[name="first_name"]').val(),
			lastname: $('input[name="last_name"]').val(),
			email: $('input[name="email"]').val(),
			password: $('input[name="password"]').val(), 
			prcno: $('input[name="prcno"]').val(),
			'guard_token': guard_value
		}

		loader.css('display', 'block');

        $.ajax({
	        url: url,
	        type: 'POST',
	        dataType: 'json',
	        encode: true,
    		data: form_data
    	})
    	.done(function( data ) {
	    	console.log(data);

	    	if ( ! data.success ) {
	    		loader.css({'display':'none'});

	    		if( data.passed_validation ) {
	    			if( data.message ) {
		    			email_div.addClass('error');
		    			$('#error-msg').text(data.message).css('display', 'block');
		    		}
	    		}
	    	} else {
	    		window.location.reload();
	    	}
	    })
	    .fail(function( data ) {
	    		console.log(data);
	    });

	    event.preventDefault();
	});
});