<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<style>
</style>

<?= view('layouts/progressbar', [
  'title' => 'covid-19'
]) ?>
<?= view('layouts/bottom-nav', [
  'nextLink' => '/vaccines',
  'nextLinkName' => 'vaccines',
  'backLink' => '/nipah',
  'backLinkName' => 'nipah virus'
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
          <img src="/img/covid/moving-covid19-pocket-fact.gif" />
          <div class="popup-text">
            <?= lang('App.covid.popup.pocket_fact') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="custom-modal modal fade" id="us_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.us_anecdotes') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        </button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <img src="/img/covid/moving-covid19-us-anecdotes.gif" />
          <div class="popup-text">
            <?= lang('App.covid.popup.us_anecdotes') ?>
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
          <img src="/img/covid/moving-covid19-virus-hunter.gif" />
          <div class="popup-text">
            <?= lang('App.covid.popup.virus_hunter') ?>
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
        <h5 class="modal-title"><?= lang('App.covid.spotlight.title') ?> <div class="modal-desc"><?= lang('App.covid.spotlight.desc') ?></div>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="spotlight-modal-content">
          <div class="spotlight-video">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/i0ZabxXmH4Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<div class="pandemic h-100">

  <div class="spotlight-btn" data-toggle="modal" data-target="#spotlight_pop"><?= lang('App.covid.spotlight.btn') ?>
    <img src="/img/arrow.png" />
  </div>

  <div class="position-absolute gina animated fadeInLeft delay-2s ">
    <img src="/img/characters/gina-1.png" class="img-fluid" />
    <div class="bubble bubble-bottom-center-left" contenteditable><?= lang('App.covid.dialog.girl') ?></div>
  </div>
  <div class="position-absolute ilyas animated fadeInRight delay-2s ">
    <img src="/img/characters/ilyas-1.png" class="img-fluid" />
    <div class="bubble bubble-top-right" contenteditable><?= lang('App.covid.dialog.boy') ?></div>
  </div>

</div>
<?= $this->endSection()  ?>
<!-- end 1 -->