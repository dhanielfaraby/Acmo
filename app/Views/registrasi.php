<?= $this->extend('layout/auth'); ?>


<?= $this->section('content'); ?>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/img/img-01.png" alt="IMG">
				</div>

				<form action=" <?= base_url('registrasi/buat_akun'); ?>" method="POST" class="login100-form validate-form">
					<span class="login100-form-title">
						Registrasi Akun Sekolah
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Nama sekolah tidak boleh kosong">
						<input class="input100" type="text" id="nama_sekolah" name="nama_sekolah" placeholder="Nama Sekolah">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Alamat sekolah tidak boleh kosong">
						<input class="input100" type="text" id="alamat" name="alamat" placeholder="Alamat Sekolah">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-location" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Kota asal sekolah tidak boleh kosong">
						<input class="input100" type="text" id="kota" name="kota" placeholder="Kota Asal Sekolah">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-location" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Provinsi asal sekolah tidak boleh kosong">
						<input class="input100" type="text" id="provinsi" name="provinsi" placeholder="Provinsi Asal Sekolah">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-location" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Nomor telepon tidak boleh kosong">
						<input class="input100" type="number" id="notlp" name="notlp" placeholder="No.Telp Sekolah">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-location" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Email yang valid seperti: ex@abc.xyz">
						<input class="input100" type="email" id="email" name="email" placeholder="Email Sekolah">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-location" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password tidak boleh kosong">
						<input class="input100" type="password" id="pass1" name="pass1" placeholder="Input Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-location" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password tidak boleh kosong">
						<input class="input100" type="password" id="pass2" name="pass2" placeholder="Ulangi Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fas fa-location" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Buat Akun
						</button>
					</div>
					<div class="text-center p-t-50">
						<a class="txt2" href="<?= base_url() ?>">
							Sekolah sudah punya akun? Kembali ke login
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
<?= $this->endSection(); ?>