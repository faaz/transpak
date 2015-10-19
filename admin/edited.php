<html>

<head>
<title>Parcel Details Edited</title>

<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php
include("menu.inc.php");
?>
<br /><br /><br />
<?php

include("settings.inc.php");
$date=date('Y-m-d');
$datetime=date('Y-m-d H:i:s');


$result = mysql_query("SELECT sr_no FROM parcel WHERE date_received='$date'");
$row = mysql_fetch_array($result);
if($row)
{
$serial=1+ (max($row));
}
else
$serial=1;


$sql="UPDATE parcel SET service='$_POST[service]', date_received='$_POST[date_received]', company='$_POST[company]', contact='$_POST[contact]', address_line_1='$_POST[address_line_1]', address_line_2='$_POST[address_line_2]', city='$_POST[city]', country='$_POST[country]', postcode='$_POST[postcode]', telephone='$_POST[telephone]', number_pieces='$_POST[number_pieces]', weight='$_POST[weight]', hv_lv='$_POST[hv_lv]', description='$_POST[description]', value='$_POST[value]', currency='$_POST[currency]', bag_no='$_POST[bag_no]', notes='$_POST[notes]', sender_acc='$_POST[sender_acc]', sender='$_POST[sender]', s_company='$_POST[s_company]', s_address1='$_POST[s_address1]', s_address2='$_POST[s_address2]', s_city='$_POST[s_city]', s_country='$_POST[s_country]', s_pc='$_POST[s_pc]', s_tel='$_POST[s_tel]', id_ntn='$_POST[id_ntn]', destn_code='$_POST[destn_code]', length='$_POST[length]', width='$_POST[width]', height='$_POST[height]', amount='$_POST[amount]', special_charges='$_POST[special_charges]', other='$_POST[other]', gst='$_POST[gst]' WHERE hawb='$_GET[hawb]'";
//('786385','$_POST[hawb]','$_POST[service]','$serial','$date','$_POST[company]','$_POST[contact]','$_POST[address_line_1]','$_POST[address_line_2]','$_POST[city]','$_POST[country]','$_POST[postcode]','$_POST[telephone]','$_POST[number_pieces]','$_POST[weight]','$_POST[hv_lv]','$_POST[description]','$_POST[value]','$_POST[currency]','$_POST[bag_no]','$_POST[notes]','$_POST[sender]','$_POST[s_address1]','$_POST[s_address2]','$_POST[s_comment]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
echo "Parcel details edited.";

mysql_close($con)
?>