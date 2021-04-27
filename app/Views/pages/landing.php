<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<div class="bg-radar h-100"></div>

<div class="container h-100">
  <div class="row align-items-center h-100">
    <div class="col-7 col-sm-7 col-lg-9 mx-auto">

      <div class="position-relative w-100 header mx-auto">
        <div class="virus"></div>
        <div class="bat"></div>
        <img src="/img/landing/header_<?= locale() ?>.png" class="img-fluid" />
      </div>
      <div class="position-relative main mx-auto">
        <img src="/img/landing/main.png" class="img-fluid" />
      </div>
      <a href="<?= urlWithLocale('/overview') ?>">
        <div class="position-relative btn-theme w-50 mx-auto btn-ready">
          <?= lang('App.home.imready') ?>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="footer w-30">
  <div class="row">
    <div class="col-6">
      <div>
        <?= lang('App.home.aprojectby') ?>
      </div>
      <img src="/img/landing/logo-psc.png" class="img-fluid mt-2" />
    </div>
    <div class="col-6">
      <div>
        <?= lang('App.home.supportedby') ?>
      </div>
      <div class="row mt-1">
        <div class="col-6 p-0 text-center">
          <img src="/img/landing/logo-usekl.png" class="w-70" />
        </div>
        <div class="col-6 p-0">
          <img src="/img/landing/logo-atp.png" class="w-70" />
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection()  ?>
<!-- end 1 -->