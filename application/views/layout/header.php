<!doctype html>
<html>

<head>
	<!-- Basic Page Needs
    ================================================== -->
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grit - Home</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicons
    ================================================== -->
	<link rel="shortcut icon" href="<?php base_url() ?>assets/img/favicon.ico" type="image/x-icon">

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php base_url() ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url() ?>assets/css/font-awesome.css">

	<!-- Slider
    ================================================== -->
	<link href="<?php base_url() ?>assets/css/owl.carousel.css" rel="stylesheet" media="screen">
	<link href="<?php base_url() ?>assets/css/owl.theme.css" rel="stylesheet" media="screen">
	<link href="<?php base_url() ?>assets/css/animate.css" rel="stylesheet" media="screen">

	<!-- Stylesheet
    ================================================== -->
	<link rel="stylesheet" type="text/css" href="<?php base_url() ?>assets/css/style.css">
	<link
		href='https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Montserrat:100,200,300,300i,400,500,600,700,800,900'
		rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body>
	<!-- Navigation
    ==========================================-->
	<nav id="top-menu" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
				<a class="navbar-brand" href="/"><img src="<?php base_url() ?>assets/img/logo-top.png"
						class="img-responsive"><span>Grit</span></a> </div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<!--nav icon-->
				<a id="nav-icon"> <span></span> <span></span> <span></span> </a>
				<!--nav icon end-->

				<ul id="nav-top" class="nav navbar-nav navbar-right">
					<li><a href="index.html" class="page-scroll">Home</a></li>
					<li><a href="login" class="page-scroll">Login</a></li>
					<li><a href="page.html" class="page-scroll">Page</a></li>
					<li><a href="blog.html" class="page-scroll">Blog</a></li>
					<li><a href="contact.html" class="page-scroll">Contact</a></li>
				</ul>
				<!--search form-->
				<form method="get" action="/search" id="search">
					<input name="q" type="text" size="40" placeholder="Search..." />
				</form>
				<!--/search form-->

				<nav class="bottom-nav">
					<ul>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Pricing</a></li>
					</ul>
				</nav>

				<ul class="social-link">
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>