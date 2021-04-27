<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>

<div class="container h-100 gallery">
  <div class="row align-items-center h-100">
    <div class="col-lg-12 col-10 mx-auto  text-center">
      <h1 class="tenbyfive">
        <?= lang('App.gallery.title') ?>
      </h1>
      <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#photos" role="tab" aria-controls="photos"
            aria-selected="true">
            <?= lang('App.gallery.tabs.0') ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#videos" role="tab" aria-controls="videos"
            aria-selected="false">
            <?= lang('App.gallery.tabs.1') ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#downloads" role="tab" aria-controls="downloads"
            aria-selected="false">
            <?= lang('App.gallery.tabs.2') ?>
          </a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade active show" id="photos" role="tabpanel" aria-labelledby="home-tab">

          <div class="owl-carousel owl-theme w-60 mx-auto photos">
            <div class="item">
              <img src="/img/gallery/1.png" class="img-fluid" />
            </div>
            <div class="item">
              <img src="/img/gallery/2.png" class="img-fluid" />
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="profile-tab">

          <div class="owl-carousel owl-theme videos w-70 mx-auto">
            <div class="item-video" data-merge="1">
              <div class="maxh">
                <a class="owl-video" href="https://www.youtube.com/watch?v=_VQ9t_9LNP4"></a>
              </div>
            </div>
            <div class="item-video" data-merge="2">
              <div class="maxh">
                <a class="owl-video" href="https://www.youtube.com/watch?v=yfn8sE9obWU"></a>
              </div>
            </div>
          </div>

        </div>
        <div class="tab-pane fade" id="downloads" role="tabpanel" aria-labelledby="contact-tab">

          <div class="d-flex flex-row odd-color row-odd">
            <div class="icon-pdf p-2"><i class="far fa-file-pdf"></i></div>
            <div class="icon-pdf p-2">lorum.pdf</div>
            <div class="icon-pdf p-2 ml-auto"><i class="fas fa-download"></i></div>
          </div>

          <div class="d-flex flex-row odd-color row-even">
            <div class="icon-pdf p-2"><i class="far fa-file-pdf"></i></div>
            <div class="icon-pdf p-2">lorum.pdf</div>
            <div class="icon-pdf p-2 ml-auto"><i class="fas fa-download"></i></div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>



<?= $this->endSection()  ?>
<!-- end 1 -->