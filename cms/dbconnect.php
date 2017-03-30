<?php

 // this will avoid mysql_connect() deprecation error.
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 // but I strongly suggest you to use PDO or MySQLi.
 
// define('DBHOST', 'localhost');
// define('DBUSER', 'kizmo');
// define('DBPASS', '!Murderbug005');
// define('DBNAME', 'dev_pixt');
 
 // LOCAL DEV SERVER
 define('DBHOST', '127.0.0.1');
 define('DBUSER', 'root');
 define('DBPASS', 'murderbug');
 define('DBNAME', 'IPArmoryLocal');
 
 $conn = mysql_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysql_select_db(DBNAME);
 
 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
 }
 
  $expireAfter = 30;
   
  //Check to see if our "last action" session
  //variable has been set.
 if(isset($_SESSION['last_action'])){
 	
 	//Figure out how many seconds have passed
 	//since the user was last active.
 	$secondsInactive = time() - $_SESSION['last_action'];
 	
 	//Convert our minutes into seconds.
 	$expireAfterSeconds = $expireAfter * 60;
 	
 	//Check to see if they have been inactive for too long.
 	if($secondsInactive >= $expireAfterSeconds){
 		//User has been inactive for too long.
 		//Kill their session.
 		session_unset();
 		session_destroy();
 		header("Location: index.php");
 	}
 
 }
   
  //Assign the current timestamp as the user's
  //latest activity
  $_SESSION['last_action'] = time();
 ?>