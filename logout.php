<?php
require( "cms/config.php" );
	session_start();
	 
	if (isset($_GET['logout'])) {
		unset($_SESSION['user']);
		session_unset();
		session_destroy();
	}
	
	require_once 'cms/company_db.php';
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
         <section id="blog-banner" style="padding-bottom: 30px; padding-top: 50px;">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12 text-center">
                        
                         <div class="blog-icon">
                             <i class="fa fa-frown-o fa-5x"></i>
                         </div>
                         <div class="blog-title">
                             <h1>You've been logged out</h1>
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
 									<h3 class="color text-center">Thank you for visiting <?php echo $companyName ?>!</h3>
 									<p class="text-center">If that was an accident, <a href="home.php" class="color">Sign In</a> again.</p>
 									<p class="text-center"><a class="btn btn-transparent " href="home.php">Sign In</a></p>
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