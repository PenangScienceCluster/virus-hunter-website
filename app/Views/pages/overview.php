<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<style>
.star {
  position: absolute;
  border: 1px solid red;
  top: 0;
}

.star.star1 {
  top: 0rem;
  left: 13rem;
}
</style>


<div class="container h-100">
  <div class="row align-items-center h-100">
    <div class="col-lg-12 col-10 mx-auto bg text-center animated fadeIn">
      <div class="content w-50 mx-auto">
        <h1 class="tenbyfive">
          <?= lang('App.overview.joingina') ?>
        </h1>
        <h4 class="font-weight-bold">
          <?= lang('App.overview.pickupfacts') ?>
        </h4>
      </div>
      <div class="position-relative progressbar mx-auto ">
        <div class="ladybird"></div>
        <div class="bubble w-20 line-height animated bounceInDown delay-3s">
          <?= lang('App.overview.bubble_instruction') ?>
        </div>
        <img src="/img/overview/progress.png" class="img-fluid" />
      </div>
      <div class="position-relative btn-theme w-30 mx-auto btn-begin animated fadeInUp delay-2s">
        <?= lang('App.overview.letsbegin') ?>
      </div>

    </div>
  </div>
</div>


<?= $this->endSection()  ?>
<!-- end 1 -->