<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<style>
</style>

<?php
$steps = lang('App.zoonotic.popup.try_out.items');
$selects = '';

foreach ($steps as $i => $v) {
    $selects .= '<div class="selectable" id="q'.$v['id'].'" data-id="'.$v['id'].'"><img src="'.$v['src'].'" class="img-fluid" /></div>';
}

?>

<?= view('layouts/progressbar', [
  'title' => lang('App.zoonotic.title')
]) ?>

<?= view('layouts/bottom-nav', [
  'nextLink' => '/nipah',
  'nextLinkName' => lang('App.nipah.title'),
  'backLink' => '/pandemics',
  'backLinkName' => lang('App.pandemics.title')
]) ?>


<!-- Modal -->
<div class="modal fade pop-model-content" id="try_pop" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">

        <h5 class="modal-title" id="exampleModalLabel">
          <img src="/img/popup/icn_try_pop.jpg" class="icn" />
          <?= lang('App.subnav.try_out') ?>
        </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <img src="/img/popup/btn-popup-close-off.png" class="img-fluid" />
        </button>

        <div class="popup-content py-4 w-90 mx-auto">

          <div class="mx-auto mt-4 drag-area">
            <h4 class="try-title text-center">
              <?= lang('App.zoonotic.popup.try_out.title') ?>
            </h4>
            <div class="try-body selectable-case d-flex mt-4">
              <?= $selects ?>
            </div>
            <div class="btn-theme w-40 mx-auto">
              <?= lang('App.done') ?>
            </div>
            <div class="try-footer feedback text-center text-uppercase">
              <span class="text-success d-none" id="correct">
                <?= lang('App.correct') ?> <img src="/img/moving-star.gif" class="star" />
              </span>

              <span class="text-danger d-none" id="wrong">
                <?= lang('App.try_again') ?>!
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- pocket fact -->
<?= view('layouts/pop_content', [
  'id' => 'fact_pop',
  'title' => lang('App.subnav.pocket_fact'),
  'img' => '/img/zoonotic/moving-zoonotic-pocket-fact.gif',
  'text' => lang('App.zoonotic.popup.pocket_fact'),
]) ?>


<!-- career -->
<?= view('layouts/pop_content', [
  'id' => 'career_pop',
  'title' => lang('App.subnav.career_pathway'),
  'img' => '/img/zoonotic/moving-zoonotic-career.gif',
  'text' => lang('App.zoonotic.popup.career')
]) ?>


<!-- spotlight -->
<?= view('layouts/pop_spotlight_content', [
  'title' => lang('App.zoonotic.spotlight.title'),
  'img' => lang('App.zoonotic.spotlight.contentImg'),
]) ?>

<!-- did you know -->
<?= view('layouts/pop_us_content', [
  'img' => '/img/didyouknow/zoonotic.png',
  'text' => []
  // 'text' => lang('App.zoonotic.didyouknow'),
]) ?>


<div class="pandemic h-100">

  <div class="bat-1"></div>
  <div class="bat-2"></div>
  <div class="bat-3"></div>
  <div class="bat-4"></div>
  <div class="bat-5"></div>
  <div class="bird-1"></div>
  <div class="bird-2"></div>


  <div class="spotlight-btn">
    <?= lang('App.zoonotic.spotlight.btn') ?>
    <div class="view-details">
      <?= lang('App.pandemics.spotlight.btn2') ?>
    </div>
    <!-- <div class="w-70 mt-4"><img src="/img/arrow.png" class="img-fluid" /></div> -->
  </div>

  <div class="position-absolute gina animated fadeInLeft">
    <img src="/img/characters/gina-1.png" class="img-fluid" />
    <div class="bubble bubble-left"><?= lang('App.zoonotic.dialog.girl') ?>
    </div>
  </div>
  <div class="position-absolute ilyas animated fadeInRight">
    <img src="/img/characters/ilyas-1.png" class="img-fluid" />
    <div class="bubble bubble-right"><?= lang('App.zoonotic.dialog.boy') ?>
    </div>
  </div>

</div>
<?= $this->endSection()  ?>
<!-- end 1 -->