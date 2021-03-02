<?= $this->extend('layout/auth'); ?>


<?= $this->section('content'); ?>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/img/img-01.png" alt="IMG">
				</div>

				<form action=" <?= base_url(); ?>" method="POST" class="login100-form validate-form">
					<span class="login100-form-title">
						Registrasi Akun Sekolah
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="nama" placeholder="Nama Sekolah">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="text" name="alamat" placeholder="Alamat Sekolah">
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