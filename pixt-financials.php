<?php
	ob_start();
	session_start();
	require( "cms/config.php" );
	require_once 'cms/dbconnect.php';
	require_once 'cms/company_db.php';
	
	$userId = $_SESSION['user'];
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <title><?php echo $companyName ?> | Download the <?php echo $companyName ?> Financial Projections</title>
    <meta name="description" content="The <?php echo $companyName ?> Financial Projections">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.php?v=<?php echo rand() ?>">
    
    <script async src="js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body class="blog-page">
	    <?php include 'includes/sub-nav.php' ?>
        
        
        <!-- Start Blog Banner
        ==================================== -->
        <section id="blog-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       
                        <div class="blog-icon">
                            <i class="fa fa-download fa-5x"></i>
                        </div>
                        <div class="blog-title">
                            <h1>Thank you for downloading</h1>
                        </div>
                        
					</div>     <!-- End col-lg-12 -->
				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
        
        
        <!-- Start Blog Post Section
        ==================================== -->
        <section id="blog-page">
            <div class="container">
                <div class="row">
                   
                    <div id="blog-posts" class="col-md-8 col-sm-8">
                        <div class="post-item">
                           
                           <!-- Single Post -->
                            <article class="entry">
								<div class="post-excerpt">
									<h3 class="color">Download the <?php echo $companyName ?> Financial Projections</h3>
									
									<?php include 'includes/confidentiality-notice.php' ?>
									
									<p class="text-center"><a class="btn btn-transparent " href="download.php?id=2&userId=<?php echo($userId) ?>" target="_blank" download>I Agree</a> &nbsp; <a class="btn btn-transparent " href="logout.php?logout">No thanks</a></p>
								</div>
                            </article>
							
                            <!-- End Single Post -->

                        </div>
                    </div>
                    
                    <!-- Widget Section -->
                    <div id="right-sidebar" class="col-md-4 col-sm-4">
                       
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInDown">								
							<div class="widget-content">								
								<!-- tab content -->
								<div class="tab-content">
									<article>
										<div>
											<div class="text-center">
												<a href="pixt-story.php"><i class="fa fa-photo fa-5x"></i></a>
											</div>
											<a href="pixt-story.php"><h3 class="text-center">The <?php echo $companyName ?> Story Presentation</h3></a>
											<p class="text-center">The <?php echo $companyName ?> story presentation is a fun read and answers many questions. You can <a href="pixt-story.php" style="text-decoration: underline;">get it here</a>.</p>
										</div>
										<p class="clearfix" style="padding: 5px 0 20px;">&nbsp;</p>
										<div>
											<div class="text-center">
												<a href="pixt-faq.php"><i class="fa fa-question-circle fa-5x"></i></a>
											</div>
											<a href="pixt-faq.php"><h3 class="text-center">Frequently Asked Questions</h3></a>
											<p class="text-center">Funny thing, we hear the same questions often and we have answers. <a href="pixt-faq.php" style="text-decoration: underline;">Our FAQ</a> has the answers.</p>
											
										</div>
									</article>							
									
								</div>
								<!-- /tab content -->
								
							</div>
                        </aside>
                        <!-- End Single Widget -->
                        
                    </div>
                    <!-- End Widget Section -->

				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
        
		<?php include 'includes/contact.php' ?>
		<?php include 'includes/footer.php' ?>
		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script src="js/jquery-1.11.0.min.js"></script>
		<!-- Bootstrap 3.1 -->
		<script src="js/bootstrap.min.js"></script>
		<!-- wow.min Script -->
		<script src="js/wow.min.js"></script>
		<!-- Highlight menu item -->
		<script src="js/jquery.nav.js"></script>
		<!-- Sticky Nav -->
		<script src="js/jquery.sticky.js"></script>
		<!-- Custom js -->
		<script src="js/custom-sub.js"></script>

    </body>
</html>
<?php ob_end_flush(); ?>