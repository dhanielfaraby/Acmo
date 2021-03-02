<?php

namespace App\Controllers;

class Reset_password extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Acmo - Reset Password"
		];
		echo view('reset_password', $data);
	}
}
