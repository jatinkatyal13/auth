<?php 
	session_start();
	include '../django-php-bridge-master/contrib/php/djangoSession.class.php';
if(count($_POST)>0) 
{
 //Including dbconfig file.
include 'dbconfig.php';
 
$username = $_POST["user_name"];

$password = $_POST["password"];

$finalResult = mysql_query("SELECT * FROM users_customuser WHERE username='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'"); 

$confirm  = mysql_fetch_array($finalResult);

if(is_array($confirm)) {
	
	session_start();
	$_SESSION['sid']=session_id();
	header("location:http://localhost:8000/");

} else {
	

echo '<center>' . "Wrong UserName or Password..." . '</center>';

}

}


?>