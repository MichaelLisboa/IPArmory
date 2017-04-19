
<footer id="footer" class="bg-one">
	<div class="container">
	    <div class="row">
			<div class="col-lg-12">

				<div class="clearfix"><p>&nbsp;</p></div>
				<!-- copyright -->
				<div class="copyright text-center">
					<a href="/home.php?#body"  data-toggle="collapse" data-target=".navbar-collapse.in"><img src="/img/logo.png" style="width: 150px" alt="<?php echo $companyName ?> logo" /></a>
					<br /><br />
					<p style="font-size: .75em;">Copyright &copy;<?php echo date("Y"); ?> <?php echo($companyRegisteredName) ?> &nbsp;All Rights Reserved. &nbsp;<a href="/terms.php">Confidentiality Agreement</a>. <?php if ($adminAccess >= 1) {
					?>
					<a href="/admin">Admin Panel</a> 
					<?php } ?></p>
				</div>
				<!-- /copyright -->						
			</div> <!-- end col lg 12 -->
		</div> <!-- end row -->
	</div> <!-- end container -->
</footer> <!-- end footer -->