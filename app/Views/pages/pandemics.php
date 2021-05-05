<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>


<?= view('layouts/progressbar', [
  'title' => 'PANDEMICS'
]) ?>

<?= view('layouts/bottom-nav', [
  'nextLink' => '/zoonotic',
  'nextLinkName' => 'zoonotic diseases',
  'backLink' => '/overview',
  'backLinkName' => 'overview'
]) ?>


<!-- Modal -->
<div class="custom-modal modal fade" id="fact_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.pocket_fact') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <div class="w-50">
            <img src="/img/pandemics/moving-pandemics-pocket-fact.gif" class="img-fluid " />
          </div>
          <div class="popup-text">
            <?= lang('App.pandemics.popup.pocket_fact') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="custom-modal modal fade" id="us_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= lang('App.subnav.us_anecdotes') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

        </button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <div class="w-60 mx-auto my-4"><img src="/img/pandemics/moving-pandemics-us-anecdotes.gif" /></div>
          <div class="popup-tex mt-4">
            <?= lang('App.pandemics.popup.us_anecdotes') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="custom-modal modal fade" id="virushunter_pop" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <?= lang('App.subnav.virus_hunter') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="popup-content my-4">
          <div class="w-60 mx-auto"><img src="/img/pandemics/moving-pandemics-virus-hunter.gif" class="img-fluid" />
          </div>
          <div class="popup-text mt-4">
            <?= lang('App.pandemics.popup.virus_hunter') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="custom-modal modal fade" id="career_pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <?= lang('App.subnav.career_pathway') ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="popup-content">
          <div class="w-60 mx-auto my-4"><img src="/img/pandemics/moving-pandemics-career.gif" /></div>
          <div class="popup-text mt-4">
            <?= lang('App.pandemics.popup.career') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="spotlight-pop d-none" id="spotlight_pop">
  <div class="row h-100 justify-content-center align-items-center content">
    <div class="col-9">
      <h5 class="title mx-auto">
        <div class="spotlight-title-img pos-2">
          <img src="/img/pandemics/pandemics-spotlight-virus.png" class="img-fluid" />
        </div>
        <div class="spotlight-title-img pos-1">
          <img class="img-fluid" src="/img/pandemics/pandemics-spotlight-ebola.png" />
        </div>
        <?= lang('App.pandemics.spotlight.title') ?>
      </h5>
      <div class="w-80 mx-auto mt-4 position-relative">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>

        <div class="outbreak-modal-content">
          <div class="tab-content">
            <div class="tab-pane fade show active" id="outbreak-1" role="tabpanel" aria-labelledby="home-tab">
              <div class="outbreak-box">
                <div class="outbreak-header">1347</div>
                <div class="outbreak-body">
                  <div class="outbreak-item">
                    <div class="outbreak-item-label"><?= lang('App.disease') ?>:</div>
                    <div class="outbreak-item-value disease">Black Death</div>
                  </div>
                  <div class="outbreak-item highlight">
                    <div class="outbreak-item-label"><?= lang('App.pathogen') ?>:</div>
                    <div class="outbreak-item-value pathogen">Yersinia pestis</div>
                  </div>
                  <div class="outbreak-item">
                    <div class="outbreak-item-label"><?= lang('App.transmission') ?>:
                    </div>
                    <div class="outbreak-item-value">
                      <div class="transmission">
                        <img src="/img/pandemics/pandemics-spotlight-icon-rat.png" />
                        <div class="transmission-value">Rodents <br><small>(rats)</small></div>
                      </div>
                      <img class="transmission-arrow" src="/img/pandemics/pandemics-spotlight-icon-down-arrow.png" />
                      <div class="transmission">
                        <img src="/img/pandemics/pandemics-spotlight-icon-fleas.png" />
                        <div class="transmission-value">Fleas</div>
                      </div>
                      <img class="transmission-arrow" src="/img/pandemics/pandemics-spotlight-icon-down-arrow.png" />
                      <div class="transmission">
                        <img src="/img/pandemics/pandemics-spotlight-icon-human.png" />
                        <div class="transmission-value">Humans</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="outbreak-2" role="tabpanel" aria-labelledby="profile-tab">
              <div class="outbreak-box">
                <div class="outbreak-header">1998</div>
                <div class="outbreak-body">
                  <div class="outbreak-item">
                    <div class="outbreak-item-label"><?= lang('App.disease') ?>:</div>
                    <div class="outbreak-item-value disease">Nipah Virus</div>
                  </div>
                  <div class="outbreak-item highlight">
                    <div class="outbreak-item-label"><?= lang('App.pathogen') ?>:</div>
                    <div class="outbreak-item-value pathogen">Nipah virus</div>
                  </div>
                  <div class="outbreak-item">
                    <div class="outbreak-item-label"><?= lang('App.transmission') ?>:
                    </div>
                    <div class="outbreak-item-value">
                      <div class="transmission">
                        <img src="/img/pandemics/pandemics-spotlight-icon-bats.png" />
                        <div class="transmission-value">Bats </div>
                      </div>
                      <img class="transmission-arrow" src="/img/pandemics/pandemics-spotlight-icon-down-arrow.png" />
                      <div class="transmission">
                        <img src="/img/pandemics/pandemics-spotlight-icon-pigs.png" />
                        <div class="transmission-value">Pigs</div>
                      </div>
                      <img class="transmission-arrow" src="/img/pandemics/pandemics-spotlight-icon-down-arrow.png" />
                      <div class="transmission">
                        <img src="/img/pandemics/pandemics-spotlight-icon-human.png" />
                        <div class="transmission-value">Humans</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="outbreak-3" role="tabpanel" aria-labelledby="contact-tab">
              <div class="outbreak-box">
                <div class="outbreak-header">2002</div>
                <div class="outbreak-body">
                  <div class="outbreak-item">
                    <div class="outbreak-item-label"><?= lang('App.disease') ?>:</div>
                    <div class="outbreak-item-value disease">SARS</div>
                  </div>
                  <div class="outbreak-item highlight">
                    <div class="outbreak-item-label"><?= lang('App.pathogen') ?>:</div>
                    <div class="outbreak-item-value pathogen">SARS-CoV</div>
                  </div>
                  <div class="outbreak-item">
                    <div class="outbreak-item-label"><?= lang('App.transmission') ?>:
                    </div>
                    <div class="outbreak-item-value">
                      <div class="transmission">
                        <img src="/img/pandemics/pandemics-spotlight-icon-bats.png" />
                        <div class="transmission-value">Bats </div>
                      </div>
                      <img class="transmission-arrow" src="/img/pandemics/pandemics-spotlight-icon-down-arrow.png" />
                      <div class="transmission">
                        <img src="/img/pandemics/pandemics-spotlight-icon-civetcat.png" />
                        <div class="transmission-value">Civet cats</div>
                      </div>
                      <img class="transmission-arrow" src="/img/pandemics/pandemics-spotlight-icon-down-arrow.png" />
                      <div class="transmission">
                        <img src="/img/pandemics/pandemics-spotlight-icon-human.png" />
                        <div class="transmission-value">Humans</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="outbreak-4" role="tabpanel" aria-labelledby="contact-tab">
              <div class="outbreak-box">
                <div class="outbreak-header">2015</div>
                <div class="outbreak-body">
                  <div class="outbreak-item">
                    <div class="outbreak-item-label"><?= lang('App.disease') ?>:</div>
                    <div class="outbreak-item-value disease">Zika Fever</div>
                  </div>
                  <div class="outbreak-item highlight">
                    <div class="outbreak-item-label"><?= lang('App.pathogen') ?>:</div>
                    <div class="outbreak-item-value pathogen">Zika virus</div>
                  </div>
                  <div class="outbreak-item">
                    <div class="outbreak-item-label"><?= lang('App.transmission') ?>:
                    </div>
                    <div class="outbreak-item-value">
                      <div class="transmission">
                        <img src="/img/pandemics/pandemics-spotlight-icon-mosquito.png" />
                        <div class="transmission-value">Mosquito </div>
                      </div>
                      <img class="transmission-arrow" src="/img/pandemics/pandemics-spotlight-icon-down-arrow.png" />
                      <div class="transmission">
                        <img src="/img/pandemics/pandemics-spotlight-icon-human.png" />
                        <div class="transmission-value">Humans</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="outbreak-5" role="tabpanel" aria-labelledby="contact-tab">
              <div class="outbreak-box">
                <div class="outbreak-header">2019</div>
                <div class="outbreak-body">
                  <div class="outbreak-item">
                    <div class="outbreak-item-label"><?= lang('App.disease') ?>:</div>
                    <div class="outbreak-item-value disease">COVID-19</div>
                  </div>
                  <div class="outbreak-item highlight">
                    <div class="outbreak-item-label"><?= lang('App.pathogen') ?>:</div>
                    <div class="outbreak-item-value pathogen">SARS-CoV-2</div>
                  </div>
                  <div class="outbreak-item">
                    <div class="outbreak-item-label"><?= lang('App.transmission') ?>:
                    </div>
                    <div class="outbreak-item-value">
                      <div class="transmission">
                        <img src="/img/pandemics/pandemics-spotlight-icon-bats.png" />
                        <div class="transmission-value">Bats </div>
                      </div>
                      <img class="transmission-arrow" src="/img/pandemics/pandemics-spotlight-icon-down-arrow.png" />
                      <div class="transmission">
                        <img src="/img/pandemics/pandemics-spotlight-icon-wildlife.png" />
                        <div class="transmission-value">Wildlife</div>
                      </div>
                      <img class="transmission-arrow" src="/img/pandemics/pandemics-spotlight-icon-down-arrow.png" />
                      <div class="transmission">
                        <img src="/img/pandemics/pandemics-spotlight-icon-human.png" />
                        <div class="transmission-value">Humans</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <ul class="nav flex-column" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" data-toggle="tab" href="#outbreak-1" role="tab">
                <div class="outbreak-nav-title">
                  <div class="outbreak-nav-title-year">1347</div>
                  <div class="outbreak-nav-title-name">Black Death</div>
                </div>
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" data-toggle="tab" href="#outbreak-2" role="tab">
                <div class="outbreak-nav-title">
                  <div class="outbreak-nav-title-year">1998</div>
                  <div class="outbreak-nav-title-name">Nipah virus</div>
                </div>
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" data-toggle="tab" href="#outbreak-3" role="tab">
                <div class="outbreak-nav-title">
                  <div class="outbreak-nav-title-year">2002</div>
                  <div class="outbreak-nav-title-name">SARS</div>
                </div>
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" data-toggle="tab" href="#outbreak-4" role="tab">
                <div class="outbreak-nav-title">
                  <div class="outbreak-nav-title-year">2015</div>
                  <div class="outbreak-nav-title-name">Zika Fever</div>
                </div>
              </a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" data-toggle="tab" href="#outbreak-5" role="tab">
                <div class="outbreak-nav-title">
                  <div class="outbreak-nav-title-year">2019</div>
                  <div class="outbreak-nav-title-name">COVID-19</div>
                </div>
              </a>
            </li>
            <div class="line"></div>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="bg"></div>
</div>


<div class="pandemic h-100">

  <div class="tv"></div>

  <div class="spotlight-btn">
    <?= lang('App.pandemics.spotlight.btn') ?>
    <div class="w-70 mt-4"><img src="/img/arrow.png" class="img-fluid" /></div>
  </div>
  <div class="position-absolute gina animated fadeInLeft delay-1s">
    <img src="/img/characters/gina-1.png" class="img-fluid" />
    <div class="bubble bubble-bottom-left"><?= lang('App.pandemics.dialog.girl') ?>
    </div>
  </div>
  <div class="position-absolute ilyas animated fadeInRight delay-1s">
    <img src="/img/characters/ilyas-1.png" class="img-fluid" />
    <div class="bubble bubble-top-right"><?= lang('App.pandemics.dialog.boy') ?>
    </div>
  </div>

</div>
<?= $this->endSection()  ?>
<!-- end 1 -->