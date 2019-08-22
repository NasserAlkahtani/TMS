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

  remove();
  $("#dropdown-button").click(function() {
    active();
  });
});
