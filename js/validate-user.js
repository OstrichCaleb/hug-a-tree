// JavaScript for form validation goes here!

//Hook up the form submit button to a validate function
$(document).ready(function(){
    $('input[type="submit"]').on("click", validate);
});

//Perform validation logic on the form inputs
function validate(event)
{
    //Prevent the form from submitting
    event.preventDefault();
    
    // Remove old error messages
    removeErrors();
    
    var isError = false;
    
    // Validate password is at least 6 characters long and contains a special character and a number
    var pass = $("#password").val();
    var regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    
    if (pass.length < 6){
        report("password-error", "Password must contain at least 6 characters");
        isError =  true;
    } else if (!regularExpression.test(pass)){
      report("password-error", "Password must contain at least 1 special character and 1 number");
      isError =  true;
    }
    
    // Validate that username is submitted
    var username = $("#username").val();
    if (username == "" || username == null){
        report("username-error", "Username must be input");
        isError=true;
    }
    
    // Validate that verify is the same as the password
    var verify = $("#verify").val();
    if (verify != pass){
        report("verify-error", "Passwords must be the same");
        isError=true;
    }
    
    // submit the form if all data is good
    if (!isError){
        $("#user-form").submit();
    }
}

//function to report errrors
function report(id, message)
{
    $("#" + id).html(message);
    $('#' + id).parent().show();
}

//Clear any previous errors
function removeErrors()
{
    $("#password-error").parent().hide();
    $("#username-error").parent().hide();
    $("#verify-error").parent().hide();
}