var starCount = 0;

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

  eraseCookie();

  $("#fb img").hover(
    function () {
      $(this).attr("src", "/img/completed/btn-share-fb-on.png");
    },
    function () {
      $(this).attr("src", "/img/completed/btn-share-fb-off.png");
    }
  );

  $("#wa img").hover(
    function () {
      $(this).attr("src", "/img/completed/btn-share-whatsapp-on.png");
    },
    function () {
      $(this).attr("src", "/img/completed/btn-share-whatsapp-off.png");
    }
  );

  $(".icon").click(function (e) {
    e.preventDefault();

    var id = $(this).attr("id");
    var url = $(this).data("url");
    var desc = $(this).data("desc");

    var param = "?s=" + starCount + "&" + Math.random();
    var social = {
      fb: {
        width: 600,
        height: 300,
        url:
          "https://www.facebook.com/sharer/sharer.php?u=" +
          encodeURI(url + param) +
          "&quote=" +
          encodeURI(desc),
      },
      tw: {
        width: 600,
        height: 254,
        url:
          "https://twitter.com/share?url=" +
          encodeURI(desc + " " + url + param),
      },
      wa: {
        url:
          "https://api.whatsapp.com/send?text=" +
          encodeURI(desc + " " + url + param),
      },
    };

    var popup = function (social) {
      var options = "menubar=no,toolbar=no,resizable=yes,scrollbars=yes,";
      window.open(
        social[id].url,
        "",
        options + "height=" + social[id].height + ",width=" + social[id].width
      );
    };

    popup(social);
  });

  var currentCookiesStar = getCookieValue("vhst");
  var notCompleted = true;
  // currentCookiesStar = "1|2|2|3";
  if (
    currentCookiesStar != null &&
    currentCookiesStar != "" &&
    currentCookiesStar != undefined
  ) {
    var stars = currentCookiesStar.split("|");
    starCount = stars.length;

    for (var i = 0; i < starCount; i++) {
      $("#star" + (i + 1)).attr("src", "/img/completed/star-on.png");
    }

    if (starCount == 4) {
      $(".title, .desc").removeClass("d-none");
      $(".medal").css("visibility", "visible");
      notCompleted = false;
    }
  }

  if (notCompleted) {
    $(".title2, .desc2").removeClass("d-none");

    $(".stars").addClass("less");
  }

  eraseCookieSection();
  eraseCookieStar();
});
