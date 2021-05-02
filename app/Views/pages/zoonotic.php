<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<style>
</style>

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
        ...
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

<div class="spotlight-modal modal fade" id="spotlight_pop" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?= lang('App.zoonotic.spotlight.title') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <div class="spotlight-modal-content">

          <?php

          $data = lang('App.zoonotic.spotlight.content');

          foreach ($data as $d) {
              echo '
              <div class="transmission-box">
                <img src=' . $d['img'] . ' />
                <div class="transmission-title">' . $d['title'] . '</div>
                <div class="transmission-desc">' . $d['desc'] . '</div>
              </div>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="pandemic h-100">

  <div class="spotlight-btn" data-toggle="modal" data-target="#spotlight_pop">

    <?= lang('App.zoonotic.discover_outbreaks') ?>

    <div class="w-70 mt-1"><img src="/img/arrow.png" class="img-fluid" /></div>
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