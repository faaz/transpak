<?php
$con = mysql_connect("mysql12.000webhost.com","a6074651_froot","paragon44");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a6074651_tpedb", $con);

date_default_timezone_set("Asia/Karachi");

?>