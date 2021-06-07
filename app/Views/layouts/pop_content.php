<div class="custom-modal modal fade" id="<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <?= $title ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="popup-content my-2">
          <div class="w-60 mx-auto"><img src="<?= $img ?>" class="img-fluid" />
          </div>
          <div class="popup-text mt-4">
            <?= $text ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>