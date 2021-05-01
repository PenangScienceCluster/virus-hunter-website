$(document).ready(function () {
  $(".spotlight-modal").on("shown.bs.modal", function () {
    $(".modal-backdrop").css("background-color", "white");
    $(".modal-backdrop").css("opacity", "0.8");
  });

  $(".spotlight-modal").on("hidden.bs.modal", function () {
    $(".modal-backdrop").css("background", "#000");
  });

  store("nipah", "star");
});
