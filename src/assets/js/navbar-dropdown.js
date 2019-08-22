$(document).ready(function() {
  function remove() {
    $("#off-icon-dropdown-div").hide();
    $("#off-icon-dropdown-div-cover").removeClass(
      "off-icon-dropdown-div-cover"
    );
  }
  function active() {
    $("#off-icon-dropdown-div").show();
    $("#off-icon-dropdown-div-cover").addClass("off-icon-dropdown-div-cover");
  }

  $("#dropdown-button").click(function() {
    console.log($("#off-icon-dropdown-div").attr("display"));
    if (
      $("#off-icon-dropdown-div").attr("style") == "display: none;" ||
      $("#off-icon-dropdown-div").attr("style") == undefined
    ) {
      active();
    } else {
      remove();
    }
  });
  $("#off-icon-dropdown-div-cover").click(function() {
    console.log($("#off-icon-dropdown-div").attr("display"));
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
