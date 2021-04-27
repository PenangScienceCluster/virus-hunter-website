$(function () {
  // var carousel = $(".owl-carousel").owlCarousel({
  //   items: 1,
  //   loop: 1,
  //   dots: 1,
  //   autoplay: 0,
  // });
  // window.owlTube = $(carousel).owlTube({
  //   autoplay: 0,
  // });

  $(".photos").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    items: 1,
    navText: [
      "<div class='owl-prev'><i class='fas fa-chevron-left'></i></div>",
      "<div class='owl-next'><i class='fas fa-chevron-right'></i></div>",
    ],
  });

  var videoCarousel = $(".videos");
  var owl = videoCarousel.owlCarousel({
    autoHeight: true,
    video: true,
    autoplay: true,
    autoplayHoverPause: true,
    items: 1,
    nav: true,
    navText: [
      "<div class='owl-prev'><i class='fas fa-chevron-left'></i></div>",
      "<div class='owl-next'><i class='fas fa-chevron-right'></i></div>",
    ],
  });

  function fitCarouselVideo() {
    videoCarousel
      .find("iframe")
      .attr("height", videoCarousel.find(".owl-stage-outer").height());
  }

  owl.on("play.owl.video", function (e) {
    setTimeout(fitCarouselVideo, 800);
  });

  $(window).resize(function () {
    setTimeout(fitCarouselVideo, 800);
  });
});
