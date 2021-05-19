<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>


<div class="custom-modal modal fade" id="share_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body h-100 align-items-center">
        <div class="row" style="height:90vh">
          <div class="col-sm-12 my-auto text-center">

            <h4 class="mb-4">Share on:</h4>

            <a href="#">
              <img src="/img/completed/btn-share-fb-off.png" class="icon" id="fb" style="width:8vw" />
            </a>
            <a href="#">
              <img src="/img/completed/btn-share-whatsapp-off.png" class="icon" id="wa" style="width:8vw" />
            </a>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="content-wrap h-100 overview animated fadeIn">
  <div class="row">
    <div class="col-10 mx-auto">
      <div class="board">
        <div class="medal w-25 mx-auto"><img src="/img/completed/medal.png" class="img-fluid" /></div>
        <div class="stars w-100 mx-auto text-center">
          <img src="/img/moving-star.gif" class="img-fluid" />
          <img src="/img/moving-star.gif" class="img-fluid" />
          <img src="/img/moving-star.gif" class="img-fluid" />
          <img src="/img/moving-star.gif" class="img-fluid" />
        </div>
        <h3 class="text-white text-center tenbyfive">
          <?=lang('App.completed.title') ?>
        </h3>
        <h4 class="text-center font-weight-bold">
          <?=lang('App.completed.desc') ?>
        </h4>
        <div class="position-relative btn-theme w-40 mx-auto btn-share mt-4" data-toggle="modal"
          data-target="#share_pop">
          <?= lang('App.btn_share') ?>
        </div>
      </div>
      <div class="row">
        <div class="contact mx-auto col-7 text-center">
          <h4 class="mt-4">
            <?= lang('App.completed.join') ?>
          </h4>
          <div class="row social">
            <div class="col-4">
              <a href="https://www.pscpen.com" target="_blank" class="small">
                <img src="/img/completed/btn-website-off.png" />
                www.pscpen.com
              </a>
            </div>
            <div class="col-4">
              <a href="https://www.facebook.com/PenangScienceCluster" target="_blank" class="small">
                <img src="/img/completed/btn-fb-off.png" />
                @PenangScienceCluster
              </a>
            </div>
            <div class="col-4">
              <a href="https://www.instagram.com/pscpen" target="_blank" class="small">
                <img src="/img/completed/btn-instagram-off.png" />
                @pscpen
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="position-absolute gina animated fadeInLeft delay-2s">
  <img src="/img/characters/gina-1.png" class="img-fluid" />
  <div class="bubble bubble-left animated bounceInLeft delay-3s">
    <div class="owl-carousel owl-theme photos">
      <div class="item small align-middle">
        <?= lang('App.completed.dialog.0', ["/".locale().'/gallery']) ?>
      </div>
      <div class="item small">
        <?= lang('App.completed.dialog.1', ['https://www.usaid.gov/']) ?>
      </div>
      <div class="item small">
        <?= lang('App.completed.dialog.2', ['https://www.usaid.gov/']) ?>
      </div>
    </div>

  </div>
</div>

<?= view('pages/bottom-logo') ?>


<?= $this->endSection()  ?>
<!-- end 1 -->