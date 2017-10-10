/*
 *@author: Duck Nguyen
 *@version: 1;0
 *06/04/2017
 */

$(document).ready(function() {
	
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
	
	//username validation
	var username = $("#username").val();
	if (username === ""){
		report("usernameErr", "Username cannot be empty");
		error = true;
	}
	
	//email validation
	var email = $("#email").val();
	var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
		report("emailErr", "Invalid email address");
	}
	
	//password validation
	var password1 = $("#password1").val();
	if (password1.length < 6){
		report("passErr1", "Password has to be at least 6 characters in length");
		error = true;
	} else if (!password1.match(/[0-9]/)) {
		report("passErr1", "Password must contain at least one numeric digit");
		error = true;
	} else if (!password1.match(/[!@#$%^&*]/)) {
		report("passErr1", "Password must contain at least one special character");
		error = true;
	}	
	
	//verify 2nd entered password is the same as first
	var password2 = $("#password2").val();
	if (password2 != password1){
		report("passErr2", "Password does not match");
		error = true;
	}
	
	//verify bio is not empty
	var biography = $("#bio").val();
	if (biography === ""){
		report("bioErr", "Biography cannot be empty");
		error = true;
	}
	
	//if no error submit the form
	if (!error) {
        $("#registration-form").submit();
    }
}

//update form to display error messages
function report(id, message) {
	$("#" + id).html(message);
	$("#" + id).parent().show();
}

//clear any previous errors if input is right
function removeErrors() {
    $("#nameErr").parent().hide();
}