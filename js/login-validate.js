/*
 *@author: Duck Nguyen
 *@version: 1;0
 *06/11/2017
 */

$(document).ready(function() {
	//temporarily hide the error divs
	$('.alert-danger').hide();
	
	//when user click submit, validate user's inputs
	$('#submit').on("click", validate);
});

function validate(event) {
	
	//prevent buttom from submitting
	event.preventDefault();
	
	//remove old error messages
	removeErrors();
	
	//keep track of errors
	var error = false;
	
	//email validation
	var email = $("#email").val();
	var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
		report("emailErr", "Invalid email address");
	}
	
	//password validation
	var password = $("#password").val();
	if (password.length < 6){
		report("passErr", "Password has to be at least 6 characters in length");
		error = true;
	} else if (!password.match(/[0-9]/)) {
		report("passErr", "Password must contain at least one numeric digit");
		error = true;
	}	
	
	//if no error submit the form
	if (!error) {
        $("#login-form").submit();
    }
}

//update form to display error messages
function report(id, message) {
	$("#" + id).html(message);
	$("#" + id).parent().show();
}

//clear any previous errors if input is right
function removeErrors() {
    $("#emailErr").parent().hide();
	$("#passErr").parent().hide();
}