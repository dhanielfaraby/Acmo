<?php

namespace App\Controllers;

class Lupa_password extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Acmo - Lupa Password"
		];
		echo view('lupa_password', $data);
	}
}
