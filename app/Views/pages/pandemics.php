<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>


<?= view('layouts/progressbar', [
  'title' => lang('App.pandemics.title')
]) ?>

<?= view('layouts/bottom-nav', [
  'nextLink' => '/zoonotic',
  'nextLinkName' => str_replace('<br>', ' ', lang('App.zoonotic.title')),
  'backLink' => '/overview',
  'backLinkName' => 'overview'
]) ?>


<!-- Modal -->
<div class="custom-modal modal fade" id="fact_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.pocket_fact') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="exampleModalLabel1"></button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <div class="w-50">
            <img src="/img/pandemics/moving-pandemics-pocket-fact.gif" class="img-fluid " />
          </div>
          <div class="popup-text">
            <?= lang('App.pandemics.popup.pocket_fact') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="custom-modal modal fade" id="us_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <?= lang('App.subnav.us_anecdotes') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <div class="popup-tex mt-1 w-100 text-center font-weight-bold">
            <?= lang('App.pandemics.popup.didyouknow.0') ?>
          </div>
          <div class="w-60 mx-auto mt-4"><img src="/img/didyouknow/pandamics.png" class="img-fluid" /></div>
          <div class="popup-tex mt-4 w-90">
            <?= lang('App.pandemics.popup.didyouknow.1') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="custom-modal modal fade" id="virushunter_pop" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <?= lang('App.subnav.virus_hunter') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="popup-content my-4">
          <div class="w-60 mx-auto"><img src="/img/pandemics/moving-pandemics-virus-hunter.gif" class="img-fluid" />
          </div>
          <div class="popup-text mt-4">
            <?= lang('App.pandemics.popup.virus_hunter') ?>
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
        <h5 class="modal-title" id="exampleModalLabel">
          <?= lang('App.subnav.career_pathway') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <div class="w-60 mx-auto my-4"><img src="/img/pandemics/moving-pandemics-career.gif" /></div>
          <div class="popup-text mt-4">
            <?= lang('App.pandemics.popup.career') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="spotlight-pop d-none" id="spotlight_pop">
  <div class="row h-100 justify-content-center align-items-center content">
    <div class="col-11">
      <h5 class="title mx-auto">
        <div class="spotlight-title-img pos-2">
          <img src="/img/pandemics/pandemics-spotlight-virus.png" class="img-fluid" />
        </div>
        <div class="spotlight-title-img pos-1">
          <img class="img-fluid" src="/img/pandemics/pandemics-spotlight-ebola.png" />
        </div>
        <?= lang('App.pandemics.spotlight.title') ?>
      </h5>
      <div class="w-90 mx-auto mt-4 position-relative">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
        <img src="<?= lang('App.pandemics.spotlight.contentImg') ?>" class="img-fluid" />
      </div>
    </div>
  </div>
  <div class="bg"></div>
</div>


<div class="pandemic h-100">

  <div class="tv"></div>

  <div class="spotlight-btn">
    <?= lang('App.pandemics.spotlight.btn') ?>
    <div class="view-details">
      <?= lang('App.pandemics.spotlight.btn2') ?>
    </div>
    <!-- <div class="w-70 mt-4"><img src="/img/arrow.png" class="img-fluid" /></div> -->
  </div>
  <div class="position-absolute gina animated fadeInLeft">
    <img src="/img/characters/gina-1.png" class="img-fluid" />
    <div class="bubble bubble-bottom-left"><?= lang('App.pandemics.dialog.girl') ?>
    </div>
  </div>
  <div class="position-absolute ilyas animated fadeInRight">
    <img src="/img/characters/ilyas-1.png" class="img-fluid" />
    <div class="bubble bubble-top-right"><?= lang('App.pandemics.dialog.boy') ?>
    </div>
  </div>

</div>
<?= $this->endSection()  ?>
<!-- end 1 -->