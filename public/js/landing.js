$(function () {
  $(".header")
    .removeClass("d-none")
    .addClass("animated fadeInDown slow")
    .one(
      "animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
      function () {
        $(".virus").delay(800).animate({ opacity: 1 }, 1000);
        $(".bat").delay(1000).animate({ opacity: 1 }, 1000);
      }
    );
});
