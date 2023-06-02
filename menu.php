<?php
@session_start();
$name = @$_SESSION['user'];
if ($name == 'admin')
{
    header("location: bibliotecas.php", true);
    exit();
}
?>

<?php
require 'assets/class/consultas.php';
$consulta = new consultas();
$name = $consulta->session_star_menu();
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<script src="https://kit.fontawesome.com/b0b8de238a.js" crossorigin="anonymous"></script>
	<!-- Animación AOS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<!-- vendor css -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- Css personalizado -->
	<link rel="stylesheet" href="assets/css/myStyle.css">

</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div ">

				<div class="">
				<div class="main-menu-header" style="background-size: cover; background-image: url(<?php echo (@$_SESSION['foto_miniatura']) ?>); background-repeat:none; background-position:center;">
						<!-- <img class="img-radius" style="min-width: 100%; min-height: 100%;" src="../<?php echo(@$_SESSION['foto_miniatura']) ?>" alt="foto">
						<div class="user-details">
							<div id="more-details"><i class="fa fa-caret-down"></i></div>
						</div> -->
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="user-profile.php"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
							<li class="list-group-item"><a href="auth-normal-sign-in.php"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>
				</div>

				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Menú</label>
					</li>
					<li class="nav-item">
						<a href="archivos.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-folder"></i></span><span class="pcoded-mtext">Archivos</span></a>
					</li>

					<li class="nav-item">
						<a href="auditoria.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user-check"></i></span><span class="pcoded-mtext">Auditoria</span></a>
					</li>

					<li class="nav-item">
						<a href="sugerencias.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-message-circle"></i></span><span class="pcoded-mtext">Sugerencias</span></a>
					</li>

					<li class="nav-item pcoded-menu-caption">
						<label>Alcances</label>
					</li>

					<li class="nav-item">
						<a href="graficas.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Graficas</span></a>
					</li>
					<li class="nav-item mt-5">
						<a href="#" class="bg-danger text-white" id="buttonExit"><span class="pcoded-micon"><i class="feather icon-log-out"></i></span><span class="pcoded-mtext">Salir</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">


		<div class="m-header">
			<div>
				<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
				<a href="#!" class="b-brand">
				</a>
			</div>
		</div>

		<div class="collapse navbar-collapse">
			<ul class="navbar-nav mr-auto">
			</ul>
			<ul class="navbar-nav ml-auto">
			</ul>
		</div>
	</header>
	<!-- Animación AOS -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- Required Js -->
	<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/js/plugins/bootstrap.min.js"></script>
	<script src="assets/js/ripple.js"></script>
	<script src="assets/js/pcoded.min.js"></script>
	<script src="assets/js/exit.js"></script>
	<script>
	$(document).on('change', '.custom-file-input', function (event) {
		$(this).next('.custom-file-label').html(event.target.files[0].name);
	});
	</script>

</body>

</html>