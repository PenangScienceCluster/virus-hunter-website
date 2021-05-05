$(function () {
  $(".header")
    .removeClass("d-none")
    .addClass("animated fadeInDown slow")
    .one(
      "animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
      function () {
        $(".virus").delay(2000).animate({ opacity: 1 }, 1000);
        $(".bat").delay(3000).animate({ opacity: 1 }, 1000);
      }
    );
});
