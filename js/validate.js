// JavaScript for form validation goes here!

//Hook up the form submit button to a validate function
$(document).ready(function(){
    $('input[type="submit"]').on("click", validate);
});

//Perform validation logic on the form inputs
function validate(event)
{
    //Prevent the form from submitting
    //event.preventDefault();
    
    // Remove old error messages
    removeErrors();
    
    var isError = false;
    
    // Validate that title is submitted
    var title = $("#title").val();
    if (title == ""){
        report("title-error", "Title must be input");
        isError=true;
    }
    
    // Validate that sub title is submitted
    var title = $("#subTitle").val();
    if (title == ""){
        report("sub-title-error", "Sub title must be input");
        isError=true;
    }
    
    // Validate that photo is submitted
    var photo = $("#photo").val();
    if (photo == ""){
        report("photo-error", "Photo must be input");
        isError=true;
    }
    
    // Validate that description is submitted
    var description = $("#description").val();
    if (description == ""){
        report("description-error", "Description must be input");
        isError=true;
    }
    
    // Validate that location is submitted
    var location = $("#location").val();
    if (location == ""){
        report("location-error", "Location must be input");
        isError=true;
    }
    
    // submit the form if all data is good
    if (isError){
        return false;
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
    $("#title-error").parent().hide();
    $("#sub-title-error").parent().hide();
    $("#photo-error").parent().hide();
    $("#description-error").parent().hide();
    $("#location-error").parent().hide();
}