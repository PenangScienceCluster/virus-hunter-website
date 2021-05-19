<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<style>
.gina {
  bottom: -5%;
  left: -10%;
}

.ilyas {
  bottom: -5%;
  right: -7%;
}
</style>


<div class="content-wrap h-100 b-red">
  <div class="row align-items-center h-100">
    <div class="col-lg-12 col-10 mx-auto bg animated fadeIn">
      <div class="position-absolute gina w-25 animated fadeInLeft delay-2s"><img src="/img/characters/gina-1.png"
          class="img-fluid" /></div>
      <div class="position-absolute ilyas w-20 animated fadeInRight delay-2s"><img src="/img/characters/ilyas-1.png"
          class="img-fluid" /></div>
      <div class="row align-items-center mx-auto h-100">
        <div class="col-8 mx-auto text-center ">
          <h1 class="tenbyfive">
            <?= lang('App.aboutus.title') ?>
          </h1>
          <h4 class="desc mt-4">
            <?= lang('App.aboutus.desc') ?>
          </h4>

          <div class="logo-base w-60 mx-auto  animated fadeIn delay-1s">
            <div class="row">
              <div class="col-6">
                <div class="text-left">
                  <?= lang('App.aboutus.organizedby') ?>
                </div>
                <a href="https://www.pscpen.com" target="_blank">
                  <img src="/img/aboutus/about-logo-PSC.png" class="img-fluid" />
                </a>
              </div>
              <div class="col-6">
                <div class="text-left">
                  <?= lang('App.home.supportedby') ?>
                </div>
                <div class="row mt-1">
                  <div class="col-6 p-0 text-center">
                    <a href="https://my.usembassy.gov/" target="_blank">
                      <img src="/img/aboutus/about-logo-usekl.png" class="w-70" />
                    </a>
                  </div>
                  <div class="col-6 p-0">
                    <a href="https://my.usembassy.gov/education-culture/american-spaces/american-tech-corner-psc/"
                      target="_blank">
                      <img src="/img/aboutus/about-logo-ATP.png" class="w-70" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<?= $this->endSection()  ?>
<!-- end 1 -->