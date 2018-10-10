<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include(VIEWPATH.'template/header.php');
?>
<div class="page-header">
<!--
    <div class="row">
    	<div class="col col-md-5">
        	<h1><?= $title; ?></h1>
            <hr>
    		<b>Continent: </b> <?= $country->continent; ?><br>	
            <b>Region: </b> <?= $country->region; ?><br>	
            <b>Population: </b> <?= number_format($country->population); ?><br>
            <b>Languages: </b> <?= implode(', ', $country->languages()); ?><br>
            <br>
            <a href="<?= site_url('authors') ?>">&larr; Back</a><br>
            <br>
        </div>
   	</div>
-->
</div>

<h3>Authors</h3>
<?php if(count($book->authors())): ?>
<table class="table table-striped table-condensed">    
	<thead>
		<tr>
			<th>Author Number</th>
			<th>First Name</th>
			<th>Last Name</th>
		</tr>
	</thead>
	<tbody> 
	<?php foreach ($book->authors() as $author): ?>
	   <tr>
			<td><?= $author->authorNum; ?></td>
			<td><a href="<?= site_url("authors/detail/{$author->id}"); ?>"><?= $author->authorFirst; ?></a></td>
			<td><a href="<?= site_url("authors/detail/{$author->id}"); ?>"><?= $author->authorLast; ?></a></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
<?php else: ?>
<p class="alert alert-warning">No authors found.</p>
<?php endif; ?>
	
<?php include(VIEWPATH.'template/footer.php'); ?>	
