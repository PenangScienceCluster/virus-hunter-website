<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<style>
  .custom-modal .modal-content {
    min-height: 40vw;
  }

  #share_pop .gina {
    width: 21%;
    position: absolute;
    left: 7%;
    bottom: 20%;
  }

  #share_pop .ilynas {
    width: 16%;
    position: absolute;
    right: 7%;
    bottom: 20%;
  }
</style>

<div class="custom-modal modal fade" id="share_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body h-100 align-items-center">
        <div class="gina"><img src="/img/characters/gina-1.png" class="img-fluid" /></div>
        <div class="ilynas"><img src="/img/characters/ilyas-1.png" class="img-fluid" /></div>
        <div class="row" style="height:60vh">
          <div class="col-sm-12 my-auto text-center">
            <h4>
              <?= lang('App.completed.pop_title') ?>
            </h4>
            <h4 class="mb-4">
              <?= lang('App.completed.share_on') ?>:
            </h4>
            <a href="#" class="mr-4 icon" class="icon" id="fb"
              data-desc="<?= lang('App.share_caption') ?>"
              data-url="<?= base_url() ?>">
              <img src="/img/completed/btn-share-fb-on.png" style="width:8vw" />
            </a>
            <a href="#" class="icon" id="wa"
              data-desc="<?= lang('App.share_caption') ?>"
              data-url="<?= base_url() ?>">
              <img src="/img/completed/btn-share-whatsapp-on.png" style="width:8vw" />
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
        <div class="medal w-20 mx-auto"><img src="/img/completed/medal.png" class="img-fluid" /></div>
        <div class="stars w-100 mx-auto text-center">
          <img src="/img/completed/star-off.png" class="img-fluid" id="star1" />
          <img src="/img/completed/star-off.png" class="img-fluid" id="star2" />
          <img src="/img/completed/star-off.png" class="img-fluid" id="star3" />
          <img src="/img/completed/star-off.png" class="img-fluid" id="star4" />
        </div>
        <h3 class="text-white text-center tenbyfive">
          <span class="d-none title">
            <?=lang('App.completed.title') ?>
          </span>
          <span class="d-none title2">
            <?=lang('App.completed.title2') ?>
          </span>
        </h3>
        <h4 class="text-center font-weight-bold">
          <span class="d-none desc">
            <?=lang('App.completed.desc') ?>
          </span>
          <span class="d-none desc2">
            <?=lang('App.completed.desc2') ?>
          </span>
        </h4>
        <div class="d-flex w-60 mx-auto">
          <div class="position-relative btn-theme w-40 mx-auto btn-return">
            <?= lang('App.return') ?>
          </div>
          <div class="position-relative btn-theme w-40 mx-auto btn-share" data-toggle="modal" data-target="#share_pop">
            <?= lang('App.btn_share') ?>
          </div>
        </div>
      </div>
      <div class="row mt-4 social-wrap">
        <div class="contact mx-auto col-7 text-center">
          <div class="mt-4 title">
            <?= lang('App.completed.join') ?>
          </div>
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

    <div id="slide" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <?= lang('App.completed.dialog.0', ["/".locale().'/gallery']) ?>
        </div>
        <div class="carousel-item">
          <?= lang('App.completed.dialog.1', ['https://www.usaid.gov/']) ?>
        </div>
        <div class="carousel-item">
          <?= lang('App.completed.dialog.2', ['https://www.cdc.gov/']) ?>
        </div>
      </div>

      <a class="carousel-control-prev" href="#slide" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#slide" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>

    </div>



  </div>
</div>
<style>
  .carousel-item {
    font-size: 1vw;
  }

  .carousel-control-prev {
    left: -2vw;
  }

  .carousel-control-next {
    right: -2vw;
  }
</style>

<?= view('pages/bottom-logo') ?>
<script>
  var lang = '<?= locale() ?>';
</script>

<?= $this->endSection()  ?>
<!-- end 1 -->