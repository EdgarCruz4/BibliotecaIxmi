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
								<h5 class="m-b-10">Collapse</h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
								<li class="breadcrumb-item"><a href="#!">Basic Components</a></li>
								<li class="breadcrumb-item"><a href="#!">Collapse</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- [ breadcrumb ] end -->
			<!-- [ Main Content ] start -->
			<div class="row">
				<!-- [ basic-collapse ] start -->
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Basic Collapse</h5>
							<hr>
							<a class="btn  btn-primary  m-t-5" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Link with href</a>
							<button class="btn btn-primary  m-t-5" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Button with data-target</button>
						</div>
						<div class="collapse" id="collapseExample">
							<div class="card-body">
								<p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
									proident.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- [ basic-collapse ] end -->
				<!-- [ multiple-collapse ] start -->
				<div class="col-sm-12 mb-3">
					<h5 class="mb-3">Multiple Targets</h5>
					<hr>
					<a class="btn mb-1 btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
					<button class="btn mb-1 btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
					<button class="btn mb-1 btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
					<div class="row">
						<div class="col-sm-6">
							<div class="collapse multi-collapse mt-2" id="multiCollapseExample1">
								<div class="card">
									<div class="card-body">
										<p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
											sapiente ea
											proident.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="collapse multi-collapse mt-2" id="multiCollapseExample2">
								<div class="card">
									<div class="card-body">
										<p class="mb-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
											sapiente ea
											proident.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- [ multiple-collapse ] end -->
				<!-- [ accordion-collapse ] start -->
				<div class="col-sm-12">
					<h5 class="mb-3">Accordion Example</h5>
					<hr>
					<div class="accordion" id="accordionExample">
						<div class="card mb-0">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0"><a href="#!" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Collapsible Group Item #1</a></h5>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
									eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
									sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
									sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card mb-0">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0"><a href="#!" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Collapsible Group Item #2</a></h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
									eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
									sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
									sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0"><a href="#!" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Collapsible Group Item #3</a></h5>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
									eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
									sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
									sustainable VHS.
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- [ accordion-collapse ] end -->
			</div>
			<!-- [ Main Content ] end -->
		</div>
	</div>
	<!-- [ Main Content ] end -->

</body>

</html>
