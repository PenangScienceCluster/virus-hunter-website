<div class="custom-modal modal fade" id="us_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <?= lang('App.subnav.us_anecdotes') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"><br>
        <div id="slide" class="carousel slide mt-4" data-ride="carousel" data-interval="false">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="popup-content">
                <div class="w-90 mx-auto text-center">
                  <img src="<?= $img ?>" class="us-img-big" />
                  <div class="popup-tex mt-4 w-100 text-center mx-auto">
                    <?= $text1 ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="popup-content">
                <div class="w-90 mx-auto text-center">
                  <img src="<?= $img ?>" class="w-60" />
                </div>
                <div class="popup-tex mt-4 w-70 text-center mx-auto">
                  <?= $text2 ?>
                </div>
              </div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#slide" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#slide" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>

        </div>

      </div>
    </div>
  </div>
</div>