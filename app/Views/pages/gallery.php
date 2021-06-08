<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<?php
$now = date('Y-m-d H:i:s');
 $liveDate = date('2021-10-01 10:00:00');
?>

<div class="container h-100 gallery">
  <div class="row align-items-center h-100">
    <div class="col-lg-12 col-10 mx-auto  text-center">
      <h1 class="tenbyfive">
        <?= lang('App.gallery.title') ?>
      </h1>
      <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#photos" role="tab" aria-controls="photos"
            aria-selected="true">
            <?= lang('App.gallery.tabs.0') ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#videos" role="tab" aria-controls="videos"
            aria-selected="false">
            <?= lang('App.gallery.tabs.1') ?>
          </a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade active show" id="photos" role="tabpanel" aria-labelledby="home-tab">
          <div class="row w-80 mx-auto">
            <?php
              $studentFiles = 7;
              for ($i=1; $i <= $studentFiles; $i++) {
                  echo '<div class="col-3 mb-4"><img src="/img/gallery/s_thumb'.$i.'.jpg" class="img-fluid" /><a href="/download/Panel'.$i.'.pdf" class="btn-download" target="_blank"><div class="bg-white p-2 text-center">'.lang('App.download').'</div></a></div>';
              }

            ?>
          </div>
        </div>
        <div class="tab-pane fade h-100" id="videos" role="tabpanel" aria-labelledby="profile-tab">
          <?php if ($now < $liveDate) { ?>
          <div class="row align-items-center h-100">
            <div class="col-12 mx-auto tenbyfive">
              <?= lang('App.gallery.coming_soon') ?>
            </div>
          </div>
          <?php } else { ?>
          <div class="row w-80 mx-auto mt-4">
            <?php
              $teacherFiles = 2;
              for ($i=1; $i <= $teacherFiles; $i++) {
                  echo '<div class="col-6"><img src="/img/gallery/t_thumb'.$i.'.jpg" class="imgw" /><a href="/download/t'.$i.'.pdf" class="btn-download" target="_blank"><div class="bg-white p-2 text-center">'.lang('App.download').'</div></a></div>';
              }

            ?>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>



<?= $this->endSection()  ?>
<!-- end 1 -->