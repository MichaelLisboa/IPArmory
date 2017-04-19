<?php
 ob_start();
 session_start();
 include_once $_SERVER['DOCUMENT_ROOT'] . '/cms/config.php';
 
 
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
}else{
	 header("Location: view.php");
}

?>