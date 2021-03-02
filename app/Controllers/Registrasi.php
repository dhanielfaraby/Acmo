<?php

namespace App\Controllers;

class Registrasi extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Acmo - Buat Akun Lembaga Sekolah"
		];
		echo view('registrasi', $data);
	}
}
