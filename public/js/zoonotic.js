var currentDragId = "";
$(function () {
  $(".thumb").draggable({
    containment: ".drag-area",
    opacity: 1,
    revert: true,
    revertDuration: 1000,
    start: function (event, ui) {
      currentDragId = $(this).data("id");
    },
  });

  $(".box-drop").droppable({
    accept: ".thumb",
    drop: function (event, ui) {
      var id = $(this).data("id");
      if (id == currentDragId) {
      } else {
      }
    },
  });
});
