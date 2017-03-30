<?php
if ( $adminAccess == '' ) {
	$res=mysql_query("SELECT * FROM users WHERE userId='" . $_SESSION['user'] . "'");
	$userRow = mysql_fetch_array($res); 	
	$adminAccess = $userRow['userLevel'];
}
$msql=mysql_query("SELECT * FROM company WHERE company_id= '$companyID'");
$row=mysql_fetch_array($msql);
$companyName = $row['company_name'];
$companyRegisteredName = $row['company_registered_name'];
$companyURL = $row['company_url'];
$companyAdmin = $row['company_admin'];
$companyPhone = $row['company_phone'];
$companyEmail = $row['company_email'];
$companyAddress = $row['company_address'];
$companyType = $row['company_type'];
$companyTagline = $row['company_tagline'];
$companyTheme = $row['company_theme'];
$companyConfidentiality = $row['company_confidentiality'];
$companyNDA = $row['company_nda'];
 // ------------------------------------
 //       SIR TREVOR RENDERING
 // ------------------------------------ 
 // add the composer autoloader to your file
// require_once $root . '/vendor/autoload.php'; 
 // Add the needed use statements to be able to use this library
?>