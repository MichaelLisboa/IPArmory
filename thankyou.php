<?php
require( "cms/config.php" );
require_once 'cms/company_db.php';

 ob_start();
 session_start();
 
 if ( $name == '' ) {
 	require_once 'cms/dbconnect.php';
 	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 	$userRow=mysql_fetch_array($res);
 	
 	$name = $userRow['userName'];
 }
 
 $firstName = explode(" ", $name);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php include 'includes/metas.php' ?>
	
    </head>
	
    <body id="body"> 
    
    <!-- Start Blog Banner
        ==================================== -->
        <section id="blog-banner" style="padding-bottom: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                       
                        <div class="blog-icon">
                            <i class="fa fa-smile-o fa-5x"></i>
                        </div>
                        <div class="blog-title">
                            <h1>Thanks for the message!</h1>
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
                   
                    <div id="blog-posts" class="col-md-8 col-md-offset-2">
                        <div class="post-item">
                           
                           <!-- Single Post -->
                            <article class="entry">
								<div class="post-excerpt">
									<h2 class="color text-center">We'll follow up with you shortly.</h2>
									<p class="text-center"><a class="btn btn-transparent "  href="home.php">Go Back</a></p>
								</div>
                            </article>
							
                            <!-- End Single Post -->

                        </div>
                    </div>
                    

				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
        
        <?php include 'includes/footer.php' ?>
    </body>
</html>