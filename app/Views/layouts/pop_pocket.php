<div class="custom-modal modal fade" id="fact_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <?= lang('App.subnav.pocket_fact') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="exampleModalLabel1"></button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <div class="header-img text-center mx-auto">
            <img src="<?= $img ?>" class="img-fluid" />
          </div>
          <div class="popup-text mt-4">
            <?= $text ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
#fact_pop .header-img {
  width: 50%;
}

@media only screen and (max-height: 414px) {

  #fact_pop .header-img {
    width: 30%;
  }
}
</style>