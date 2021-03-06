<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<style>
</style>
<!-- this one need start -->
<input type="hidden" id="section" value="<?= $section ?>" />
<!-- this one need end -->

<?php
$steps = lang('App.nipah.popup.try_out.items');

$drop = $drag = '';

foreach ($steps as $i => $v) {
    $num = 2;
    if ($v['id'] == 3) {
        $num = 1;
    }
    if ($v['id'] == 1) {
        $num = 3;
    }
    $drop .= '<div class="question " id="q' . $v['id'] . '" data-id="' . $v['id'] . '">
    <div class="pop_num">'.$num.'</div>
    <div class="question-box">
      <div class="answer-title">' . $v['title'] . '</div>
      <div class="answer-desc">' . $v['desc'] . '</div>
    </div>
  </div>';
}

// shuffle($steps);
foreach ($steps as $i => $v) {
    $drag .= '<div class="answer " id="a' . $v['id'] . '" data-id="' . $v['id'] . '">
        <div class="answer-title">' . $v['title'] . '</div>
        <div class="answer-desc">' . $v['desc'] . '</div>
    </div>';
}

?>

<?= view('layouts/progressbar', [
  'title' => lang('App.nipah.title')
]) ?>


<?= view('layouts/bottom-nav', [
  'nextLink' => '/covid',
  'nextLinkName' => lang('App.covid.title'),
  'backLink' => '/zoonotic',
  'backLinkName' => str_replace('<br>', ' ', lang('App.zoonotic.title'))
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

        <div class="popup-content  w-80 mx-auto">
          <div class="mx-auto drag-area">
            <h4 class="try-title text-center">
              <?= lang('App.nipah.popup.try_out.title') ?>
            </h4>
            <div class="try-body selectable-case d-flex">
              <div class="answers d-flex">
                <?= $drag ?>
              </div>
              <div class="questions text-center">
                <img src="/img/nipah/nipah-try-virus.png" />
                <?= $drop ?>
              </div>
            </div>

            <div class="try-footer feedback text-center text-uppercase">
              <span class="text-success d-none" id="correct">
                <?= lang('App.correct') ?> <img
                  src="/img/moving-star.gif" class="star" />
              </span>

              <span class="text-danger d-none" id="wrong">
                <?= lang('App.try_again') ?>!
              </span>

            </div>
            <br>
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
  'img' => '/img/nipah/moving-nipah-pocket-fact.gif',
  'text' => lang('App.nipah.popup.pocket_fact'),
]) ?>

<!-- career -->
<?= view('layouts/pop_content', [
  'id' => 'career_pop',
  'title' => lang('App.subnav.career_pathway'),
  'img' => '/img/nipah/moving-nipah-career.gif',
  'text' => lang('App.nipah.popup.career')
]) ?>


<!-- virushunter -->
<?= view('layouts/pop_content', [
  'id' => 'virushunter_pop',
  'title' => lang('App.subnav.virus_hunter'),
  'img' => '/img/nipah/moving-nipah-virus-hunter.gif',
  'text' => lang('App.nipah.popup.virus_hunter')
]) ?>


<!-- career -->
<?= view('layouts/pop_content', [
  'id' => 'career_pop',
  'title' => lang('App.subnav.career_pathway'),
  'img' => '/img/nipah/moving-nipah-career.gif',
  'text' => lang('App.nipah.popup.career')
]) ?>

<!-- spotlight -->
<?= view('layouts/pop_spotlight_content', [
  'id' => 'spotlight_pop',
  'title' => lang('App.nipah.spotlight.title'),
  'img' => lang('App.nipah.spotlight.contentImg'),
]) ?>



<div class="pandemic h-100">

  <div class="cows"></div>

  <?= view('layouts/spotlight_btn', [
    'title' => lang('App.nipah.spotlight.btn')
  ]) ?>


  <div class="position-absolute gina animated fadeInLeft">
    <img src="/img/characters/gina-1.png" class="img-fluid" />
    <div class="bubble bubble-bottom-left"><?= lang('App.nipah.dialog.girl') ?>
    </div>
  </div>
  <div class="position-absolute ilyas animated fadeInRight">
    <img src="/img/characters/ilyas-1.png" class="img-fluid" />
    <div class="bubble bubble-top-right"><?= lang('App.nipah.dialog.boy') ?>
    </div>
  </div>

</div>
<?= $this->endSection()  ?>
<!-- end 1 -->