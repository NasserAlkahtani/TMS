$(document).ready(function () {

  $("#notification").fadeIn();
  $("#notification").css("display", "flex");

  function removeNotification() {
    // if you want to hide by trasforming 
    // $("#notification").addClass("notification-hide");
    // setTimeout(function() {
    //   $("#notification").remove();
    // }, 400);
    $("#notification").fadeOut();

  }

  $("#notification-x").click(function () {
    removeNotification();
  });
});