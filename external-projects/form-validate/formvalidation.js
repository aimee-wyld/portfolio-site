$(function() {
    //checks if the value of the user input is empty and, if so, displays error message below field.
    function require(id) {
        if ($(id).val() == "") {
            $(id).after('<p class="error"><i>Field Required</i></p>')
        }
    }

    //checks if the length of the user's input exceeds a specified length and, if so, displays error message below field.
    function maxLength(id, x) {
        if ($(id).val().length > x) {
            $(id).after('<p class="error"><i>Exceeds Maximum Length</i></p>')
        }
    }

    //checks if the field is empty: if so, does nothing. If not, checks if the length meets minimum requirement.
    function minLength(id, x) {
        if ($(id).val() == "") {
            //do nothing
        } else if ($(id).val().length < x) {
            $(id).after('<p class="error"><i>Under Minimum Length</i></p>')
        }
    }

    //Checks if the field doesn't contain letters and, if so, displays error message.
    function lettersOnly(id) {
        if ($(id).val().search(/[^A-Za-z]/) != -1) {
            $(id).after('<p class="error"><i>Letters Only</i></p>')
        }
    }

    //Check if the input matches the valid email regex. If not, displays error message.
    function validEmail(id) {
        if ($(id).val().search(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i) == -1)
        {
            $(id).after('<p class="error"><i>Invalid Email</i></p>')
        }
    }

    //Runs the appropriate validation functions on clicking 'validate', counts errors and prevents form submission if over 0.
    $("#validate").click(function(e) {
        var errorCount = 0

        $(".error").remove()

        if ($("#field8").val() != "") {
            $("#errorAlt").remove()
        }

        require("#field1")
        maxLength("#field2", 8)
        require("#field3")
        minLength("#field3", 10)
        maxLength("#field3", 25)
        minLength("#field4", 10)
        maxLength("#field4", 25)
        lettersOnly("#field5")
        validEmail("#field9")

        $(".error").each(function() {
            errorCount += 1
        })

        $("#errorAlt").each(function() {
            errorCount += 1
        })

        if (errorCount > 0) {
            e.preventDefault()
        }
    })

    //Listener on the 'yes' of 'not required'. If 'yes' is clicked, checks if field below is empty and displays error if so.
    $("#field6").click(function() {
        if ($("#field8").val() == "") {
            $("#field8").after('<p id="errorAlt"><i>Field Required</i></p>')
        }
    })

})

