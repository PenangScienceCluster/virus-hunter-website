$(function () {
  $(".header")
    .removeClass("d-none")
    .addClass("animated fadeInDown slow")
    .one(
      "animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
      function () {
        $(".moving-virus").delay(800).animate({ opacity: 1 }, 1000);
        $(".moving-bat").delay(1000).animate({ opacity: 1 }, 1000);
      }
    );
});
