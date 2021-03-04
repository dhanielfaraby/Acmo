<?php

namespace App\Controllers;

use App\Models\Sekolah;
use App\Models\Siswa;

class Registrasi extends BaseController
{
	protected $siswaModel;
	protected $sekolahModel;
	protected $request;
	public function __construct()
	{
		$this->siswaModel = new Siswa();
		$this->sekolahModel = new Sekolah();
		$this->request = \Config\Services::request();
	}

	public function index()
	{
		$data = [
			'title' => "Acmo - Buat Akun Lembaga Sekolah"
		];

		echo view('registrasi', $data);
	}

	public function buat_akun()
	{
		$this->sekolahModel->save([
			'nama' => $this->request->getVar('nama_sekolah'),
			'alamat' => $this->request->getVar('alamat'),
			'email' => $this->request->getVar('email'),
			'telepon' => $this->request->getVar('notlp'),
			'kota' => $this->request->getVar('kota'),
			'provinsi' => $this->request->getVar('provinsi'),
			'pass' => $this->request->getVar('pass1'),
			'is_active' => '0'
		]);

		return redirect()->to('/login');
	}
}
