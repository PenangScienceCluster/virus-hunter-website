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
    public function section($section)
    {
        echo view('/pages/'.$section, [
          'showLogo' => true,
          'css' => ['/css/'.$section.'.css?'.time()],
        ]);
    }
}