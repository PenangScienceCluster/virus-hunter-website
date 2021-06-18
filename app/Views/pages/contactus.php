<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<style>
.logo-base img {
  width: 70%
}
</style>


<div class="content-wrap h-100">
  <div class="row align-items-center h-100">
    <div class="col-10 mx-auto bg animated fadeIn">

      <div class="row align-items-center mx-auto h-100">
        <div class="col-10 mx-auto text-center ">
          <h1 class="tenbyfive">
            <?= lang('App.contactus.title') ?>
          </h1>

          <h4 class="desc mt-4">
            <?= lang('App.contactus.desc') ?>
          </h4>

          <div class="logo-base w-80 mx-auto animated fadeIn delay-1s">
            <div class="row">
              <div class="col-4">
                <a href="https://www.pscpen.com" target="_blank">
                  <img src="/img/contactus/icon-website-off.png" />
                  <br>
                  www.pscpen.com
                </a>
              </div>
              <div class="col-4">
                <a href="https://www.facebook.com/PenangScienceCluster" target="_blank">
                  <img src="/img/contactus/icon-fb-off.png" />
                  <br>
                  @PenangScienceCluster
                </a>
              </div>
              <div class="col-4">
                <a href="https://www.instagram.com/pscpen" target="_blank">
                  <img src="/img/contactus/icon-instagram-off.png" />
                  <br>
                  @pscpen
                </a>
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

<?= view('pages/bottom-logo') ?>

<?= $this->endSection()  ?>
<!-- end 1 -->