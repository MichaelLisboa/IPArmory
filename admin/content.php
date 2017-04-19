<?php

 ob_start();
 session_start();
 require_once $_SERVER['DOCUMENT_ROOT'] . "/cms/config.php";
 require_once $root . '/cms/company_db.php';
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: /index.php");
  exit;
 }
 
 $relconn = mysql_query("SELECT company.company_admin, users.userName FROM company, users WHERE company.company_admin = users.userId");
 $relRow = mysql_fetch_array($relconn);
 
 $companyAdmin = $relRow['userName'];
 
 $res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysql_fetch_array($res);
 
if( ($userRow['userLevel']) == '0' ) {
	 header("Location: /index.php");
	 die;
}
 
 function renderForm($companyName, $companyRegisteredName, $companyURL, $companyAdmin, $companyPhone, $companyAddress, $companyEmail, $companyType, $companyTagline, $companyTheme, $companyConfidentiality, $companyNDA, $error) {
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
		<link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
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

		
		<script src="/node_modules/tinymce/tinymce.min.js"></script>
		<!-- Modernizer Script for old Browsers -->		
        <script async src="/js/modernizr-2.6.2.min.js"></script>
        
        <script type="text/javascript">
        	tinymce.init({
        		selector: '.tinymce-input',
        		plugins: 'link, fullscreen',
        		convert_fonts_to_spans : true,     		
        		menubar: false,
        		toolbar: 'undo redo | styleselect | bold italic | link | fullscreen',
        		link_list: "/nda.php",
        		protect: [
        		    /\<\/?(if|endif)\>/g,  // Protect <if> & </endif>
        		    /\<xsl\:[^>]+\>/g,  // Protect <xsl:...>
        		    /<\?php.*?\?>/g  // Protect php code
        		  ]
        	});       	
        	
        	tinymce.init({
        		selector: '.tinymce-inline',
        		inline: true,
        		menubar: false,
        		toolbar: false
        	});
        </script>
        
        <style>
        	label{
        		width: 100%;
        		font-family: montserrat, helvetica,sans-serif;
        		font-weight: 300;
        	}
	        .styled-select {
	        	background-color: black;
	        	border: 1px solid #4e595f;
	        	height: 38px;
	        	font-size: 14px !important;
	        	height: 32px !important;
	        	padding: 5px !important; /* If you add too much padding here, the options won't show in IE */
	        	width: 100% !important;
	        }
	        
	        .tinymce-inline{
	        	background-color:  #fff !important;
	        	font: 1em "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
	        	color: #202020;
	        	text-transform: uppercase;
	        	padding: 10px 0 0 10px;
	        }
        </style>
	
    </head>
	
    <body id="body">
    
    <!-- 
    Fixed Navigation
    ==================================== -->
    <header id="navigation" class="navbar navbar-inverse">
        <div class="container">
            <?php include '../includes/admin-nav.php' ?>
    		
        </div>
    </header>
    <!--
    End Fixed Navigation
    ==================================== -->
    
<?php


if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>
    
<!-- Start Blog Banner
    ==================================== -->
    <section id="blog-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   
                    <div class="blog-icon">
                        <i class="fa fa-building fa-5x"></i>
                    </div>
                    <div class="blog-title">
                        <h1><?php echo $companyName; ?> <span class="color">Content</span></h1>
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
               
                <div id="blog-posts" class="col-md-6 col-md-offset-3">
                    <div class="post-item">
                       
                       <!-- Single Post -->
                        <article class="entry">
							<div class="contact-form">
				   					<form id="edit-form" method="post" action="" autocomplete="off" role="form">
				   					<input type="hidden" name="companyId" value="<?php echo $row['company_id'] ?>"/>
			   						<input type="hidden" name="createDate" value="<?php echo $mysql_date_now = date("Y-m-d"); ?>"/>
				   						<div class="form-group">
				   							<label for="companyName">Company Name:
				   							<input type="text" name="companyName" class="form-control" placeholder="Company Name" id="companyName" value="<?php echo $companyName ?>"></label>
				   						</div>
				   						<div class="form-group">
				   							<label for="companyRegisteredName">Company Registered Name:
				   							<input type="text" name="companyRegisteredName" class="form-control" placeholder="companyRegisteredName" id="companyRegisteredName" value="<?php echo $companyRegisteredName ?>"></label>
				   						</div>
				   						<div class="form-group">
				   							<label for="companyURL">Company Website URL:
				   							<input type="text" name="companyURL" class="form-control" placeholder="Company URL" id="companyURL" value="<?php echo $companyURL ?>"></label>
				   						</div>
				   						<div class="form-group">
				   							<label for="companyAdmin">Company Administrator:
				   							<input type="text" name="companyAdmin" class="form-control" placeholder="Company Administrator" id="companyAdmin" value="<?php echo  $companyAdmin ?>"></label>
				   						</div>
				   						<div class="form-group">
				   							<label for="companyPhone">Company Phone Number:
				   							<input type="text" name="companyPhone" class="form-control" placeholder="Company Phone Number" id="companyPhone" value="<?php echo $companyPhone ?>"></label>
				   						</div>
				   						<div class="form-group">
				   							<label for="companyAddress">Company Business Address:
				   							<input type="text" name="companyAddress" class="form-control" placeholder="Company Address" id="companyAddress" value="<?php echo $companyAddress ?>"></label>
				   						</div>
				   						<div class="form-group">
				   							<label for="companyEmail">Company Email:
				   							<input type="text" name="companyEmail" class="form-control" placeholder="Company Email Address" id="companyEmail" value="<?php echo $companyEmail ?>"></label>
				   						</div>
				   						<div class="form-group">
				   							<label for="companyType">Company Type:
				   							<input type="text" name="companyType" class="form-control" placeholder="Company Type" id="companyType" value="<?php echo $companyType ?>"></label>
				   						</div>
				   						
				   						<div class="form-group">
				   							<label for="companyTagline">Company Tagline:
				   							<div class="tinymce-inline form-control" name="companyTagline" id="companyTagline"><?php echo $companyTagline ?></div></label>
				   						</div>
				   						
				   						<div class="form-group">
				   							<label for="companyConfidentiality">Confidentiality Statement:
				   							<textarea class="tinymce-input form-control" placeholder="Your confidentiality statement" name="companyConfidentiality" id="companyConfidentiality" rows="10"><?php echo $companyConfidentiality ?></textarea></label>
				   						</div>
				   						
				   						<div class="form-group">
				   							<label for="companyNDA">Non-Disclosure Agreement:
				   							<textarea class="tinymce-input form-control" placeholder="Your NDA goes here" name="companyNDA" id="companyNDA" rows="10"><?php echo $companyNDA ?></textarea></label>
				   						</div>
													   								
		   								<div class="form-group">
				   							<label for="companyTheme">Website Theme:
		   									<select name="companyTheme" class="styled-select">
	   										  <option <?php if ($companyTheme == 1 ) echo 'selected' ; ?> value="1">Midnight (default)</option>
	   									  	  <option <?php if ($companyTheme == 2 ) echo 'selected' ; ?> value="2">Clear Skies</option>
   									  	  	  <option <?php if ($companyTheme == 3 ) echo 'selected' ; ?> value="3">Thailand Lotus</option>
	   									  	  <option <?php if ($companyTheme == 4 ) echo 'selected' ; ?> value="4">Bloodbath</option>
		   									</select></label>
		   								</div>
			   							
			   							<div class="form-group">
							             	<input type="submit" class="btn btn-transparent" name="submit" value="Submit"> &nbsp; &nbsp; <a href="index.php" class="color">Cancel</a>
							            </div>
				   					</form>
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



<!-- 
Essential Scripts
=====================================-->

<!-- Main jQuery -->
<script src="/js/jquery-1.11.0.min.js"></script>
<!-- Bootstrap 3.1 -->
<script src="/js/bootstrap.min.js"></script>
<!-- wow.min Script -->
<script src="/js/wow.min.js"></script>
<!-- Highlight menu item -->
<script src="/js/jquery.nav.js"></script>
<!-- Sticky Nav -->
<script src="/js/jquery.sticky.js"></script>
<!-- Custom js -->
<script src="/js/custom-sub.js"></script>

<?php

}


