<html>
<head>
<title>User Login Form</title>
</head>
<link href="style/login-style.css" rel="stylesheet" type="text/css">
<body>
<form method="post" action="">
<table border="2" cellpadding="15" cellspacing="2" width="400" align="center">
<tr class="tabheader">
<td align="center" colspan="2">Please Enter UserName & Password to Login.</td>
</tr>
<tr class="row">
<td align="center">UserName</td>
<td><input type="text" name="user_name"></td>
</tr>
<tr class="row">
<td align="center">Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr class="tabheader">
<td align="center" colspan="2">
<input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>

<?php
if(isset($_POST["submit"]))
{
include 'user_auth.php';
}
?>

</body></html>
