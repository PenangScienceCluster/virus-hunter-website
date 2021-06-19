<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>


<?= view('layouts/progressbar', [
  'title' => lang('App.pandemics.title')
]) ?>

<?= view('layouts/bottom-nav', [
  'nextLink' => '/zoonotic',
  'nextLinkName' => str_replace('<br>', ' ', lang('App.zoonotic.title')),
  'backLink' => '/overview',
  'backLinkName' => lang('App.overview_bottom_nav')
]) ?>


<!-- Modal -->

<!-- fact pocket -->
<?= view('layouts/pop_content', [
  'id' => 'fact_pop',
  'title' => lang('App.subnav.pocket_fact'),
  'img' => '/img/pandemics/moving-pandemics-pocket-fact.gif',
  'text' => lang('App.pandemics.popup.pocket_fact'),
]) ?>

<!-- virus hunter -->
<?= view('layouts/pop_content', [
  'id' => 'virushunter_pop',
  'title' => lang('App.subnav.virus_hunter'),
  'img' => '/img/pandemics/moving-pandemics-virus-hunter.gif',
  'text' => lang('App.pandemics.popup.virus_hunter')
]) ?>


<!-- career -->
<?= view('layouts/pop_content', [
  'id' => 'career_pop',
  'title' => lang('App.subnav.career_pathway'),
  'img' => '/img/pandemics/moving-pandemics-career.gif',
  'text' => lang('App.pandemics.popup.career')
]) ?>


<!-- did you know -->
<?= view('layouts/pop_us_content', [
  'img' => '/img/didyouknow/pandamics.png',
  'title' => lang('App.pandemics.popup.didyouknow.title'),
  'text' => lang('App.pandemics.popup.didyouknow.content'),
]) ?>


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
        <img
          src="<?= lang('App.pandemics.spotlight.contentImg') ?>"
          class="img-fluid" />
      </div>
    </div>
  </div>
  <div class="bg"></div>
</div>


<div class="pandemic h-100">

  <div class="tv"></div>

  <?= view('layouts/spotlight_btn', [
    'title' => lang('App.pandemics.spotlight.btn')
  ]) ?>

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