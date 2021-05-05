<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<div class="container h-100 overview animated fadeIn">
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
        <h2 class="text-white text-center tenbyfive">
          <?=lang('App.completed.title') ?>
        </h2>
        <h4 class="text-center font-weight-bold">
          <?=lang('App.completed.desc') ?>
        </h4>
        <div class="position-relative btn-theme w-40 mx-auto btn-share mt-4">
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
        <?= lang('App.completed.dialog.0', ['https://www.cdc.gov/']) ?>
      </div>
      <div class="item small">
        <?= lang('App.completed.dialog.1') ?>
      </div>
      <div class="item small">
        <?= lang('App.completed.dialog.2') ?>
      </div>
    </div>

  </div>
</div>

<?= view('pages/bottom-logo') ?>


<?= $this->endSection()  ?>
<!-- end 1 -->