<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'AEIC | Asean Earthquake Information Center',
			'css' => 'css/home.css',
			'js' => 'js/home.js',
		];
		return view('home', $data);
	}
}
