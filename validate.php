<?php
require( "cms/config.php" );
require_once 'cms/dbconnect.php';

	if (isset($_GET['userId']) && is_numeric($_GET['userId'])){
	
		$userId = $_GET['userId'];
		  
		$res=mysql_query("SELECT * FROM users WHERE userId='$userId'");
		$row=mysql_fetch_array($res);
		   
		$today = $mysql_date_now = date("Y-m-d");
		$expireDate = $row['userExpires'];
		$createDate = $row['createDate'];
		$dateCheck = date('Y-m-d',strtotime($createDate . " + $expireDate day"));
		    
		if ($dateCheck < $today){
			$userActive = "0";
			header("Location: expired.php?userId=" . $row['userId'] . "");
		}else{
			$userActive = "1";
		    header("Location: terms.php?userId=" . $row['userId'] . "");
		}
		
		if ( $row['userName'] != 'Michael Lisboa') {
			$query = mysql_query("INSERT INTO activity (user_id, userName, userActive, loginDate) VALUES ( '" . $userId . "' , '" . $row['userName'] . "' , '" . $userActive . "' , '" . $today . "' )");
			mysql_query($query);
		}
	}
?>