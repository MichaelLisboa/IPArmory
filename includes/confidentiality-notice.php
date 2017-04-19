<?php
	if ( $name == '' ) {
		require_once 'cms/dbconnect.php';
		$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
		$userRow=mysql_fetch_array($res);
		
		$name = $userRow['userName'];
		$email =  $userRow['userEmail'];
	}
	
	
	
	require_once 'cms/company_db.php';	
	// generate your html

?>

<h4 class="color">Confidentiality Notice</h4>
<?php echo $companyConfidentiality ?>
