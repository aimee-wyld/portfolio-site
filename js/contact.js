$(function() {
    //checks if the value of the user input is empty and, if so, displays error message below field.
    function require(id) {
        if ($(id).val() == "") {
            $(id).addClass("error")
        }
    }

    //Check if the input matches the valid email regex. If not, displays error message.
    function validEmail(id) {
        if ($(id).val().search(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i)
            == -1)
        {
            $(id).addClass("error")
        }
    }

    //Check if antispam measure has been filled in correctly.
    function antiSpam(id) {
        if ($(id).val() != 40)
        {
            $(id).addClass("error")
        }
    }

    //Runs the appropriate validation functions on clicking 'validate', counts errors and prevents form submission if over 0.
    $("#validate").click(function(e) {
        var errorCount = 0

        $("input").removeClass("error")
        $("textarea").removeClass("error")

        require("#field1")
        require("#field2")
        require("#field3")
        require("#field4")
        require("#field5")
        validEmail("#field2")
        antiSpam("#field4")

        $(".error").each(function() {
            errorCount += 1
        })

        if (errorCount > 0) {
            e.preventDefault()
        }
    })
})
