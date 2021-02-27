<?php

namespace App\Controllers;

class Profil extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Acmo - Profil User",
			'activeTab' => 'profil'
		];
		echo view('profil', $data);
	}
}
