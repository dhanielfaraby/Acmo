<?php

namespace App\Controllers;

class Registrasi extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "Acmo - Buat Akun Siswa"
            
		];
		echo view('input_siswa', $data);
	}
}
