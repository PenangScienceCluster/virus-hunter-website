<!-- start notification -->

<div class="text-white text-center err">
  <?php if (session()->has('error')) : ?>
  <?= session('error') ?>
  <?php endif  ?>

  <?php if (session()->has('success')) : ?>
  <?= session('success') ?>
  <?php endif ?>
</div>


<!-- end notification -->