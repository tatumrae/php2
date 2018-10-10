<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include(VIEWPATH.'template/header.php');
?>

<section>
	<form class="text-center border border-light p-5" action="<?= site_url('contact/submitform'); ?>" method="post">
		
		<p class="h4 mb-4">Let's Talk</p>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" name="contactName" class="form-control mb-4" placeholder="Your Name">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" name="contactEmail" class="form-control mb-4" placeholder="Your Email">
				</div>
			</div>
		</div>
		<div class="row mb-4">
			<div class="col-md-12">
				<textarea class="form-control rounded-0" name="message" rows="3" placeholder="Message"></textarea>
<!--				<input type="text" name="message" placeholder="Your Message">-->
			</div>
		</div>
		<div class="col-md-12">
			<input type="submit" class="btn btn-info btn-block" value="Send message">
		</div>	
	</form>
</section>
</main>

<?php include(VIEWPATH.'template/footer.php'); ?>	


