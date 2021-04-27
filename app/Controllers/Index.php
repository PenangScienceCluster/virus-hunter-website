<?php namespace App\Controllers;

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
          'css' => ['/css/landing.css?'.time()],
        ]);
    }
    public function section($section = null)
    {
        $showLogo = true;
        $js = $navSide = [];
        $css = ['/css/'.$section.'.css?'.time()];
        
        switch ($section) {
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
            $navSide = ['fact','virushunter','career','us'];
            break;
          case "zoonotic":
            $navSide = ['fact','try','career'];
            break;
          case "nipah":
            $navSide = ['fact','virushunter','career','try'];
            break;
          case "covid":
            $navSide = ['fact','virushunter','us'];
            break;
          case "vaccines":
            $navSide = ['fact','virushunter','try'];
            break;
          case "toolsandtechniques":
            $navSide = ['fact','us','try'];
            break;
            
            
        };
        
        echo view('/pages/'.$section, [
          'showLogo' => $showLogo,
          'navSide' => $navSide,
          'section' => $section,
          'js'=> $js,
          'css'=> $css,
        ]);
    }
}