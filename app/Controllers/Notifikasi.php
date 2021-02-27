<?php

namespace App\Controllers;

class Notifikasi extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Acmo - Notifikasi",
			'activeTab' => 'notifikasi'
		];
		echo view('notifications', $data);
	}
}
