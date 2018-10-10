<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		<?= $title ?> | The Library</title>

	<!-- CSS -->
	<link href="<?= base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('css/style.css'); ?>" rel="stylesheet">
</head>

<body>
	<header>
			<nav id="topNav" class="navbar fixed-top navbar-toggleable-sm navbar-inverse bg-inverse">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target=".navbar-collapse">
				☰
			</button>


			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('books'); ?>">Books</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('authors'); ?>">Authors</a>
					</li>
<!--
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('publishers'); ?>">Publishers</a>
					</li>
-->
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('contact'); ?>">Contact</a>
					</li>
				</ul>
			</div>
			<a class="navbar-brand mx-auto" href="#">The Library</a>
			<div class="navbar-collapse collapse">
			</div>
		</nav>
	</header>
	<main role="main">
	<div class="container">
<!-- end header -->