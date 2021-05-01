$(document).ready(function () {
  $(".outbreak-modal").on("shown.bs.modal", function () {
    $(".modal-backdrop").css("background-color", "white");
    $(".modal-backdrop").css("opacity", "0.8");
  });

  $(".outbreak-modal").on("hidden.bs.modal", function () {
    $(".modal-backdrop").css("background", "#000");
  });

  store("pandemics");
  // eraseCookie();
});
