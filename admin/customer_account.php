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
<form action="cust_acc.php" method="post">
<table width="300" border="0" cellpadding="0" cellspacing="1">
  <tr>
    <td width="78"><strong>Account No:</strong></td>
    <td><input type="text" name="account" /></td>
  </tr>
  <tr>
  <td width="78"><strong>Company:</strong></td>
    <td><input type="name" name="s_company" /></td>
  </tr> 
  <tr>
  <td width="78"><strong>Name:</strong></td>
    <td><input type="name" name="name" /></td>
  </tr>
  <tr>
  <td width="78"><strong>Address 1</strong></td>
    <td><input type="text" name="s_address_1" /></td>
  </tr>
  <tr>
  <td width="78"><strong>Address 2</strong></td>
    <td><input type="text" name="s_address_2" /></td>
  </tr>
  <tr>
  <td width="78"><strong>City</strong></td>
    <td><input type="text" name="s_city" /></td>
  </tr>
  <tr>
  <td width="78"><strong>Country</strong></td>
    <td><input type="text" name="s_country" /></td>
  </tr>
  <tr>
  <td width="78"><strong>Postcode</strong></td>
    <td><input type="text" name="s_pc" /></td>
  </tr>
    <tr>
  <td width="78"><strong>Contact No:</strong></td>
    <td><input type="text" name="s_tel" /></td>
  </tr>
    <tr>
  <td width="78"><strong>GST No:</strong></td>
    <td><input type="text" name="gst_no" /></td>
  </tr>
  
</table>
<br /><br />
<input type="submit" value="Create Account"/>
</form>

</body>
</html> 