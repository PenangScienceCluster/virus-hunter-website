<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<style>
</style>
<?php
$steps = lang('App.vaccines.popup.try_out.items');

$drop = $drag ='';

foreach ($steps as $i => $v) {
    $drop .= '<div class="question " id="q'.$v['id'].'" data-id="'.$v['id'].'"><div class="step">'.$v['step'].'</div><div class="question-box"><img src="'.$v['src'].'" class="img-fluid" /></div></div>';
}

shuffle($steps);
foreach ($steps as $i => $v) {
    $drag .= '<div class="answer" id="a'.$v['id'].'" data-id="'.$v['id'].'"><img src="'.$v['src'].'" class="img-fluid" /></div>';
}

?>
<?= view('layouts/progressbar', [
  'title' => lang('App.vaccines.title')
]) ?>
<?= view('layouts/bottom-nav', [
  'nextLink' => '/toolsandtechniques',
  'nextLinkName' => lang('App.toolsandtechniques.title'),
  'backLink' => '/covid',
  'backLinkName' => lang('App.covid.title')
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

        <div class="popup-content py-4 w-80 mx-auto">
          <br>
          <div class="mx-auto drag-area">
            <h4 class="try-title text-center">
              <?= lang('App.vaccines.spotlight.title') ?>
            </h4>
            <h4 class="try-title2 text-center">
              <?= lang('App.vaccines.popup.try_out.title') ?>
            </h4>
            <div class="try-body">
              <div class="questions d-flex mt-4">
                <?= $drop ?>
              </div>
              <div class="answers d-flex">
                <?= $drag ?>
              </div>
            </div>
            <div class="mt-2 feedback text-center text-uppercase">

              <span class="text-success d-none" id="correct">
                <?= lang('App.correct') ?> <img src="/img/moving-star.gif" class="star" />
              </span>

              <span class="text-danger d-none" id="wrong">
                <?= lang('App.try_again') ?>!
              </span>
            </div>
            <br><br>
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
  'img' => '/img/vaccines/moving-vaccines-pocket-fact.gif',
  'text' => lang('App.vaccines.popup.pocket_fact'),
]) ?>


<!-- virus hunter -->
<?= view('layouts/pop_content', [
  'id' => 'virushunter_pop',
  'title' => lang('App.subnav.virus_hunter'),
  'img' => '/img/vaccines/moving-vaccines-virus-hunter.gif',
  'text' => lang('App.vaccines.popup.virus_hunter'),
]) ?>

<!-- spotlight -->
<?= view('layouts/pop_spotlight_content', [
  'title' => lang('App.vaccines.spotlight.title'),
  'img' => lang('App.vaccines.spotlight.contentImg'),
]) ?>

<!-- did you know -->
<?= view('layouts/pop_us_content', [
  'img' => '/img/didyouknow/vaccine.png',
  'text' => lang('App.vaccines.popup.didyouknow'),
]) ?>

<div class="pandemic h-100">

  <div class="doctor"></div>
  <div class="boy"></div>

  <div class="spotlight-btn">
    <?= lang('App.vaccines.spotlight.btn') ?>
    <div class="view-details">
      <?= lang('App.pandemics.spotlight.btn2') ?>
    </div>
    <!-- <div class="w-70 mt-4"><img src="/img/arrow.png" class="img-fluid" /></div> -->
  </div>

  <div class="position-absolute gina animated fadeInLeft">
    <img src="/img/characters/gina-1.png" class="img-fluid" />
    <div class="bubble bubble-bottom-left"><?= lang('App.vaccines.dialog.girl') ?>
    </div>
  </div>
  <div class="position-absolute ilyas animated fadeInRight">
    <img src="/img/characters/ilyas-1.png" class="img-fluid" />
    <div class="bubble bubble-top-right"><?= lang('App.vaccines.dialog.boy') ?>
    </div>
  </div>

</div>
<?= $this->endSection()  ?>
<!-- end 1 -->