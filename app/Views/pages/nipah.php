<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<style>
</style>
<!-- this one need start -->
<input type="hidden" id="section" value="<?= $section ?>" />
<!-- this one need end -->

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
<div class="custom-modal modal fade" id="fact_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.pocket_fact') ?></h5>
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
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.career_pathway') ?></h5>
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
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.virus_hunter') ?></h5>
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


<div class="custom-modal modal fade" id="career_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.career_pathway') ?></h5>
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

<div class="spotlight-modal modal fade" id="spotlight_pop" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?= lang('App.nipah.spotlight.title') ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <div class="spotlight-modal-content">
          <img src="/img/nipah/nipah-spotlight-virus.png" />
          <?php

          $data = lang('App.nipah.spotlight.content');

          foreach ($data as $k => $d) {
            echo '
              <div class="structure-box pos-' . $k . '">
                <div class="structure-title">' . $d['title'] . '</div>
                <div class="structure-desc">' . $d['desc'] . '</div>
              </div>';
          }

          ?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<div class="pandemic h-100">

  <div class="spotlight-btn" data-toggle="modal" data-target="#spotlight_pop"><?= lang('App.nipah.spotlight.btn') ?>
    <img src="/img/arrow.png" />
  </div>

  <div class="position-absolute gina animated fadeInLeft delay-2s ">
    <img src="/img/characters/gina-1.png" class="img-fluid" />
    <div class="bubble bubble-bottom-left" contenteditable><?= lang('App.nipah.dialog.girl') ?></div>
  </div>
  <div class="position-absolute ilyas animated fadeInRight delay-2s ">
    <img src="/img/characters/ilyas-1.png" class="img-fluid" />
    <div class="bubble bubble-top-right" contenteditable><?= lang('App.nipah.dialog.boy') ?></div>
  </div>

</div>
<?= $this->endSection()  ?>
<!-- end 1 -->