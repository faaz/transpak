<?php

include("settings.inc.php");


$result = mysql_query("SELECT * FROM parcel WHERE hawb='asdasdf'");

echo mysql_affected_rows();

$row = mysql_fetch_array($result);



$sql="UPDATE parcel SET hv_lv='LV'";


if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
echo "Shipment details added successfully.";

mysql_close($con)
?>