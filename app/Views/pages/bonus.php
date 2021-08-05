<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<script>
  var BASE_URL = '<?= base_url() ?>'
</script>
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

<div class="content-wrap h-100 overview animated fadeIn reward-wrap">


  <div class="reward-steps active" id="step-1">
    <div class="reward-center">

      <div class="gina-main"><img src="/img/characters/gina-1.png" class="img-fluid" /></div>
      <div class="ilynas-main"><img src="/img/characters/ilyas-1.png" class="img-fluid" /></div>

      <div class="board">
        <div class="reward-title"><i class="fas fa-camera"></i> <?= lang('App.reward.booth') ?></div>
        <div class="reward-subtitle"> <?= lang('App.reward.subtitle') ?></div>

        <div class="frame-select">
          <div class="frame-option" data-frame="1">
            <div class="frame">
              <img src="/img/reward/frame_1.png" class="img-fluid" />
            </div>
            <div class="frame-checkbox "></div>
          </div>
          <div class="frame-option" data-frame="2">
            <div class="frame">
              <img src="/img/reward/frame_2.png" class="img-fluid" /></div>
            <div class="frame-checkbox"></div>
          </div>
          <div class="frame-option" data-frame="3">
            <div class="frame">
              <img src="/img/reward/frame_3.png" class="img-fluid" /></div>
            <div class="frame-checkbox"></div>
          </div>
        </div>

        <div style="display:flex; flex-direction:row; justify-content:center">
          <div class="position-relative btn-theme btn-disabled btn-share btn-upload">
            <?= lang('App.reward.upload_photo') ?>
          </div>
          <div class="position-relative btn-theme btn-disabled btn-share btn-proceed">
            <?= lang('App.reward.take_photo') ?>
          </div>
        </div>
        <input id="iptFile" type="file" name="upload" class="upload" style="display:none" accept="image/*"/>
      </div>

    </div>
  </div>

  <div class="reward-steps " id="step-2">
    <div class="booth-case">
      <div class="booth-top">
        <div class="screenshot-case">
          <div id="screenshot" style="text-align:center;">
            <div class="videostream">
              <video autoplay=""></video>
              <div class="guide-overlay"></div>
            </div>
            <img id="screenshot-img">
          </div>
        </div>
      </div>
      <div class="booth-bottom">
        <div class="photo-action-case">
          <div class="btn-theme btn-sm back-button"><i class="fas fa-chevron-circle-left"></i> <?= lang('App.back') ?></div>
          <div class="btn-theme btn-sm active" id="start-button"><?= lang('App.reward.start') ?></div>
          <div class="btn-camera-case">
            <div class="btn-theme-camera btn-sm" id="screenshot-button" disabled=""><i class="fas fa-camera"></i></div>
          </div>
        </div>
        <div class="photo-sub-action-case">
          <div class="photo-sub-action-case-inner">
            <div class="btn-theme btn-sm btn-disabled" id="retake-button" disabled=""><i class="fas fa-redo"></i> <?= lang('App.reward.retake') ?></div>
            <div class="btn-theme btn-sm btn-disabled" id="use-button" disabled=""><?= lang('App.reward.use_photo') ?> <i class="fas fa-chevron-circle-right"></i> </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="reward-steps " id="step-3">
    <div class="reward-center">

      <div class="gina-main"><img src="/img/characters/gina-1.png" class="img-fluid" /></div>
      <div class="ilynas-main"><img src="/img/characters/ilyas-1.png" class="img-fluid" /></div>

      <div class="board">
        <div class="reward-title"><i class="fas fa-camera"></i> <?= lang('App.reward.booth') ?></div>

        <div class="final-case">
          <div class="final-left">
            <div class="final-img">
              <img src="" class="img-fluid" />
            </div>
          </div>
          <div class="final-right">
            <div class="share-desc"><?= lang('App.reward.share_it') ?></div>
            <div class="position-relative btn-theme  mx-auto btn-share completed-action-btn" data-toggle="modal" data-target="#share_pop">
              <?= lang('App.reward.share_photo') ?>
            </div>
            <div class="position-relative btn-theme  mx-auto btn-share completed-action-btn" id="redo-button">
              <i class="fas fa-camera"></i> <?= lang('App.reward.retake_photo') ?>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>


<div class="custom-modal modal fade" id="share_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <a href="#" class="mr-4 icon" class="icon" id="fb" data-desc="<?= lang('App.share_caption') ?>" data-url="<?= base_url() ?>">
              <img src="/img/completed/btn-share-fb-on.png" style="width:8vw" />
            </a>
            <a href="#" class="icon" id="wa" data-desc="<?= lang('App.share_caption') ?>" data-url="<?= base_url() ?>">
              <img src="/img/completed/btn-share-whatsapp-on.png" style="width:8vw" />
            </a>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
  var lang = '<?= locale() ?>';
</script>

<?= $this->endSection()  ?>
<!-- end 1 -->