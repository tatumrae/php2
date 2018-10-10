<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include(VIEWPATH.'template/header.php');
?>
<div class="page-header">
	<h1><?= $title; ?></h1>
	<p>Click on an author to find more information.</p>
</div>

<table class="table table-striped table-condensed">  
	<thead>
		<tr>
			<th>Author ID</th>
			<th>First Name</th>
			<th>Last Name</th>
		</tr>
	</thead>
	<tbody> 
	<?php foreach ($authors as $author): ?>
	    <tr>
			<td><?= $author->authorNum; ?></td>
			<td><?= $author->authorFirst; ?></td>
			<td><?= $author->authorLast; ?></td>
		</tr>
	<?php endforeach; ?>
	</tbody> 
</table>	
</main>

<?php include(VIEWPATH.'template/footer.php'); ?>	
