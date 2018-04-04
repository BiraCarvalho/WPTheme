jQuery.validator.setDefaults({

	highlight: function(element) {
			$(element).closest('.form-group').addClass('was-validated');
	},
	unhighlight: function(element) {
			$(element).closest('.form-group').removeClass('was-validated');
	},
	errorElement: 'div',
	errorClass: 'invalid-feedback',
	
	errorPlacement: function(error, element) {
			if(element.parent('.input-group').length) {
					error.insertAfter(element.parent());
			} else {
					error.insertAfter(element);
			}
	}

})
