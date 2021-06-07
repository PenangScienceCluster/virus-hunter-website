<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<style>
</style>

<?= view('layouts/progressbar', [
  'title' => lang('App.covid.title')
]) ?>
<?= view('layouts/bottom-nav', [
  'nextLink' => '/vaccines',
  'nextLinkName' => lang('App.vaccines.title'),
  'backLink' => '/nipah',
  'backLinkName' => lang('App.nipah.title')
]) ?>

<!-- Modal -->
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
          <div class="w-60 mx-auto my-4"><img src="/img/covid/moving-covid19-pocket-fact.gif" class="img-fluid" /></div>
          <div class="popup-text mt-4">
            <?= lang('App.covid.popup.pocket_fact') ?>
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
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.us_anecdotes') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?= view('layouts/pop_us_content', [
            'img' => '/img/didyouknow/covid.png',
            'text1' => lang('App.covid.popup.didyouknow.0'),
            'text2' => lang('App.covid.popup.didyouknow.1'),
          ]) ?>
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
        <div class="popup-content">
          <div class="w-60 mx-auto my-4">
            <img src="/img/covid/moving-covid19-virus-hunter.gif" class="img-fluid" />
          </div>
          <div class="popup-text mt-4">
            <?= lang('App.covid.popup.virus_hunter') ?>
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
        <?= lang('App.covid.spotlight.title') ?>
        <div class="modal-desc  mt-3">
          <?= lang('App.covid.spotlight.desc') ?>
        </div>
      </h5>
      <div class="w-80 mx-auto mt-4 position-relative">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
        <div class="spotlight-modal-content">
          <div class="spotlight-video">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/sLXzw6j9JVw"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg"></div>
</div>



<div class="pandemic h-100">

  <div class="man"></div>
  <div class="spotlight-btn">
    <?= lang('App.covid.spotlight.btn') ?>
    <div class="view-details">
      <?= lang('App.pandemics.spotlight.btn2') ?>
    </div>
    <!-- <div class="w-70 mt-4"><img src="/img/arrow.png" class="img-fluid" /></div> -->
  </div>

  <div class="position-absolute gina animated fadeInLeft">
    <img src="/img/characters/gina-1.png" class="img-fluid" />
    <div class="bubble bubble-top-left"><?= lang('App.covid.dialog.girl') ?>
    </div>
  </div>
  <div class="position-absolute ilyas animated fadeInRight">
    <img src="/img/characters/ilyas-1.png" class="img-fluid" />
    <div class="bubble bubble-bottom-right"><?= lang('App.covid.dialog.boy') ?>
    </div>
  </div>

</div>
<?= $this->endSection()  ?>
<!-- end 1 -->