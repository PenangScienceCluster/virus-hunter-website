<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<?php
$steps = lang('App.toolsandtechniques.popup.try_out.items');

$drop = $drag ='';

foreach ($steps as $i => $v) {
    $drop .= '<div class="question mr-1" id="q'.$v['id'].'" data-id="'.$v['id'].'"><img src="'.$v['src'].'" class="img-fluid" /><div class="step">Step '.($i+1).'</div></div>';
}

shuffle($steps);
foreach ($steps as $i => $v) {
    $drag .= '<div class="answer mr-1" id="a'.$v['id'].'" data-id="'.$v['id'].'"><img src="'.$v['src'].'" class="img-fluid" /></div>';
}

?>
<?= view('layouts/progressbar', [
  'title' => lang('App.toolsandtechniques.title')
]) ?>
<?= view('layouts/bottom-nav', [
  'nextLink' => '/completed',
  'nextLinkName' => lang('App.done'),
  'backLink' => '/vaccines',
  'backLinkName' => lang('App.vaccines.title')
]) ?>

<!-- Modal -->


<!-- pocket fact -->
<?= view('layouts/pop_content', [
  'id' => 'fact_pop',
  'title' => lang('App.subnav.pocket_fact'),
  'img' => '/img/toolsandtechniques/moving-tools-pocket-fact.gif',
  'text' => lang('App.toolsandtechniques.popup.pocket_fact'),
]) ?>
<!-- did you know -->
<?= view('layouts/pop_us_content', [
  'img' => '/img/didyouknow/tools.png',
  'text1' => lang('App.toolsandtechniques.popup.didyouknow.0'),
  'text2' => lang('App.toolsandtechniques.popup.didyouknow.1'),
]) ?>
<!-- spotlight -->
<?= view('layouts/pop_spotlight_content', [
  'id' => 'spotlight_pop',
  'title' => lang('App.toolsandtechniques.spotlight.title'),
  'img' => lang('App.toolsandtechniques.spotlight.contentImg'),
]) ?>


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

        <div class="popup-content py-4 w-80 mx-auto mb-4">
          <div class="w-80 mx-auto drag-area">
            <h4 class="try-title text-center">
              <?= lang('App.toolsandtechniques.popup.try_out.title') ?>
            </h4>
            <div class="questions d-flex mt-4">
              <?= $drop ?>
            </div>
            <div class="answers d-flex mt-4">
              <?= $drag ?>
            </div>
            <div class="my-4 feedback text-center text-uppercase" style="height: 20px;">

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




<div class="toolsandtechniques h-100">
  <div class="lab-furniture"></div>

  <div class="spotlight-btn">
    <?= lang('App.toolsandtechniques.spotlight.btn') ?>
    <div class="view-details">
      <?= lang('App.pandemics.spotlight.btn2') ?>
    </div>
    <!-- <div class="w-70 mt-4"><img src="/img/arrow.png" class="img-fluid" /></div> -->
  </div>

  <div class="position-absolute gina animated fadeInRight">
    <img src="/img/characters/gina-2.png" class="img-fluid" />
    <div class="bubble bubble-top-right">
      <?= lang('App.toolsandtechniques.dialog.girl') ?>
    </div>
  </div>
  <div class="position-absolute ilyas animated fadeInLeft">
    <img src="/img/characters/ilyas-2.png" class="img-fluid" />
    <div class="bubble bubble-bottom-left">
      <?= lang('App.toolsandtechniques.dialog.boy') ?>
    </div>
  </div>

</div>
<?= $this->endSection()  ?>
<!-- end 1 -->