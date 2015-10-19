<?php 
//include("loginc.php"); 


?>
<html>
<head>

<title>Create Customer Account</title>

<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php
include("menu.inc.php");
?>
<h2>Create Customer Account</h2>
<br />
<form action="destination_added.php" method="post">
<table width="300" border="0" cellpadding="0" cellspacing="1">
  <tr>
    <td width="103"><strong>Destination Code:</strong></td>
    <td width="194"><input type="text" name="destination" /></td>
  </tr>

  
</table>
<br /><br />
<input type="submit" value="Add Destination"/>
</form>

</body>
</html> 