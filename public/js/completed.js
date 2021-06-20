var starCount = 0;

$(function () {
  // $("#share_pop").modal("show");

  // $("#fb img").hover(
  //   function () {
  //     $(this).attr("src", "/img/completed/btn-share-fb-off.png");
  //   },
  //   function () {
  //     $(this).attr("src", "/img/completed/btn-share-fb-on.png");
  //   }
  // );

  // $("#wa img").hover(
  //   function () {
  //     $(this).attr("src", "/img/completed/btn-share-whatsapp-off.png");
  //   },
  //   function () {
  //     $(this).attr("src", "/img/completed/btn-share-whatsapp-on.png");
  //   }
  // );

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

  var url = "/" + lang + "/toolsandtechniques";
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
      url = "/";

      eraseCookieSection();
      eraseCookieStar();
    }
  }

  if (notCompleted) {
    $(".title2, .desc2").removeClass("d-none");

    // $(".stars").addClass("less");
  }

  $(".btn-return").click(function () {
    location.href = url;
  });
});
