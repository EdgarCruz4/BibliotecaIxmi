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
								<h5 class="m-b-10">Tooltip &amp; Popover</h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
								<li class="breadcrumb-item"><a href="#!">Basic Components</a></li>
								<li class="breadcrumb-item"><a href="#!">Tooltip &amp; Popover</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- [ breadcrumb ] end -->
			<!-- [ Main Content ] start -->
			<div class="row">
				<!-- [ tooltip ] start -->
				<div class="col-md-6 col-sm-12">
					<div class="card">
						<div class="card-header">
							<h5>Tooltip</h5>
						</div>
						<div class="card-body btn-page">
							<button type="button" class="btn  btn-danger" data-toggle="tooltip" data-placement="top" title="tooltip on top">Top</button>
							<button type="button" class="btn  btn-primary" data-toggle="tooltip" data-placement="left" title="tooltip on left">Left</button>
							<button type="button" class="btn  btn-success" data-toggle="tooltip" data-placement="right" title="tooltip on right">Right</button>
							<button type="button" class="btn  btn-warning" data-toggle="tooltip" data-placement="bottom" title="tooltip on bottom">Bottom</button>
							<button type="button" class="btn  btn-info" data-toggle="tooltip" data-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">Html Tooltip</button>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="card">
						<div class="card-header">
							<h5>Popover</h5>
						</div>
						<div class="card-body btn-page">
							<button type="button" class="btn  btn-danger" data-toggle="popover" data-placement="top" title="" data-content="top by popover" data-original-title="popup on top">Top</button>
							<button type="button" class="btn  btn-primary" data-toggle="popover" data-placement="left" title="popup on left" data-content="left by popover">Left</button>
							<button type="button" class="btn  btn-success" data-toggle="popover" data-placement="right" title="popup on right" data-content="right by popover">Right</button>
							<button type="button" class="btn  btn-warning" data-toggle="popover" data-placement="bottom" title="popup on bottom" data-content="bottom by popover">Bottom</button>
							<button type="button" class="btn  btn-info" data-toggle="popover" data-html="true" data-placement="top" title="<em>popup</em> <u>with</u> <b>HTML</b>" data-content="popup by HTML">Html popup</button>
						</div>
					</div>
				</div>
				<!-- [ tooltip ] end -->
			</div>
		</div>
	</div>
	<!-- [ Main Content ] end -->
</body>
</html>
