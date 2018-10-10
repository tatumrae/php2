<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include(VIEWPATH.'template/header.php');

?>
<div class="page-header">
    <div class="row">
    	<div class="col col-md-5">
        	<h1><?= $title; ?></h1>
            <hr>
    		<b>ID: </b> <?= $book->id; ?><br>	
            <b>Title: </b> <?= $book->title; ?><br>	
			<b>Publisher: </b> <?= $book->publisherCode; ?><br>	
            <b>Genre: </b> <?= $book->genre; ?><br>
            <b>Authors: </b> <?= implode(', ', $book->authors()); ?><br>
			<b>Price: </b> <?= $book->price; ?><br>
            <br>
            <a href="<?= site_url('books') ?>">&larr; Back</a><br>
            <br>
        </div>
    </div>
</div>
	
<?php include(VIEWPATH.'template/footer.php'); ?>	
