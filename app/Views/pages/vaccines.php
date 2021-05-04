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
  'title' => 'vaccines'
]) ?>
<?= view('layouts/bottom-nav', [
  'nextLink' => '/toolsandtechniques',
  'nextLinkName' => 'tools & techniques',
  'backLink' => '/covid',
  'backLinkName' => 'covid-19'
]) ?>

<!-- Modal -->

<div class="custom-modal modal fade" id="try_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <?= lang('App.subnav.try_out') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <div class="mx-auto drag-area">
            <h4 class="try-title text-center">
              <?= lang('App.vaccines.spotlight.title') ?>
            </h4>
            <h4 class="text-center">
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
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="custom-modal modal fade" id="fact_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.pocket_fact') ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <img src="/img/vaccines/moving-vaccines-pocket-fact.gif" />
          <div class="popup-text">
            <?= lang('App.vaccines.popup.pocket_fact') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="custom-modal modal fade" id="virushunter_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.virus_hunter') ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        </button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <img src="/img/vaccines/moving-vaccines-virus-hunter.gif" />
          <div class="popup-text">
            <?= lang('App.vaccines.popup.virus_hunter') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="spotlight-pop d-none" id="spotlight_pop">
  <div class="row h-100 justify-content-center align-items-center content">
    <div class="col-9">
      <h5 class="title mx-auto">
        <?= lang('App.vaccines.spotlight.title') ?>
      </h5>
      <div class=" mx-auto mt-4 position-relative">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
        <img src="<?= lang('App.vaccines.spotlight.contentImg') ?>" class="img-fluid" />
      </div>
    </div>
  </div>
  <div class="bg"></div>
</div>



<div class="pandemic h-100">

<div class="doctor"></div>
<div class="boy"></div>

  <div class="spotlight-btn">
    <?= lang('App.vaccines.spotlight.btn') ?>
    <div class="w-70 mt-4"><img src="/img/arrow.png" class="img-fluid" /></div>
  </div>


  <div class="position-absolute gina animated fadeInLeft delay-1s ">
    <img src="/img/characters/gina-1.png" class="img-fluid" />
    <div class="bubble bubble-bottom-center-left" contenteditable><?= lang('App.vaccines.dialog.girl') ?></div>
  </div>
  <div class="position-absolute ilyas animated fadeInRight delay-1s ">
    <img src="/img/characters/ilyas-1.png" class="img-fluid" />
    <div class="bubble bubble-top-right" contenteditable><?= lang('App.vaccines.dialog.boy') ?></div>
  </div>

</div>
<?= $this->endSection()  ?>
<!-- end 1 -->