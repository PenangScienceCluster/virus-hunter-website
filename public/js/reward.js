var startTime = Date.now();
var timeThreshold = 1000;
var frameId = 1;
var imgBase64 = '';
var filename = '';
var starCount = 0;


$(function () {
  $(".frame-option").click(function () {
    frameId = $(this).data("frame");

    $(".frame-checkbox").removeClass("checked");
    $(this).find(".frame-checkbox").addClass("checked");

    $(".btn-proceed").removeClass("btn-disabled");
  });
});
$(function () {
  const constraints = {
    video: true,
  };

  const btnStart = document.querySelector("#start-button");
  const btnRetake = document.querySelector("#retake-button");
  const btnUse = document.querySelector("#use-button");
  const screenshotButton = document.querySelector("#screenshot-button");
  const img = document.querySelector("#screenshot img");
  const video = document.querySelector("#screenshot video");

  const canvas = document.createElement("canvas");

  // navigator.mediaDevices
  //     .getUserMedia(constraints)
  //     .then(handleSuccess)
  //     .catch(handleError);

  btnStart.onclick = function () {
    navigator.mediaDevices
      .getUserMedia(constraints)
      .then(handleSuccess)
      .catch(handleError);
  };

  screenshotButton.onclick = video.onclick = function () {
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    canvas.getContext("2d").drawImage(video, 0, 0);
    // Other browsers will fall back to image/png
    img.src = canvas.toDataURL("image/webp");
    imgBase64 =  canvas.toDataURL("image/webp").split(';base64,')[1];

    btnUse.classList.remove("btn-disabled");
    btnRetake.classList.remove("btn-disabled");

    $("#screenshot-img").show();
    $(".videostream").hide();
  };

  btnRetake.onclick = function () {
    $(".videostream").show();
    $("#screenshot-img").hide();
    btnUse.classList.add("btn-disabled");
    btnRetake.classList.add("btn-disabled");
  };

  function handleSuccess(stream) {
    detectPermissionDialog(true);
    screenshotButton.disabled = false;
    video.srcObject = stream;

    $(".btn-camera-case").addClass("active")
    $("#start-button ").removeClass("active")
  }

  function handleError(error) {
    console.log(error.name);
    if (
      error.name == "NotAllowedError" ||
      error.name == "PermissionDismissedError"
    ) {
      detectPermissionDialog(false);
    }
  }

  function detectPermissionDialog(allowed) {
    if (Date.now() - startTime > timeThreshold) {
    }
  }

  $("#use-button").click(function () {
    if (!$("#use-button").hasClass("btn-disabled")) {
      var formData = {
        frameId: frameId,
        image: imgBase64,
      };

      $.post(BASE_URL + "/merge-image", formData, function (data) {
        var jdata = JSON.parse(data);
        filename = jdata.filename;

        $(".final-img img").attr("src", BASE_URL+"/writable/uploads/merge/"+jdata.filename)

      });

      // next with frameId
      goToStep(3)
    }
  });

  $("#redo-button").click(function() {
    var formData = {
      filename: filename
    }

    $.post(BASE_URL + "/delete-image", formData, function (data) {

    });
    goToStep(1)
  })

  $(".btn-proceed").click(function() {
    if (!$(".btn-proceed").hasClass("btn-disabled")) {
      goToStep(2)
    }
  })

  function goToStep(num) {
    $(".reward-steps").removeClass("active")
    $("#step-"+num).addClass("active")
  }



  // ------
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
});
