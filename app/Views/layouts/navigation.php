<?php if ($showLogo): ?>
<div class="nav-top">
  <div class="logo-top">
    <a href="<?= urlWithLocale('/'); ?>"><img src="/img/logo-top.png" class="img-fluid" /></a>
  </div>
  <?php if (!empty($navSide)): ?>
  <div class="informations w-25 pl-3">
    <?php
    foreach ($navSide as $i=>$v) {
        echo '<button class="btn btn-link btn-block p-0 m-0 btn-side" id="'.$v.'" data-img="btn-side-'.$v.'" data-toggle="modal" data-target="#'.$v.'_pop">
              <img src="/img/btn-side-'.$v.'-off.png" class="img-fluid" />
            </button>';
    }
    ?>
  </div>
  <?php endif ?>
</div>
<?php endif ?>


<button class="navbar-toggler b-red" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <img src="/img/btn-burger-off.png" class="img-fluid" id="btn-nav" />
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <button class="btn-back"><img src="/img/btn-popup-close-off.png" class="img-fluid" /></button>
  <ul class="navbar-nav mx-auto text-center">
    <li class="nav-item">
      <a class="nav-link" href="<?= urlWithLocale('/') ?>">
        <?= lang('App.nav.home') ?>
      </a>
      <div class="nav-line"></div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= urlWithLocale('/aboutus') ?>">
        <?= lang('App.nav.aboutus') ?>
      </a>
      <div class="nav-line"></div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= urlWithLocale('/gallery') ?>">
        <?= lang('App.nav.gallery') ?>
      </a>
      <div class="nav-line"></div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= urlWithLocale('/contactus') ?>">
        <?= lang('App.nav.contactus') ?>
      </a>
    </li>
  </ul>
</div>