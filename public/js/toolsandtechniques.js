var currentDragId = "";
var correctCount = 0;
$(function () {
  store("toolsandtechniques");

  // $("#spotlight_pop").modal("show");

  $(".spotlight-btn").click(function () {
    $(".spotlight-pop")
      .removeClass("d-none")
      .addClass("animated fadeInRight")
      .one(
        "animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
        function () {
          $(this).removeClass("animated fadeInRight");
        }
      );
  });

  $(".close").click(function () {
    $(".spotlight-pop")
      .addClass("animated fadeOutRight")
      .one(
        "animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",
        function () {
          $(this).removeClass("animated fadeOutRight").addClass("d-none");
        }
      );
  });

  // $("#try_pop").modal("show");

  $(".answer").draggable({
    containment: ".drag-area",
    opacity: 1,
    revert: true,
    revertDuration: 1000,
    start: function (event, ui) {
      currentDragId = $(this).data("id");
    },
  });

  $(".question").droppable({
    accept: ".answer",
    drop: function (event, ui) {
      var id = $(this).data("id");
      if (id == currentDragId) {
        var ele = $("#q" + id);
        ele.css("border-color", "#fff");
        ele.find(".step").addClass("d-none");
        ele.find("img").animate({ opacity: 1 }, 1000);
        $("#a" + id).css("visibility", "hidden");

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
        correctCount++;

        if (correctCount == 3) {
          store("toolsandtechniques", "star");
        }
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
      }
    },
  });
});
