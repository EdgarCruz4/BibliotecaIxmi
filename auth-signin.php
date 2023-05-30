<!DOCTYPE html>
<html lang="en">

<head>

	<title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400"><b>Iniciar sesión</b></h4>
						<form action="assets/user.php" method="post">
							<div class="form-group mb-3">
								<label class="floating-label" for="user">Usuario</label>
								<input type="text" class="form-control" name="user" placeholder="" required>
							</div>
							<div class="form-group mb-4">
								<label class="floating-label" for="Password">Contraseña</label>
								<input type="password" class="form-control" name="password" placeholder="" required>
							</div>
							<button type="submit" class="btn btn-block btn-primary mb-4" name="login">Iniciar sesión</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<?php
 $error = isset($_GET['error']);
  if ($error == 1){
    echo "<script language='JavaScript'>alert ('Por favor, Escriba bien su correo o contraseña!!.'); </script>";
    }
?>


</body>

</html>
