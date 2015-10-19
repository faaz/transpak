<html>

<head>
<title>Tracking Status Updated</title>

<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php
include("menu.inc.php");
?>
<br /><br /><br />
<?php

include("settings.inc.php");

$datetime=date('Y-m-d H:i:s');

$sql="INSERT INTO tracking VALUES ('$_POST[hawb]','$datetime','$_POST[status]','$_POST[location]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
echo "Tracking status updated.";


mysql_close($con)
?>
</body>
</html>