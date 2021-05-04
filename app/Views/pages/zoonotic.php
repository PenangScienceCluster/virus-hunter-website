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
  'title' => 'zoonotic <br>diseases'
]) ?>

<?= view('layouts/bottom-nav', [
  'nextLink' => '/nipah',
  'nextLinkName' => 'nipah virus',
  'backLink' => '/pandemics',
  'backLinkName' => 'pandemics'
]) ?>


<!-- Modal -->
<div class="custom-modal modal fade" id="try_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
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
              <?= lang('App.zoonotic.popup.try_out.title') ?>
            </h4>
            <div class="try-body selectable-case d-flex mt-4">
              <?= $selects ?>
            </div>
            <div class="try-footer mt-4 feedback text-center text-uppercase">
              <div class="btn-done"><?= lang('App.done') ?>
              </div>

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

<div class="custom-modal modal fade" id="fact_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.pocket_fact') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <img src="/img/zoonotic/moving-zoonotic-pocket-fact.gif" />
          <div class="popup-text">
            <?= lang('App.zoonotic.popup.pocket_fact') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="custom-modal modal fade" id="career_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
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
          <img src="/img/zoonotic/moving-zoonotic-career.gif" />
          <div class="popup-text">
            <?= lang('App.zoonotic.popup.career') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="spotlight-pop d-none" id="spotlight_pop">
  <div class="row h-100 justify-content-center align-items-center content">
    <div class="col-12">
      <h5 class="title mx-auto mt-4">
        <?= lang('App.zoonotic.spotlight.title') ?>
      </h5>
      <div class="w-80 mx-auto position-relative">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
        <img src="<?= lang('App.zoonotic.spotlight.contentImg') ?>" class="img-fluid" />
      </div>
    </div>
  </div>
  <div class="bg"></div>
</div>


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
    <div class="w-70 mt-4"><img src="/img/arrow.png" class="img-fluid" /></div>
  </div>

  <div class="position-absolute gina animated fadeInLeft delay-1s ">
    <img src="/img/characters/gina-1.png" class="img-fluid" />
    <div class="bubble bubble-bottom-left" contenteditable><?= lang('App.zoonotic.dialog.girl') ?>
    </div>
  </div>
  <div class="position-absolute ilyas animated fadeInRight delay-1s ">
    <img src="/img/characters/ilyas-1.png" class="img-fluid" />
    <div class="bubble bubble-top-right" contenteditable><?= lang('App.zoonotic.dialog.boy') ?>
    </div>
  </div>

</div>
<?= $this->endSection()  ?>
<!-- end 1 -->