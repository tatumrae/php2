<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include(VIEWPATH.'template/header.php');
?>
<div class="page-header">
	<h1><?= $author->authorFirst . " " . $author->authorLast; ?></h1>
</div>

<!--
<div class="row">
	<div class="col col-md-4">
        <b>Continent: </b> <?= $city->country->continent; ?><br>	
        <b>Country: </b> <?= $city->country->name; ?><br>
        <b>District: </b> <?= $city->district; ?><br>
        <b>Population: </b> <?= number_format($city->population); ?><br>
        <br>
        <a href="<?= site_url("countries/detail/{$city->countryCode}") ?>">&larr; Back</a><br>
        <br>
    </div>
    <div class="col col-md-8 text-right">
		<img class="img img-rounded img-responsive" src="https://maps.googleapis.com/maps/api/staticmap?center=<?= $city->name.','.$city->district.','.$city->country->name ?>&zoom=7&size=600x400&key=<?= GMAPS_API ?>">
    </div>
</div>
-->

<h3>Authors</h3>
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
	
<?php include(VIEWPATH.'template/footer.php'); ?>	
