$(document)
.on("submit", "form.form-signin", function(event){
	event.preventDefault();

	var _form = $(this);
	var _error = $(".alert-danger", _form);
	var data = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val()
	}
	if(data.email.length < 16){
		_error
		.text("email shevii")
		.show();
		return false;
	}
	else if(data.password.length < 6){
		_error
		.text("senha shevii")
		.show();
		return false;
	}
	_error.hide();
	return false;
})