// check if the form has been submitted. If it has, process the form and save it to the database

if (isset($_POST['submit'])){

// get form data, making sure it is valid
	
	$companyName = mysql_real_escape_string(htmlspecialchars($_POST['companyName']));
	$companyRegisteredName = mysql_real_escape_string(htmlspecialchars($_POST['companyRegisteredName']));
	$companyURL = mysql_real_escape_string(htmlspecialchars($_POST['companyURL']));
	$companyAdmin = mysql_real_escape_string(htmlspecialchars($_POST['companyAdmin']));
	$companyPhone = mysql_real_escape_string(htmlspecialchars($_POST['companyPhone']));
	$companyAddress = mysql_real_escape_string(htmlspecialchars($_POST['companyAddress']));
	$companyEmail = mysql_real_escape_string(htmlspecialchars($_POST['companyEmail']));
	$companyType = mysql_real_escape_string(htmlspecialchars($_POST['companyType']));
	$companyTheme = $_POST['companyTheme'];
	$companyTagline = mysql_real_escape_string($_POST['companyTagline']);
	$companyConfidentiality = mysql_real_escape_string($_POST['companyConfidentiality']);
	$companyNDA = mysql_real_escape_string($_POST['companyNDA']);

	if ($companyName == '' || $companyRegisteredName == '' || $companyURL == '' || $companyAdmin == '' || $companyPhone == '' || $companyAddress == '' || $companyEmail == '' || $companyType == '' || $companyConfidentiality == '' || $companyNDA == '') {
	
		$error = 'ERROR: Please fill in all required fields!';
		renderForm($companyName, $companyRegisteredName, $companyURL, $companyAdmin, $companyPhone, $companyAddress, $companyEmail, $companyType, $companyTagline, $companyTheme, $companyConfidentiality, $companyNDA, $error);
	
	}else{
	
		
		
		// save the data to the database
		mysql_query("UPDATE company SET company_name='$companyName', company_registered_name='$companyRegisteredName', company_url='$companyURL', company_admin='$companyAdmin', company_phone='$companyPhone', company_address='$companyAddress', company_email='$companyEmail', company_type='$companyType', company_tagline='$companyTagline', company_theme ='$companyTheme', company_confidentiality='$companyConfidentiality', company_nda='$companyNDA' WHERE company_id='$companyID'") or die(mysql_error());
		
		// once saved, redirect back to the view page
		header("Location: company-setup.php");
	}

}else{

	// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

	

		if($company_row){
								
			// show form
			
			renderForm($companyName, $companyRegisteredName, $companyURL, $companyAdmin, $companyPhone, $companyAddress, $companyEmail, $companyType, $companyTagline, $companyTheme, $companyConfidentiality, $companyNDA, '');
		
		}else{
		
		echo "No results!";
		
		}

}

?>