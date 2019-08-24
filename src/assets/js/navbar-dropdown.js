$(document).ready(function () {
  function remove() {
    $("#off-icon-dropdown-div").fadeOut(200);
    $("#off-icon-dropdown-div-cover").removeClass(
      "off-icon-dropdown-div-cover"
    );
  }

  function active() {
    $("#off-icon-dropdown-div").show();
    $("#off-icon-dropdown-div-cover").addClass("off-icon-dropdown-div-cover");
  }

  $("#off-icon-dropdown-div-cover").click(function () {
    console.log("aa");
    remove();
  });

  $("#dropdown-button").click(function () {
    if (
      $("#off-icon-dropdown-div").attr("style") == "display: none;" ||
      $("#off-icon-dropdown-div").attr("style") == undefined
    ) {
      active();
    } else {
      remove();
    }
  });
});