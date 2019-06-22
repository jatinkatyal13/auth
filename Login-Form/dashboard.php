<?php
	session_start();
	include '../django-php-bridge-master/contrib/php/djangoSession.class.php';
	print_r($_SESSION);
	if($_SESSION['sid']==session_id())
	{
		
		echo "<a href='logout.php'>Logout</a>";
	}
	else
	{
		header("location:index.php");
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home Page</title>
</head>

<body>

<table border="2" cellpadding="15" cellspacing="2" width="400" align="center">
<tr><td align="center">
<h2>Welcome User</h2></td>
<tr><td align="center">
<a href='logout.php'>Logout</a>
</td></tr>
</tr>
</table>


</body>
</html>