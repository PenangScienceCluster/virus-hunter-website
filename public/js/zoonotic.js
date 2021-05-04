$(function () {
  store("zoonotic");

  // spotlight
  $(".spotlight-btn").click(function () {
    $(".spotlight-pop")
      .removeClass("d-none")
      .addClass("animated fadeInLeft")
      .one(
        "animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
        function () {
          $(this).removeClass("animated fadeInLeft");
        }
      );
  });

  $(".close").click(function () {
    $(".spotlight-pop")
      .addClass("animated fadeOutLeft")
      .one(
        "animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
        function () {
          $(this).removeClass("animated fadeOutLeft").addClass("d-none");
        }
      );
  });
  // end of spotlight

  // try out
  $(".selectable").on("click", function () {
    $(this).toggleClass("selected");
  });

  $(".btn-done").on("click", function () {
    var selected = $(".selected").length;
    $(".btn-done").addClass("d-none");

    if(selected == 5) {
      correct = true
    } else {
      correct = false
    }

    if (correct) {
      $("#wrong").addClass("d-none");
      $("#correct")
        .removeClass("d-none")
        .parent()
        .addClass("animated tada")
        .one(
          "animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
          function () {
            $(this).removeClass("animated tada");
          }
        );
        
        store("zoonotic", "star");
    } else {
      $("#correct").addClass("d-none");
      $("#wrong")
        .removeClass("d-none")
        .parent()
        .addClass("animated tada")
        .one(
          "animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
          function () {
            $(this).removeClass("animated tada");
          }
        );

      setTimeout(function () {
        resetBtn();
      }, 2000);
    }
  });

  // end of try out
});

function resetBtn() {
  $("#wrong").addClass("d-none");
  $("#correct").addClass("d-none");
  $(".btn-done").removeClass("d-none");
}
