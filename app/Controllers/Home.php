<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Acmo - Dashboard",
			'activeTab' => 'dashboard'
		];
		echo view('dashboard', $data);
	}
}
