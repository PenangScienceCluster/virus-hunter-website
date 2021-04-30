<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<div class="container h-100 overview">
  <div class="row align-items-center h-100">
    <div class="col-lg-12 col-10 mx-auto bg text-center animated fadeIn">
      <div class="content mx-auto">
        <h1 class="tenbyfive">
          <?= lang('App.overview.joingina') ?>
        </h1>
        <h4 class="font-weight-bold">
          <?= lang('App.overview.pickupfacts') ?>
        </h4>
      </div>
      <div class="position-relative bar mx-auto">
        <div class="ladybird"></div>
        <div class="overview-bubble w-20 line-height animated bounceInDown delay-1s">
          <?= lang('App.overview.bubble_instruction') ?>
        </div>
        <img src="/img/overview/progress.png" class="img-fluid" />
      </div>
      <a href="<?= urlWithLocale('/pandemics') ?>">
        <div class="position-relative btn-theme w-30 mx-auto btn-begin animated fadeInUp">
          <?= lang('App.overview.letsbegin') ?>
        </div>
      </a>

    </div>
  </div>
</div>


<?= $this->endSection()  ?>
<!-- end 1 -->