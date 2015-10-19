<html>

<head>
<title>Destination Code Added</title>

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

$sql="INSERT INTO destn_codes VALUES ('$_POST[destination]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
echo "Destination Code Added.";


mysql_close($con)
?>
</body>
</html>