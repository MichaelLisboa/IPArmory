

<!-- 
Fixed Navigation
==================================== -->
<header id="navigation" class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">	
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>				
			<!-- logo -->
            <a class="navbar-brand" href="home.php" id="<?php echo $companyName ?> logo"><img src="img/logo.png" style="width: 150px" alt="<?php echo $companyName ?>" /></a>
			<!-- /logo -->
        </div>
        
		<?php		
			if ( $adminAccess == '' ) {

				$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
				$userRow=mysql_fetch_array($res);				
				$adminAccess = $userRow['userLevel'];
			}
		?>
        
		<!-- main nav -->
        <nav class="collapse navbar-collapse navbar-right" role="Navigation">
            <ul id="nav" class="nav navbar-nav" data-toggle="collapse" data-target="#navbar-menu">
                <li><a href="home.php?#main-features" data-toggle="collapse" data-target=".navbar-collapse.in">The Video</a></li>
                <li><a href="home.php#services" data-toggle="collapse" data-target=".navbar-collapse.in">Financials &amp; FAQs</a></li>
                <li><a href="home.php?#blog" data-toggle="collapse" data-target=".navbar-collapse.in">The Patents</a></li>
                <li><a href="home.php?#pricing" data-toggle="collapse" data-target=".navbar-collapse.in">Investment Timeline</a></li>
                <li><a href="home.php?#our-team" data-toggle="collapse" data-target=".navbar-collapse.in">Our Team</a></li>
                <li><a href="home.php?#contact-us" data-toggle="collapse" data-target=".navbar-collapse.in">Contact</a></li>
            </ul>
        </nav>
		<!-- /main nav -->
		
    </div>
</header>
<!--
End Fixed Navigation
==================================== -->