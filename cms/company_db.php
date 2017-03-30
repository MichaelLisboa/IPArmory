<?php
	if ( $adminAccess == '' ) {
		$res=mysql_query("SELECT * FROM users WHERE userId='" . $_SESSION['user'] . "'");
		$userRow = mysql_fetch_array($res); 	
		$adminAccess = $userRow['userLevel'];
	}
	
	$company_query=mysql_query("SELECT * FROM company WHERE company_id='$companyID'");
	
	$company_row=mysql_fetch_array($company_query);
	
	$companyName = $company_row['company_name'];
	$companyRegisteredName = $company_row['company_registered_name'];
	$companyURL = $company_row['company_url'];
	$companyAdmin = $company_row['company_admin'];
	$companyPhone = $company_row['company_phone'];
	$companyEmail = $company_row['company_email'];
	$companyAddress = $company_row['company_address'];
	$companyType = $company_row['company_type'];
	$companyTagline = $company_row['company_tagline'];
	$companyTheme = $company_row['company_theme'];
	$companyConfidentiality = $company_row['company_confidentiality'];
	$companyNDA = $company_row['company_nda'];

 // ------------------------------------
 //       SIR TREVOR RENDERING
 // ------------------------------------ 
 // add the composer autoloader to your file
// require_once $root . '/vendor/autoload.php'; 
 // Add the needed use statements to be able to use this library
?>