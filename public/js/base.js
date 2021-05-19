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
  // setBodyHeight();
  // $(window).on("resize", setBodyHeight);
});
function setBodyHeight() {
  $(".wrapper").height($("body").height());
}

function markNav(currentSection) {
  var section = getCookie();
  var sections = section.split("|");
  var nav = [
    "pandemics",
    "zoonotic",
    "nipah",
    "covid",
    "vaccines",
    "toolsandtechniques",
  ];
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
