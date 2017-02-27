<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Globe - Reraliable Hosting</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/slick.css"/>
	<?php wp_head(); ?>
</head>
<body>
	<!-- CABECERA -->
	<header class="cabecera">
		<nav class="navbar navbar-default">
			<div class="container container-fluid">
				<div class="navbar-header">
					<!-- boton menu responsive -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- logo -->
					<a href="#" class="navbar-brand">
						<img class="logo-globe hidden-xs " src="<?php bloginfo('template_url')?>/assets/img/globe-logo.png" alt="Globe">
						<img class="logo-globe hidden-sm hidden-md hidden-lg" src="<?php bloginfo('template_url')?>/assets/img/globe-logo-min.png" alt="Globe">
					</a>
				</div>

				<div class="collapse navbar-collapse" id="navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#">Home</a></li>
						<li role="presentation" class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Web Hosting</a>
							<ul class="dropdown-menu dropdown-left">
								<li><a href="#">Standard Hosting</a></li>
								<li><a href="#">Professional Hosting</a></li>
								<li><a href="#">Advanced Hosting</a></li>
								<li><a href="#">Unlimited Hosting</a></li>
							</ul>
						</li>
						<li><a href="#">Features</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>	
		</nav>
	</header>