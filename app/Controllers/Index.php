<?php

namespace App\Controllers;

class Index extends BaseController
{
  public function __construct()
  {
    // Most services in this controller require
    // the session to be started - so fire it up!
  }

  //------view
  public function index()
  {
    echo view('/pages/landing', [
      'showLogo' => false,
      'css' => ['/css/landing.css?' . time()],
    ]);
  }
  public function section($section = null)
  {
    $showLogo = true;
    $js = $navSide = [];
    $css = ['/css/' . $section . '.css?' . time()];

    $locale =  $this->request->getLocale();

    switch ($section) {
      case "overview":
        $js = [
          '/js/overview.js'
        ];
        break;
      case  'gallery':
        $js = [
          '/lib/owl-carousel/owl.carousel.min.js',
          '/js/gallery.js'
        ];
        $css = [
          '/lib/owl-carousel/assets/owl.carousel.min.css',
          '/lib/owl-carousel/assets/owl.theme.default.css',
          '/css/gallery.css'
        ];
        break;
      case "pandemics":
        $navSide = ['fact', 'virushunter', 'career', 'us'];
        $js = ['/js/pandemics.js'];
        break;
      case "zoonotic":
        $js = [
          '/lib/touch/jquery-ui.min.js',
          '/lib/touch/jquery.ui.touch-punch.min.js',
          '/js/zoonotic.js'
        ];
        $css = [
          '/lib/touch/jquery-ui.min.css',
          '/css/zoonotic.css'
        ];
        $navSide = ['fact', 'try', 'career'];
        break;
      case "nipah":
        $navSide = ['fact', 'virushunter', 'career', 'try'];
        $js = [
          '/lib/touch/jquery-ui.min.js',
          '/lib/touch/jquery.ui.touch-punch.min.js',
          '/js/nipah.js'
        ];
        break;
      case "covid":
        $navSide = ['fact', 'virushunter', 'us'];
        $js = ['/js/covid.js'];
        break;
      case "vaccines":
        $navSide = ['fact', 'virushunter', 'try'];
        $js = [
          '/lib/touch/jquery-ui.min.js',
          '/lib/touch/jquery.ui.touch-punch.min.js',
          '/js/vaccines.js'
        ];
        break;
      case "toolsandtechniques":
        $navSide = ['fact', 'us', 'try'];
        $js = [
          '/lib/touch/jquery-ui.min.js',
          '/lib/touch/jquery.ui.touch-punch.min.js',
          '/js/toolsandtechniques.js'
        ];
        break;
    };

    echo view('/pages/' . $section, [
      'showLogo' => $showLogo,
      'navSide' => $navSide,
      'section' => $section,
      'js' => $js,
      'css' => $css,
      'locale' => $locale
    ]);
  }
}
