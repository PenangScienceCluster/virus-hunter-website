$(document).ready(function () {
  store("pandemics");

  // spotlight
  $(".spotlight-btn").click(function () {
    $(".spotlight-pop")
      .removeClass("d-none")
      .addClass("animated fadeInLeft")
      .one(
        "animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
        function () {
          $(this).removeClass("animated fadeInLeft");
        }
      );
  });

  $(".close").click(function () {
    $(".spotlight-pop")
      .addClass("animated fadeOutLeft")
      .one(
        "animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
        function () {
          $(this).removeClass("animated fadeOutLeft").addClass("d-none");
        }
      );
  });
  // end of spotlight
});
