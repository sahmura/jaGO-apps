<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- JaGO CSS -->
	<link rel="stylesheet" href="<?php echo base_url('webassets/css/jago.css'); ?>">

	<!-- Animate -->
	<link rel="stylesheet" href="<?php echo base_url('webassets/plugin/animate/animate.css'); ?>">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

	<!-- fontawesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

	<!-- Title -->
	<title><?php echo $judul; ?></title>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light shadow-sm sticky-top py-3" style="background:white">
		<div class="container">
			<a class="navbar-brand judulWeb" href="<?php echo base_url(); ?>">JaGO</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link aktif" href="#">Beranda</a>
					<a class="nav-item nav-link" href="#">Cari Guru</a>
					<a class="nav-item nav-link" href="#">Bantuan</a>
					<a class="nav-item nav-link" href="<?php echo base_url('home/aboutus'); ?>">Tentang Kami</a>
				</div>
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link btn btn-outline-primary mx-2 px-5 radiusBorder" href="<?php echo base_url('home/login'); ?>">Login <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link btn btn-primary mx-2 px-5 radiusBorder text-white" href="<?php echo base_url('home/register'); ?>">Register</a>
				</div>
			</div>
		</div>
	</nav>