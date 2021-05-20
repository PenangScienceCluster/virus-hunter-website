$(function () {
  var currentCookies = getCookieValue("vhs");
  var currentCookiesStar = getCookieValue("vhst");

  if (currentCookies != null) {
    $("#text-continue").removeClass("d-none");
  } else {
    $("#text-begin").removeClass("d-none");
  }

  $(".btn-begin").click(function () {
    var lang = $(this).data("lang");
    var lastSection = "pandemics";

    if (
      currentCookies != null &&
      currentCookies != "" &&
      currentCookies != undefined
    ) {
      lastSection = nav[currentCookies];
    }
    location.href = "/" + lang + "/" + lastSection;
  });

  if (
    currentCookiesStar != null &&
    currentCookiesStar != "" &&
    currentCookiesStar != undefined
  ) {
    var lang = $("#progress").data("lang");
    var stars = currentCookiesStar.split("|");
    $("#progress").attr(
      "src",
      "/img/overview/progress-" + lang + "-" + stars.length + ".png"
    );
  }
});
