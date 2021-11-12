<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'AEIC | Asean Earthquake Information Center',
			'css' => 'css/home.css',
			'sidebarcss' => 'css/sidebar.css',
			'sidebarjs' => 'js/sidebar.js',
			'js' => 'js/home.js',
			'aseanLogo' => 'img/asean-logo.png'
		];
		return view('home', $data);
	}
}
