var preloadImg = [
  "/img/btn-burger-on.png",
  "/img/btn-bg-on.png",
  "/img/btn-side-fact-on.png",
  "/img/btn-side-try-on.png",
  "/img/btn-side-us-on.png",
  "/img/btn-side-virus-hunter-on.png",
];

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

  if ($(".btn-side")) {
    $(".btn-side").hover(
      function () {
        var img = "/img/" + $(this).data("img") + "-on.png";
        $(this).find("img").attr("src", img);
      },
      function () {
        var img = "/img/" + $(this).data("img") + "-off.png";
        $(this).find("img").attr("src", img);
      }
    );
  }
});

$.fn.preload = function () {
  this.each(function () {
    $("<img/>")[0].src = this;
  });
};
$(preloadImg).preload();
