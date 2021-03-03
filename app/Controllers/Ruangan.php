<?php

namespace App\Controllers;

class ruangan extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Acmo - Pesan Ruangan",
			'activeTab' => 'ruangan'
		];
		echo view('ruangan', $data);
	}
}
