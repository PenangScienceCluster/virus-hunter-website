$(function () {
  var currentCookies = getCookie();

  if (currentCookies != null) {
    $("#text-continue").removeClass("d-none");
  } else {
    $("#text-begin").removeClass("d-none");
  }

  $(".btn-begin").click(function () {
    var lang = $(this).data("lang");
    var currentCookies = getCookie();
    var lastSection = "pandemics";

    if (currentCookies != null && currentCookies != "") {
      var sections = currentCookies.split("|");
      lastSection = sections[sections.length - 1];

      if (lastSection.indexOf("-s") != -1) {
        lastSection = sections[sections.length - 2];
      }
    }
    console.log("[currentCookies]", currentCookies);
    console.log("[lastSection]", lastSection);
    // console.log("/" + lang + "/" + lastSection);
    location.href = "/" + lang + "/" + lastSection;
  });
});
