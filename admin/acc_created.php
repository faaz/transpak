<html>
<body>

<?php

include("settings.inc.php");
$password=$_POST['pwd']; 
$enc=md5($password);
$sql="INSERT INTO user (user_name, user_pass, type, acc_no, full_name, company)
VALUES
('$_POST[userid]','$enc','$_POST[usertype]','$_POST[acc]','$_POST[name]','$_POST[coy]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "User Created";

mysql_close($con);
include("menu.inc.php");
?> 



</body>
</html> 