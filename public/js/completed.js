$(function () {
  $(".photos").owlCarousel({
    autoplay: false,
    loop: false,
    dots: false,
    margin: 0,
    nav: true,
    items: 1,
    navText: [
      "<div class='owl-prev'><i class='fas fa-chevron-left'></i></div>",
      "<div class='owl-next'><i class='fas fa-chevron-right'></i></div>",
    ],
  });
});
