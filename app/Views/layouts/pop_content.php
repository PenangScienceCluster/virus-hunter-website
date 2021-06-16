<div class="modal fade pop-model-content" id="<?= $id ?>" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">

        <h5 class="modal-title" id="exampleModalLabel">
          <img src="/img/popup/icn_<?= $id ?>.jpg" class="icn" /><?= $title ?>
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img src="/img/popup/btn-popup-close-off.png" class="img-fluid" />
        </button>

        <div class="popup-content py-4 w-80 mx-auto">
          <div class="pop-img text-center">
            <img src="<?= $img ?>" class="img-text" />
          </div>
          <div class="popup-text mt-4">
            <?= $text ?>
          </div>
          <br>
        </div>
      </div>
    </div>
  </div>
</div>