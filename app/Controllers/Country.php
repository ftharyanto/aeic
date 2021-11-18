<?php

namespace App\Controllers;

class Country extends BaseController
{
    public function index($country)
    {
        $data = [
            'title' => 'AEIC Indonesia',
            'css' => 'css/home.css',
            'sidebarcss' => 'css/sidebar.css',
            'sidebarjs' => 'js/sidebar.js',
            'js' => 'js/home.js',
            'aseanLogo' => 'img/asean-logo.png'
        ];
        return view("country/$country", $data);
    }
    public function sidebar()
    {
        $data = [
            'title' => 'AEIC Indonesia',
            'css' => 'css/home.css',
            'sidebarcss' => 'css/sidebar.css',
            'sidebarjs' => 'js/sidebar.js',
            'js' => 'js/home.js',
            'aseanLogo' => 'img/asean-logo.png'
        ];
        return view("tes_sidebar", $data);
    }
}
