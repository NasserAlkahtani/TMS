$(document).ready(function () {

    $("#notification-x").click(function () {
        $("#notification").addClass("notification-hide");
        setTimeout(function () {
            $("#notification").remove();
        }, 400);


    });

});