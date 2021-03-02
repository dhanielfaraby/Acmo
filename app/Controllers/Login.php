<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Acmo - Login"
		];
		echo view('login', $data);
	}
}
