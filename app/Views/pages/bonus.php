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

<div class="content-bonus-wrap h-100 overview animated fadeIn reward-wrap">


  <div class="reward-steps active" id="step-1">
    <div class="reward-center">

      <div class="board">

        <div class="gina-main"><img src="/img/characters/gina-1.png" class="img-fluid" /></div>
        <div class="ilynas-main"><img src="/img/characters/ilyas-1.png" class="img-fluid" /></div>


        <div class="reward-title"><i class="fas fa-camera"></i> <?= lang('App.reward.booth') ?></div>
        <h4 class="text-center font-weight-bold "><span
            class="text-center font-weight-bold"><?= lang('App.reward.subtitle') ?></span></h4>

        <div class="frame-select">
          <div class="frame-option" data-frame="1">
            <div class="frame">
              <img src="/img/reward/frame_1.png" class="img-fluid" />
            </div>
            <div class="frame-checkbox "></div>
          </div>
          <div class="frame-option" data-frame="2">
            <div class="frame">
              <img src="/img/reward/frame_2.png" class="img-fluid" />
            </div>
            <div class="frame-checkbox"></div>
          </div>
          <div class="frame-option" data-frame="3">
            <div class="frame">
              <img src="/img/reward/frame_3.png" class="img-fluid" />
            </div>
            <div class="frame-checkbox"></div>
          </div>
        </div>

        <div style="display:flex; flex-direction:row; justify-content:center">

          <div class="btn-proceed-mobile-case">
            <div class="position-relative btn-theme btn-disabled btn-proceed-mobile">
              <?= lang('App.reward.upload_take_photo') ?>
            </div>
            <input id="ipt-capture" type="file" class="ipt-capture" name="upload" accept="image/*" style="display:none">
          </div>
          <div class="position-relative btn-theme btn-disabled btn-upload">
            <?= lang('App.reward.upload_photo') ?>
          </div>
          <div class="position-relative btn-theme btn-disabled btn-proceed">
            <?= lang('App.reward.take_photo') ?>
          </div>
        </div>
        <input id="iptFile" type="file" name="upload" class="upload" style="display:none" accept="image/*" />
      </div>

    </div>
  </div>

  <div class="reward-steps " id="step-2">
    <div class="booth-case">
      <div class="booth-frame">
        <img src="" class="img-fluid booth-frame-img" />
      </div>
      <div class="booth-top">
        <div class="screenshot-case">
          <div id="screenshot" style="text-align:center;">


            <div class="videostream">
              <video autoplay=""></video>
              <!-- <div class="guide-overlay"></div> -->
            </div>
            <img id="screenshot-img">
          </div>
        </div>
      </div>
      <div class="booth-bottom">
        <div class="photo-action-case">
          <div class="btn-theme btn-sm back-button">
            <i class="fas fa-chevron-circle-left"></i> <?= lang('App.back') ?>
          </div>
          <div class="btn-camera-case">
            <div class="btn-theme-camera btn-sm" id="screenshot-button" disabled=""><i class="fas fa-camera"></i></div>
          </div>
        </div>
        <div class="photo-sub-action-case">
          <div class="photo-sub-action-case-inner">
            <div class="btn-theme btn-sm btn-disabled" id="retake-button" disabled="">
              <i class="fas fa-redo"></i>
              <?= lang('App.reward.retake') ?>
            </div>
            <div class="btn-theme btn-sm btn-disabled" id="use-button" disabled=""><?= lang('App.reward.use_photo') ?>
              <i class="fas fa-chevron-circle-right"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="reward-steps " id="step-3">
    <div class="reward-center">
      <div class="board">

        <div class="gina-main"><img src="/img/characters/gina-1.png" class="img-fluid" /></div>
        <div class="ilynas-main"><img src="/img/characters/ilyas-1.png" class="img-fluid" /></div>

        <div class="reward-title"><i class="fas fa-camera"></i> <?= lang('App.reward.booth') ?></div>

        <div class="final-case">
          <div class="final-left">
            <div class="final-left-inner">
              <div class="final-img-case">
                <div class="final-img-frame"><img src="/img/reward/frame_1.png" class="img-fluid" />
                  <div class="final-img frame1 landscape ori-landscape"
                    style="background-image: url('/img/reward/test-selfie.jpg')"></div>
                </div>
              </div>
            </div>
            <div class="final-img-action">
              <div class="btn-theme btn-sm mx-auto" id="rotate-button"><i class="fas fa-undo fa-flip-horizontal "></i>
                <?= lang('App.reward.btn_rotate') ?>
              </div>
            </div>

          </div>
          <div class="final-right">
            <div class="share-desc"><?= lang('App.reward.share_it') ?></div>
            <div class="position-relative btn-theme  mx-auto btn-share completed-action-btn" data-toggle="modal"
              data-target="#share_pop">
              <?= lang('App.reward.share_photo') ?>
            </div>
            <div class="position-relative btn-theme  mx-auto  completed-action-btn" id="redo-button">
              <i class="fas fa-camera"></i> <?= lang('App.reward.retake_photo') ?>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>


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

            <div class="share-processing">
              <div class="fa-3x">
                <i class="fas fa-cog fa-spin"></i>
              </div>
              <h4 class="text-center font-weight-bold" style="color: #000"><?= lang('App.reward.loading') ?></h4>
            </div>

            <div class="share-done">
              <h4 class="mb-4">
                <?= lang('App.reward.share_on') ?>
              </h4>
              <a href="#" class="mr-4 icon" class="icon" id="fb" data-desc="<?= lang('App.share_caption') ?>"
                data-url="<?= base_url() ?>">
                <img src="/img/completed/btn-share-fb-on.png" style="width:8vw" />
              </a>
              <a href="#" class="icon" id="wa" data-desc="<?= lang('App.share_caption') ?>"
                data-url="<?= base_url() ?>">
                <img src="/img/completed/btn-share-whatsapp-on.png" style="width:8vw" />
              </a>
            </div>

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