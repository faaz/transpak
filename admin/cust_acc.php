<html>

<head>
<title>Customer Account Created</title>

<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php
include("menu.inc.php");
?>
<br /><br /><br />
<?php

include("settings.inc.php");



$sql="INSERT INTO sender_acc VALUES ('$_POST[account]','$_POST[s_company]','$_POST[name]','$_POST[s_address_1]','$_POST[s_address_2]','$_POST[s_city]','$_POST[s_country]','$_POST[s_pc]','$_POST[s_tel]','$_POST[gst_no]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
echo "Account Cerated.";


mysql_close($con)
?>
</body>
</html>