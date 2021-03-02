<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $title; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/img/acmo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="lib/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="lib/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="lib/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
<!--===============================================================================================-->
</head>

<?= $this->renderSection('content'); ?>

<!--===============================================================================================-->	
<script src="lib/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="lib/bootstrap/js/popper.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="lib/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="lib/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="assets/js/login.js"></script>

</body>
</html>