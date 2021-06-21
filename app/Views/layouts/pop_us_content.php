<div class="modal fade pop-model-content" id="us_pop" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">

        <h5 class="modal-title" id="exampleModalLabel">
          <img src="/img/popup/icn_us_pop.jpg" class="icn" />
          <?= lang('App.subnav.us_anecdotes') ?>
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img src="/img/popup/btn-popup-close-off.png" class="img-fluid" />
        </button>

        <div class="popup-content py-4 w-80 mx-auto">
          <div class="w-80 mx-auto text-center lineheight carousel-title">
            <?= $title ?>
          </div>
          <div class="w-90 mx-auto text-center">
            <img src="<?= $img ?>" class="us-img-big" />
          </div>

          <div id="slideus" class="carousel slide" data-ride="carousel" data-interval="false" data-wrap="false">
            <div class="carousel-inner">
              <?php
                foreach ($text as $i=>$v) {
                    $active = $i==0 ? 'active' : '';
                    echo '<div class="carousel-item '.$active.'"><div class="my-4 w-80 mx-auto text-center lineheight">'.$v.'</div></div>';
                }
              ?>

              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#slideus" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#slideus" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .carousel-item,
  .carousel-title {
    font-size: 1.5vw;

  }
</style>


<!-- end -->