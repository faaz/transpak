<?php 
include("loginc.php"); 

include("menu.inc.php");
?>
<html>
<head>

<title>Login to System</title>

<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<br /><br /><br /><br />
<h2>Create User Account</h2>
<br />
<form action="acc_created.php" method="post">
<table width="300" border="1" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
  <td width="78"><strong>User Type:</strong></td>
    <td>
<select name="usertype">
<option value="client">client</option>
<option value="admin">admin</option>
<option value="accountant">accountant</option>
</select></td>
  </tr>
  <tr>
  <td width="78"><strong>Username:</strong></td>
    <td><input type="text" name="userid" /></td>
  </tr>
  <tr>
  <td width="78"><strong>Password:</strong></td>
    <td><input type="password" name="pwd" /></td>
  </tr>
  <tr>
  <td width="78"><strong>Full Name:</strong></td>
    <td><input type="text" name="name" /></td>
  </tr>
  <tr>
  <td width="78"><strong>Company:</strong></td>
    <td><input type="text" name="coy" /></td>
  </tr>
  <tr>
  <td width="78"><strong>Account No:</strong></td>
    <td><input type="text" name="acc" /></td>
  </tr>
  
</table>
<br /><br />
<input type="submit" value="Create Account"/>
</form>

</body>
</html> 