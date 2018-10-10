<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//include(VIEWPATH.'template/navigation_only.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Home | The Library</title>

	<link href="<?= base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('css/style.css'); ?>" rel="stylesheet">
  	<link href="<?= base_url('css/cover.css'); ?>" rel="stylesheet">
	  
  </head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
          <nav class="navbar navbar-toggleable-sm navbar-inverse nav nav-masthead  justify-content-center fixed-top bg-inverse">
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
			  <div class="navbar-collapse collapse"></div>
          </nav>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Cover your page.</h1>
        <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
        <p class="lead">
          <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
			<p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
        </div>
      </footer>
    </div>

	<script src="<?= base_url('js/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js'); ?>"></script>
  </body>
</html>
