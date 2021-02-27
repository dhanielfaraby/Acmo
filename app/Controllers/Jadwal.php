<?php

namespace App\Controllers;

class Jadwal extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Acmo - Jadwal Pekan Ini",
			'activeTab' => 'jadwal'
		];
		echo view('jadwal', $data);
	}
}
