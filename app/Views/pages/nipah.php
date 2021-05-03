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
  $drop .= '<div class="question " id="q' . $v['id'] . '" data-id="' . $v['id'] . '">
    <div class="question-box">
      <div class="answer-title">' . $v['title'] . '</div>
      <div class="answer-desc">' . $v['desc'] . '</div>
    </div>
  </div>';
}

shuffle($steps);
foreach ($steps as $i => $v) {
  $drag .= '<div class="answer " id="a' . $v['id'] . '" data-id="' . $v['id'] . '">
        <div class="answer-title">' . $v['title'] . '</div>
        <div class="answer-desc">' . $v['desc'] . '</div>
    </div>';
}

?>

<?= view('layouts/progressbar', [
  'title' => 'nipah virus'
]) ?>


<?= view('layouts/bottom-nav', [
  'nextLink' => '/covid',
  'nextLinkName' => 'covid-19',
  'backLink' => '/zoonotic',
  'backLinkName' => 'zoonotic diseases'
]) ?>


<!-- Modal -->
<div class="custom-modal modal fade" id="try_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.try_out') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        </button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <div class="mx-auto mt-4 drag-area">
            <h4 class="try-title text-center">
              <?= lang('App.nipah.popup.try_out.title') ?>
            </h4>
            <div class="try-body selectable-case d-flex">
              <div class="answers d-flex mt-4">
                <?= $drag ?>
              </div>
              <div class="questions d-flex ">

                <img src="/img/nipah/nipah-try-virus.png" class="img-fluid" />
                <?= $drop ?>
              </div>
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

<div class="custom-modal modal fade" id="fact_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.pocket_fact') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <img src="/img/nipah/moving-nipah-pocket-fact.gif" />
          <div class="popup-text">
            <?= lang('App.nipah.popup.pocket_fact') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="custom-modal modal fade" id="career_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.career_pathway') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        </button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <img src="/img/nipah/moving-nipah-career.gif" />
          <div class="popup-text">
            <?= lang('App.nipah.popup.career') ?>
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
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.virus_hunter') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        </button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <img src="/img/nipah/moving-nipah-virus-hunter.gif" />
          <div class="popup-text">
            <?= lang('App.nipah.popup.virus_hunter') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="custom-modal modal fade" id="career_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.career_pathway') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        </button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <img src="/img/nipah/moving-nipah-career.gif" />
          <div class="popup-text">
            <?= lang('App.nipah.popup.career') ?>
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
        <?= lang('App.nipah.spotlight.title') ?>
      </h5>
      <div class="w-80 mx-auto mt-4 position-relative">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>

        <div class="spotlight-modal-content">
          <img src="<?= lang('App.nipah.spotlight.contentImg') ?>" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
  <div class="bg"></div>
</div>

<div class="pandemic h-100">

  <div class="spotlight-btn">
    <?= lang('App.nipah.spotlight.btn') ?>
    <div class="w-70 mt-4"><img src="/img/arrow.png" class="img-fluid" /></div>
  </div>

  <div class="position-absolute gina animated fadeInLeft delay-2s ">
    <img src="/img/characters/gina-1.png" class="img-fluid" />
    <div class="bubble bubble-bottom-left" contenteditable><?= lang('App.nipah.dialog.girl') ?>
    </div>
  </div>
  <div class="position-absolute ilyas animated fadeInRight delay-2s ">
    <img src="/img/characters/ilyas-1.png" class="img-fluid" />
    <div class="bubble bubble-top-right" contenteditable><?= lang('App.nipah.dialog.boy') ?>
    </div>
  </div>

</div>
<?= $this->endSection()  ?>
<!-- end 1 -->