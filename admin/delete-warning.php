<?php
ob_start();
session_start();
require( "../cms/config.php" );
require_once '../cms/company_db.php';


// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) ) {
 header("Location: /index.php");
 exit;
}

$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

if( ($userRow['userLevel']) == '0' ) {
	 header("Location: /index.php");
	 die;
}

// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['userId']) && is_numeric($_GET['userId']))

{
	// get id value
	
	$userId = $_GET['userId'];
	
		$query=mysql_query("SELECT * FROM users WHERE userId=".$_GET['userId']);
		$r=mysql_fetch_assoc($query);
		
		$name = $r['userName'];
	
}

 ?>
 
 <!DOCTYPE html>
 <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
 <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
 <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
 <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
     <head>
 		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <meta name="description" content="<?php echo $companyName ?> | Admin Panel">
         <meta name="robots" content="noindex" />
 		
         <title><?php echo $companyName ?> | Admin Panel</title>
 		
 		<!-- Mobile Specific Meta
 		================================================== -->
         <meta name="viewport" content="width=device-width, initial-scale=1">
 		
 		<!-- Favicon -->
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
 		
 		<!-- CSS
 		================================================== -->
 		<!-- Fontawesome Icon font -->
         <link rel="stylesheet" href="/css/font-awesome.min.css">
 		<!-- bootstrap.min css -->
         <link rel="stylesheet" href="/css/bootstrap.min.css">
 		<!-- Main Stylesheet -->
         <link rel="stylesheet" href="/css/main.php?v=<?php echo rand() ?>">
 		
 		<!-- Modernizer Script for old Browsers -->		
         <script async src="/js/modernizr-2.6.2.min.js"></script>
 	
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
                             <h1>You are about to delete  <br /><?php echo $name; ?>'s account</h1>
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
 									<h3 class="color text-center">Do you really want to do this?</h3>
 									<p class="text-center">Confirm below, please.</p>
 									<p class="text-center"><a class="btn btn-transparent " href="delete.php?userId=<?php echo($userId) ?>">Delete</a> &nbsp; <a class="btn btn-transparent " href="view.php">Cancel</a></p>
 								</div>
                             </article>
 							
                             <!-- End Single Post -->
 
                         </div>
                     </div>
                     
 
 				</div>	    <!-- End row -->
 			</div>       <!-- End container -->
 		</section>    <!-- End Section -->
 		
		<?php include '../includes/footer.php' ?>
     </body>
 </html>