var nav = [
  "pandemics",
  "zoonotic",
  "nipah",
  "covid",
  "vaccines",
  "toolsandtechniques",
];

var navStar = ["zoonotic", "nipah", "vaccines", "toolsandtechniques"];

var preloadImg = [
  "/img/btn-burger-on.png",
  "/img/btn-bg-on.png",
  "/img/btn-side-fact-on.png",
  "/img/btn-side-try-on.png",
  "/img/btn-side-us-on.png",
  "/img/btn-side-virushunter-on.png",
  "/img/progressbar/1-on.png",
  "/img/progressbar/2-on-s.png",
  "/img/progressbar/2-on.png",
  "/img/progressbar/3-on-s.png",
  "/img/progressbar/3-on.png",
  "/img/progressbar/4-on.png",
  "/img/progressbar/5-on-s.png",
  "/img/progressbar/5-on.png",
  "/img/progressbar/6-on-s.png",
  "/img/completed/btn-website-on.png",
  "/img/completed/btn-fb-on.png",
  "/img/completed/btn-instagram-on.png",
  "/img/completed/btn-share-whatsapp-on.png",
  "/img/completed/btn-share-fb-on.png.png",
];
var currPos = "landscape";

$(function () {
  // eraseCookieStar();

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

  if ($(".spotlight-btn")) {
    $(".spotlight-btn").hover(
      function () {
        $(this)
          .find("div")
          .addClass("animated tada")
          .one(
            "animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
            function () {
              $(this).removeClass("animated tada");
            }
          );
      },
      function () {}
    );
  }

  if ($(".btm-nav").length) {
    $(".btm-nav").click(function () {
      location.href = $(this).data("href");
    });
  }
  //set body height
  if ($("body").width() < $("body").height()) {
    currPos = "portrait";
  }
  // setBodyHeight();
  $(".wrapper").height($("body").height());
  $(window).on("resize", setBodyHeight);

  runSideButton();

  // alert($("body").width() + "," + $("body").height());

  if ($("#slideus").length) {
    $("#slideus .carousel-control-prev").hide();
    $("#slideus").on("slid.bs.carousel", "", function () {
      $(
        "#slideus .carousel-control-next, #slideus .carousel-control-prev"
      ).show();

      if (
        $("#slideus .carousel-inner .carousel-item:first").hasClass("active")
      ) {
        $("#slideus .carousel-control-prev").hide();
      } else if (
        $("#slideus .carousel-inner .carousel-item:last").hasClass("active")
      ) {
        $(".carousel-control-next").hide();
      }
    });
  }
});
function setBodyHeight() {
  $(".wrapper").height($("body").height());

  if (currPos == "portrait") {
    location.reload();
  }
}
function runSideButton() {
  if ($(".btn-side").length) {
    $(".btn-side").each(function (index) {
      var ele = $(this);
      setTimeout(function () {
        ele
          .removeClass("d-none")
          .addClass("animated fadeInLeft")
          .one(
            "animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
            function () {
              $(this).removeClass("animated fadeInLeft");
              $(this)
                .find(".badge")
                .removeClass("d-none")
                .hide()
                .fadeIn("slow");
            }
          );
      }, 500 * index);
    });
  }
}
function markNav(currentSection) {
  var section = getCookie();
  var sections = section.split("|");

  var i;

  for (i = 0; i < nav.length; i++) {
    var id = nav[i];
    var idStar = id + "-s";
    var imgSrc = $("#" + id).data("src");

    if (sections.indexOf(idStar) > -1) {
      $("#" + id)
        .find("img")
        .attr("src", "/img/progressbar/" + imgSrc + "-on-s.png");
    } else if (sections.indexOf(id) > -1) {
      $("#" + id)
        .find("img")
        .attr("src", "/img/progressbar/" + imgSrc + "-on.png");
    }

    if (id == currentSection) {
      break;
    }
  }
}

$.fn.preload = function () {
  this.each(function () {
    $("<img/>")[0].src = this;
  });
};
$(preloadImg).preload();

function storeSection(value) {
  var existingStar = getCookieValue("vhst");
  var idx = nav.indexOf(value);

  for (var i = 0; i <= idx; i++) {
    var id = i + 1;
    var starExt = "";
    if (existingStar != undefined) {
      if (existingStar.indexOf(i) > -1) {
        starExt = "-s";
      }
    }
    $("#p" + id).attr(
      "src",
      "/img/progressbar/" + id + "-on" + starExt + ".png"
    );
  }
  // console.log("existingStar", existingStar);
  setCookieSection(idx);
}
function storeStar(value) {
  // mark current star
  var navIdx = nav.indexOf(value);
  var id = navIdx + 1;
  $("#p" + id).attr("src", "/img/progressbar/" + id + "-on-s.png");

  // keep track star
  var existingStar = getCookieValue("vhst");

  // console.log("existingStar", existingStar);

  var cookiesValuesStar = "";
  if (existingStar != undefined) {
    var idx = existingStar.indexOf(navIdx);

    // console.log("idx", idx);
    if (idx == -1) {
      if (existingStar != "") existingStar += "|";
      cookiesValuesStar = existingStar + navIdx;
    }
  } else {
    cookiesValuesStar = navIdx;
  }

  // setCookieStar(idx);

  // console.log("navIdx", navIdx);
  // console.log("existingStar", existingStar);
  // console.log("cookiesValuesStar", cookiesValuesStar);
  if (cookiesValuesStar != "") {
    // console.log("cookiesValuesStar last", cookiesValuesStar);
    setCookieStar(cookiesValuesStar);
  }
}

function getCookieValue(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}
function setCookieSection(value) {
  var date = new Date();
  date.setTime(date.getTime() + 1 * 24 * 60 * 60 * 1000);
  var expires = "; expires=" + date.toUTCString();

  document.cookie = "vhs=" + (value || "") + expires + "; path=/";
}
function setCookieStar(value) {
  var date = new Date();
  date.setTime(date.getTime() + 1 * 24 * 60 * 60 * 1000);
  var expires = "; expires=" + date.toUTCString();

  document.cookie = "vhst=" + (value || "") + expires + "; path=/";
}
function eraseCookieSection() {
  document.cookie = "vhs=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;";
}
function eraseCookieStar() {
  document.cookie = "vhst=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;";
}

// old
function store(value, category) {
  var existingValue = getCookie();
  var cookiesValues = "";

  if (category == "star") value += "-s";

  if (existingValue != null) {
    var idx = existingValue.indexOf(value);

    if (idx == -1) {
      cookiesValues = existingValue + "|" + value;
    }
  } else {
    cookiesValues = value;
  }

  if (cookiesValues != "") {
    setCookie(cookiesValues);
  }
  markNav(value);
}

function setCookie(value) {
  var date = new Date();
  date.setTime(date.getTime() + 1 * 24 * 60 * 60 * 1000);
  var expires = "; expires=" + date.toUTCString();

  document.cookie = "vh=" + (value || "") + expires + "; path=/";
}

function getCookie() {
  var nameEQ = "vh=";
  var ca = document.cookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}
function eraseCookie() {
  document.cookie = "vh=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;";
}
