<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<?php
  $classbm = '';
  $classen = 'class="active"';
  if (locale()=='bm') {
      $classbm = 'class="active"';
      $classen = '';
  }
?>
<div class="bg-radar h-100"></div>
<div class="lang tenbyfive">
  <a href="/en" <?= $classen ?>>EN</a> | <a href="/bm" <?= $classbm ?>>BM</a>
</div>
<div class="content h-100">
  <div class="row align-items-center h-100">
    <div class="col-12">
      <div class="position-relative w-80 header mx-auto d-none">
        <div class="virus"></div>
        <div class="bat"></div>
        <img src="<?= lang('App.home.title') ?>" class="img-fluid" />
      </div>
      <div class="position-relative main w-45 mx-auto  animated fadeIn delay-1s">
        <img src="/img/landing/main.png" class="img-fluid" />
      </div>
      <a href="<?= urlWithLocale('/overview') ?>">
        <div class="position-relative btn-theme w-40 mx-auto btn-ready  animated fadeIn delay-1s">
          <?= lang('App.home.imready') ?>
        </div>
      </a>
    </div>
  </div>
</div>

<?= view('pages/bottom-logo') ?>
<?= $this->endSection()  ?>
<!-- end 1 -->