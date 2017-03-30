<?php
 ob_start();
 session_start();
 
 
 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: /index.php");
  exit;
 }
 
// this will avoid mysql_connect() deprecation error.
error_reporting( ~E_DEPRECATED & ~E_NOTICE );
// but I strongly suggest you to use PDO or MySQLi.

 define('DBHOST', 'localhost');
 define('DBUSER', 'kizmo');
 define('DBPASS', '!Murderbug005');
 define('DBNAME', 'dev_pixt');

$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
$dbcon = mysql_select_db(DBNAME);

if ( !$conn ) {
 die("Connection failed : " . mysql_error());
}

if ( !$dbcon ) {
 die("Database Connection failed : " . mysql_error());
} 


$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

if( ($userRow['userLevel']) == '1' ) {
	 header("Location: /admin/view.php");
	 die;
 }else{
	 header("Location: /index.php");
	 die;
}

?>