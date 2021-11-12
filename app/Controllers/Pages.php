<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function indonesiaHome()
    {
        $data = [
            'title' => 'AEIC Indonesia',
            'css' => 'css/home.css',
            'sidebarcss' => 'css/sidebar.css',
            'sidebarjs' => 'js/sidebar.js',
            'js' => 'js/home.js',
            'aseanLogo' => 'img/asean-logo.png'
        ];
        return view('pages/indonesia/home', $data);
    }
}
