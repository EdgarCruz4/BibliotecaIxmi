<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ablepro v8.0 bootstrap admin template by Phoenixcoded</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
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
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
						  
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
					    <label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="index.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
					    <label>UI Element</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Basic</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="bc_alert.php">Alert</a></li>
					        <li><a href="bc_button.php">Button</a></li>
					        <li><a href="bc_badges.php">Badges</a></li>
					        <li><a href="bc_breadcrumb-pagination.php">Breadcrumb & paggination</a></li>
					        <li><a href="bc_card.php">Cards</a></li>
					        <li><a href="bc_collapse.php">Collapse</a></li>
					        <li><a href="bc_progress.php">Progress</a></li>
					        <li><a href="bc_tabs.php">Tabs & pills</a></li>
					        <li><a href="bc_typography.php">Typography</a></li>
					        <li><a href="bc_tooltip-popover.php">Tooltip & popovers</a></li>
					        
					    </ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
					    <label>Forms &amp; table</label>
					</li>
					<li class="nav-item">
					    <a href="form_elements.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Forms</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
					    <label>Chart & Maps</label>
					</li>
					<li class="nav-item">
					    <a href="chart-apex.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
					    <label>Pages</label>
					</li>
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="auth-signup.php" target="_blank">Sign up</a></li>
					        <li><a href="auth-signin.php" target="_blank">Sign in</a></li>
					    </ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<img src="assets/images/logo.png" alt="" class="logo">
						<img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
								<div class="dropdown-menu dropdown-menu-right notification">
									<div class="noti-head">
										<h6 class="d-inline-block m-b-0">Notifications</h6>
										<div class="float-right">
											<a href="#!" class="m-r-10">mark as read</a>
											<a href="#!">clear all</a>
										</div>
									</div>
									<ul class="noti-body">
										<li class="n-title">
											<p class="m-b-0">NEW</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
													<p>New ticket Added</p>
												</div>
											</div>
										</li>
										<li class="n-title">
											<p class="m-b-0">EARLIER</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
													<p>currently login</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
									</ul>
									<div class="noti-footer">
										<a href="#!">show all</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
										<span>John Doe</span>
										<a href="auth-signin.php" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="auth-signin.php" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Badges</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#!">Basic Components</a></li>
							<li class="breadcrumb-item"><a href="#!">Badges</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<!-- [ badge ] start -->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Basic Badges</h5>
					</div>
					<div class="card-body">
						<h1>Example heading <span class="badge badge-secondary">New</span></h1>
						<h2>Example heading <span class="badge badge-secondary">New</span></h2>
						<h3>Example heading <span class="badge badge-secondary">New</span></h3>
						<h4>Example heading <span class="badge badge-secondary">New</span></h4>
						<h5>Example heading <span class="badge badge-secondary">New</span></h5>
						<h6>Example heading <span class="badge badge-secondary">New</span></h6>
					</div>
				</div>
				<div class="card btn-page">
					<div class="card-header">
						<h5>Button Badges</h5>
					</div>
					<div class="card-body">
						<button type="button" class="btn  btn-primary">primary <span class="badge badge-light">4</span></button>
						<button type="button" class="btn  btn-secondary">secondary <span class="badge badge-light">4</span></button>
						<button type="button" class="btn  btn-success">success <span class="badge badge-light">4</span></button>
						<button type="button" class="btn  btn-danger">danger <span class="badge badge-light">4</span></button>
						<button type="button" class="btn  btn-warning">warning <span class="badge badge-light">4</span></button>
						<button type="button" class="btn  btn-info">info <span class="badge badge-light">4</span></button>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h5>Contextual Variations</h5>
					</div>
					<div class="card-body">
						<span class="badge badge-primary">Primary</span>
						<span class="badge badge-secondary">Secondary</span>
						<span class="badge badge-success">Success</span>
						<span class="badge badge-danger">Danger</span>
						<span class="badge badge-warning">Warning</span>
						<span class="badge badge-info">Info</span>
						<span class="badge badge-light">Light</span>
						<span class="badge badge-dark">Dark</span>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h5>Pill Badges</h5>
					</div>
					<div class="card-body">
						<span class="badge badge-pill badge-primary">Primary</span>
						<span class="badge badge-pill badge-secondary">Secondary</span>
						<span class="badge badge-pill badge-success">Success</span>
						<span class="badge badge-pill badge-danger">Danger</span>
						<span class="badge badge-pill badge-warning">Warning</span>
						<span class="badge badge-pill badge-info">Info</span>
						<span class="badge badge-pill badge-light">Light</span>
						<span class="badge badge-pill badge-dark">Dark</span>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h5>Links</h5>
					</div>
					<div class="card-body">
						<a href="#!" class="badge badge-primary">Primary</a>
						<a href="#!" class="badge badge-secondary">Secondary</a>
						<a href="#!" class="badge badge-success">Success</a>
						<a href="#!" class="badge badge-danger">Danger</a>
						<a href="#!" class="badge badge-warning">Warning</a>
						<a href="#!" class="badge badge-info">Info</a>
						<a href="#!" class="badge badge-light">Light</a>
						<a href="#!" class="badge badge-dark">Dark</a>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h5>Light variant</h5>
					</div>
					<div class="card-body">
						<span class="badge badge-light-primary">Primary</span>
						<span class="badge badge-light-secondary">Secondary</span>
						<span class="badge badge-light-success">Success</span>
						<span class="badge badge-light-danger">Danger</span>
						<span class="badge badge-light-warning">Warning</span>
						<span class="badge badge-light-info">Info</span>
						<span class="badge badge-light-light">Light</span>
						<span class="badge badge-light-dark">Dark</span>
					</div>
				</div>
			</div>
			<!-- [ badge ] end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>



</body>

</html>
