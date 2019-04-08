<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
<!DOCTYPE html>
<html dir="ltr" lang="es-MX">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?= $title ?></title>
	<meta name="author" content="Pekochu" />
	<?= $_css ?>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body class="stretched side-header">
	<!-- Documento
	============================================= -->
	<div id="wrapper" class="clearfix">
		<!-- Cabecera
		============================================= -->
		<header id="header" class="no-sticky">
			<div id="header-wrap">
				<div class="container clearfix">
					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
					<!-- Logos
					============================================= -->
					<div id="logo" class="nobottomborder">
					<a href="<?=base_url()?>inicio" class="standard-logo" data-dark-logo="<?=base_url()?>public/images/Logo_white.svg"><img class="divcenter" src="<?=base_url()?>public/images/Logo_black.svg" alt="SmartFood Logo"></a>
					<a href="<?=base_url()?>inicio" class="retina-logo" data-dark-logo="<?=base_url()?>public/images/Logo_white.svg"><img class="divcenter" src="<?=base_url()?>public/images/Logo_black.svg" alt="SmartFood Logo"></a>
					</div><!-- #logo end -->

					<!-- Menu principal
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="<?=base_url()?>inicio"><div>Inicio</div></a>
							</li>
							<li><a href="#"><div>Diagramas</div></a>
								<ul>
									<li><a href="<?=base_url()?>stakeholders"><div>Stakeholders</div></a>
									</li>
									<li><a href="<?=base_url()?>casos_de_uso"><div>Casos de uso</div></a>
									</li>
								</ul>
							</li>
						</ul>

					</nav>
					<div class="clearfix d-none d-lg-block">
						<a href="#" class="social-icon si-small si-borderless si-facebook">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>

						<a href="#" class="social-icon si-small si-borderless si-twitter">
							<i class="icon-twitter"></i>
							<i class="icon-twitter"></i>
						</a>

						<a href="#" class="social-icon si-small si-borderless si-gplus">
							<i class="icon-gplus"></i>
							<i class="icon-gplus"></i>
						</a>

						<a href="#" class="social-icon si-small si-borderless si-pinterest">
							<i class="icon-pinterest"></i>
							<i class="icon-pinterest"></i>
						</a>

						<a href="#" class="social-icon si-small si-borderless si-github">
							<i class="icon-github"></i>
							<i class="icon-github"></i>
						</a>
					</div>
				</div>
			</div>
		</header>