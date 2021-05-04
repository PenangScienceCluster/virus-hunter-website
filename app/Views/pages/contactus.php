<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<style>
</style>


<div class="container h-100">
  <div class="row align-items-center h-100">
    <div class="col-lg-12 col-10 mx-auto bg animated fadeIn">
      <div class="row align-items-center mx-auto h-100">
        <div class="col-10 mx-auto text-center ">
          <h1 class="tenbyfive">
            <?= lang('App.contactus.title') ?>
          </h1>

          <h4 class="desc mt-4">
            <?= lang('App.contactus.desc') ?>
          </h4>

          <div class="logo-base w-60 mx-auto animated fadeIn delay-2s">
            <div class="row">
              <div class="col-4">
                <img src="/img/contactus/icon-website-off.png" class="img-fluid" />
                <br>
                <a href="https://www.pscpen.com" target="_blank">www.pscpen.com</a>
              </div>
              <div class="col-4">
                <img src="/img/contactus/icon-fb-off.png" class="img-fluid" />
                <a href="https://www.facebook.com/PenangScienceCluster" target="_blank">@PenangScienceCluster</a>
              </div>
              <div class="col-4">
                <img src="/img/contactus/icon-instagram-off.png" class="img-fluid" />
                <a href="https://www.instagram.com/pscpen" target="_blank">@pscpen</a>
              </div>
            </div>
          </div><br>
          <h4 class="my-4 animated fadeIn delay-2s">
            <?= lang('App.contactus.visit_enquiry', ['https://www.pscpen.com/contact-us/']) ?>
          </h4>
        </div>

      </div>
    </div>
  </div>
</div>


<div class="footer w-30 animated fadeInUp slow delay-2s">
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