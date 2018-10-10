<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!-- begin footer -->
<!--   </div>  end row 	-->
   <div class="row">
     <div class="col text-center">
      	<p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
     </div>
   </div>
</div>

<!-- JS -->
<script src="<?= base_url('js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('js/bootstrap.min.js'); ?>"></script>

</body>
</html>
