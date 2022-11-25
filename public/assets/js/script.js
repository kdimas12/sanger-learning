$(document).ready(function () {
  const url = window.location.href;
  $("ul.navbar-nav a")
    .filter((x, y) => {
      return y == url;
    })
    .addClass("active");

  $("#datepicker").datepicker({
    changeYear: true,
    changeMonth: true,
    yearRange: "-80:+00",
    onSelect: (dateText, inst) => {
      $("#" + inst.id).attr("value", dateText);
    },
  });
});
