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
<body class="">
	<!-- Menu start -->
	<?php
		include_once 'menu.php';
		$today = date('Y-m-d');
		$time = date('h:i:s');
	?>
	<!-- Menu end -->
	
	

	<!-- [ Main Content ] start -->
	<div class="pcoded-main-container">
		<div class="pcoded-content">
			<!-- [ breadcrumb ] start -->
			<div class="page-header">
				<div class="page-block">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="page-header-title">
								<h5 class="m-b-10">Breadcrumbs &amp; Pagination</h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
								<li class="breadcrumb-item"><a href="#!">Basic Components</a></li>
								<li class="breadcrumb-item"><a href="#!">Breadcrumbs &amp; Pagination</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- [ breadcrumb ] end -->
			<!-- [ Main Content ] start -->
			<div class="row">
				<!-- [ Breadcrumbs & Pagination ] start -->
				<div class="col-sm-6">
					<div class="card">
						<div class="card-header">
							<h5>Breadcrumb</h5>
						</div>
						<div class="card-body">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page">Home</li>
								</ol>
							</nav>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#!">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Library</li>
								</ol>
							</nav>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#!">Home</a></li>
									<li class="breadcrumb-item"><a href="#!">Library</a></li>
									<li class="breadcrumb-item active" aria-current="page">Data</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card">
						<div class="card-header">
							<h5>Breadcrumb Icon</h5>
						</div>
						<div class="card-body">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item active" aria-current="page"><i class="feather icon-home"></i></li>
								</ol>
							</nav>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
									<li class="breadcrumb-item active" aria-current="page">Library</li>
								</ol>
							</nav>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#!"><i class="feather icon-home"></i></a></li>
									<li class="breadcrumb-item"><a href="#!">Library</a></li>
									<li class="breadcrumb-item active" aria-current="page">Data</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							<h5>Pagination</h5>
						</div>
						<div class="card-body">
							<nav aria-label="Page navigation example">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#!">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#!">1</a></li>
									<li class="page-item"><a class="page-link" href="#!">2</a></li>
									<li class="page-item"><a class="page-link" href="#!">3</a></li>
									<li class="page-item"><a class="page-link" href="#!">Next</a></li>
								</ul>
							</nav>
							<h5 class="mt-5">Working with Icons</h5>
							<hr>
							<nav aria-label="Page navigation example">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
									<li class="page-item"><a class="page-link" href="#!">1</a></li>
									<li class="page-item"><a class="page-link" href="#!">2</a></li>
									<li class="page-item"><a class="page-link" href="#!">3</a></li>
									<li class="page-item"><a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
								</ul>
							</nav>
							<h5 class="mt-5">Disabled and Active States</h5>
							<hr>
							<nav aria-label="...">
								<ul class="pagination">
									<li class="page-item disabled"><span class="page-link">Previous</span></li>
									<li class="page-item"><a class="page-link" href="#!">1</a></li>
									<li class="page-item active"><span class="page-link">2<span class="sr-only">(current)</span></span>
									</li>
									<li class="page-item"><a class="page-link" href="#!">3</a></li>
									<li class="page-item"><a class="page-link" href="#!">Next</a></li>
								</ul>
							</nav>
							<h5 class="mt-5">Sizing</h5>
							<hr>
							<nav class="mb-4" aria-label="...">
								<ul class="pagination pagination-lg">
									<li class="page-item disabled">
										<a class="page-link" href="#!" tabindex="-1">1</a>
									</li>
									<li class="page-item"><a class="page-link" href="#!">2</a></li>
									<li class="page-item"><a class="page-link" href="#!">3</a></li>
								</ul>
							</nav>
							<nav aria-label="...">
								<ul class="pagination pagination-sm">
									<li class="page-item disabled">
										<a class="page-link" href="#!" tabindex="-1">1</a>
									</li>
									<li class="page-item"><a class="page-link" href="#!">2</a></li>
									<li class="page-item"><a class="page-link" href="#!">3</a></li>
								</ul>
							</nav>
							<h5 class="mt-5">Alignment</h5>
							<hr>
							<nav aria-label="Page navigation example">
								<ul class="pagination justify-content-center">
									<li class="page-item disabled">
										<a class="page-link" href="#!" tabindex="-1">Previous</a>
									</li>
									<li class="page-item"><a class="page-link" href="#!">1</a></li>
									<li class="page-item"><a class="page-link" href="#!">2</a></li>
									<li class="page-item"><a class="page-link" href="#!">3</a></li>
									<li class="page-item">
										<a class="page-link" href="#!">Next</a>
									</li>
								</ul>
							</nav>
							<nav aria-label="Page navigation example">
								<ul class="pagination justify-content-end">
									<li class="page-item disabled">
										<a class="page-link" href="#!" tabindex="-1">Previous</a>
									</li>
									<li class="page-item"><a class="page-link" href="#!">1</a></li>
									<li class="page-item"><a class="page-link" href="#!">2</a></li>
									<li class="page-item"><a class="page-link" href="#!">3</a></li>
									<li class="page-item">
										<a class="page-link" href="#!">Next</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<!-- [ Breadcrumbs & Pagination ] end -->
			</div>
			<!-- [ Main Content ] end -->
		</div>
	</div>
	<!-- [ Main Content ] end -->

</body>

</html>
