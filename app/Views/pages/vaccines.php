<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<style>
</style>

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

<div class="custom-modal modal fade" id="try_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.try_out') ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>

<div class="spotlight-modal modal fade" id="spotlight_pop" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?= lang('App.vaccines.spotlight.title') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <div class="spotlight-modal-content">
    <img src="/img/vaccines/vaccines-spotlight-<?= $locale ?>.png" class="img-fluid" />
        </div>
      </div>
    </div>
  </div>
</div>



<div class="pandemic h-100">

  <div class="spotlight-btn" data-toggle="modal" data-target="#spotlight_pop"><?= lang('App.vaccines.spotlight.btn') ?>
    <img src="/img/arrow.png" />
  </div>

  <div class="position-absolute gina animated fadeInLeft delay-2s ">
    <img src="/img/characters/gina-1.png" class="img-fluid" />
    <div class="bubble bubble-bottom-center-left" contenteditable><?= lang('App.vaccines.dialog.girl') ?></div>
  </div>
  <div class="position-absolute ilyas animated fadeInRight delay-2s ">
    <img src="/img/characters/ilyas-1.png" class="img-fluid" />
    <div class="bubble bubble-top-right" contenteditable><?= lang('App.vaccines.dialog.boy') ?></div>
  </div>

</div>
<?= $this->endSection()  ?>
<!-- end 1 -->