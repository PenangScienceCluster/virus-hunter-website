<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<?php
$steps = lang('App.toolsandtechniques.popup.try_out.items');

$drop = $drag ='';

foreach ($steps as $i => $v) {
    $drop .= '<div class="question mr-1" id="q'.$v['id'].'" data-id="'.$v['id'].'"><img src="'.$v['src'].'" class="img-fluid" /><div class="step">Step '.($i+1).'</div></div>';
}

shuffle($steps);
foreach ($steps as $i => $v) {
    $drag .= '<div class="answer mr-1" id="a'.$v['id'].'" data-id="'.$v['id'].'"><img src="'.$v['src'].'" class="img-fluid" /></div>';
}

?>
<?= view('layouts/progressbar', [
  'title' => lang('App.toolsandtechniques.title')
]) ?>
<?= view('layouts/bottom-nav', [
  'nextLink' => '/completed',
  'nextLinkName' => lang('App.done'),
  'backLink' => '/vaccines',
  'backLinkName' => lang('App.vaccines.title')
]) ?>

<!-- Modal -->
<div class="custom-modal modal fade" id="fact_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <?= lang('App.subnav.pocket_fact') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <div class="w-80 my-4"><img src="/img/toolsandtechniques/moving-tools-pocket-fact.gif" class="img-fluid"
              style="max-width: 100%;" />
          </div>
          <div class="popup-text">
            <?= lang('App.toolsandtechniques.popup.pocket_fact') ?>
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
          <div class="w-50"><img src="/img/toolsandtechniques/moving-tools-us-anecdotes.gif" class="img-fluid" />
          </div>
          <div class="popup-text">
            <?= lang('App.toolsandtechniques.popup.us_anecdotes') ?>
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
        <h5 class="modal-title" id="exampleModalLabel">
          <?= lang('App.subnav.try_out') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <div class="w-80 mx-auto mt-4 drag-area">
            <h4 class="try-title text-center">
              <?= lang('App.toolsandtechniques.popup.try_out.title') ?>
            </h4>
            <div class="questions d-flex mt-4">
              <?= $drop ?>
            </div>
            <div class="answers d-flex mt-4">
              <?= $drag ?>
            </div>
            <div class="mt-4 feedback text-center text-uppercase">

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


<div class="modal fade" id="career_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Virus hunter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="spotlight-pop d-none" id="spotlight_pop">
  <div class="row h-100 justify-content-center align-items-center content">
    <div class="col-9">
      <h5 class="title mx-auto">
        <?= lang('App.toolsandtechniques.spotlight.title') ?>
      </h5>
      <div class="w-80 mx-auto mt-4 position-relative">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
        <img src="<?= lang('App.toolsandtechniques.spotlight.contentImg') ?>" class="img-fluid" />
      </div>
    </div>
  </div>
  <div class="bg"></div>
</div>

<div class="toolsandtechniques h-100">
  <div class="lab-furniture"></div>

  <div class="spotlight-btn">
    <?= lang('App.toolsandtechniques.spotlight.btn') ?>
    <div class="w-70 mt-4"><img src="/img/arrow.png" class="img-fluid" /></div>
  </div>

  <div class="position-absolute gina animated fadeInRight">
    <img src="/img/characters/gina-2.png" class="img-fluid" />
    <div class="bubble bubble-top-right">
      <?= lang('App.toolsandtechniques.dialog.girl') ?>
    </div>
  </div>
  <div class="position-absolute ilyas animated fadeInLeft">
    <img src="/img/characters/ilyas-2.png" class="img-fluid" />
    <div class="bubble bubble-bottom-middle">
      <?= lang('App.toolsandtechniques.dialog.boy') ?>
    </div>
  </div>

</div>
<?= $this->endSection()  ?>
<!-- end 1 -->