$(document).ready(function () {



    function removeNotification() {
        $("#notification").addClass("notification-hide");
        setTimeout(function () {
            $("#notification").remove();
        }, 400);
    }

    $("#notification-x").click(function () {
        removeNotification();
    });

});