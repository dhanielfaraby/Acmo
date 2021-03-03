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
						Reset Password
					</span>

				

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="New Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Re-type New Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Simpan
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
<?= $this->endSection(); ?>