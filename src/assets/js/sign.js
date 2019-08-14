$(document).ready(function () {




    function switchToSignup() {
        $('#signin-switch').removeClass("active");
        $('#signup-switch').addClass("active");
        $('#signin-form').hide();
        $('#signup-form').show();
    }


    function switchToSignin() {
        $('#signup-switch').removeClass("active");
        $('#signin-switch').addClass("active");
        $('#signup-form').hide();
        $('#signin-form').show();
    }


    switchToSignin();


    $('#signin-switch').click(function () {
        switchToSignin();
    })

    $('#signup-switch').click(function () {
        switchToSignup();
    })


});