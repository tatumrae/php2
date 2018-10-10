<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include(VIEWPATH.'template/header.php');
?>
<div class="page-header">
	<h1><?= $title; ?></h1>
	<p>Click on a book to find more information.</p>
</div>

<table class="table table-striped table-condensed">  
	<thead>
		<tr>
			<th>Title</th>
			<th>Publisher</th>
			<th>Genre</th>
			<th class="text-right">Price</th>
		</tr>
	</thead>
	<tbody> 
	<?php foreach ($books as $book): ?>
	    <tr>
			<td><a href="<?= site_url("books/detail/{$book->id}"); ?>"><?= $book->title; ?></a></td>
<!--			<td><?= $book->title; ?></td>-->
			<td><?= $book->publisherCode; ?></td>
			<td><?= $book->genre; ?></td>
			<td class="text-right">$<?= number_format($book->price, 2); ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody> 
</table>	
</main>

<?php include(VIEWPATH.'template/footer.php'); ?>	
