var preloadImg = ["/img/btn-burger-on.png", "/img/btn-bg-on.png"];

$(function () {
  $(".btn-back").on("click", function () {
    $(".navbar-collapse").collapse("hide");
  });

  $("#btn-nav").hover(
    function () {
      $(this).attr("src", "/img/btn-burger-on.png");
    },
    function () {
      $(this).attr("src", "/img/btn-burger-off.png");
    }
  );
});

$.fn.preload = function () {
  this.each(function () {
    $("<img/>")[0].src = this;
  });
};
$(preloadImg).preload();
