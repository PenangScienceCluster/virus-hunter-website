<style>
.btn-side {
  position: relative;
  background: transparent;
}

.btn-side .badge {
  position: absolute;
  top: 0;
  right: 0;
  width: 1vw;
  height: 1vw;
  border-radius: 50%;
  background: red;
  color: white;
  z-index: 1;
  display: none;
}

.btn-side img {
  position: relative;
  z-index: 0;
}

.badge:empty {
  display: block;
}
</style>

<?php if ($showLogo): ?>
<div class="nav-top">
  <div class="logo-top">
    <a href="<?= urlWithLocale('/'); ?>"><img src="/img/logo-top.png" class="img-fluid" /></a>
  </div>
  <?php if (!empty($navSide)): ?>
  <div class="informations w-25 pl-3">
    <?php
    foreach ($navSide as $i=>$v) {
        echo '<button class="btn p-0 m-0 btn-side d-none" id="'.$v.'" data-img="btn-side-'.$v.'" data-toggle="modal" data-target="#'.$v.'_pop">
              <span class="badge d-none"></span>
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