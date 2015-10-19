<html>

<head>
<title>Parcel Details Added</title>

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

$serial=1;
$result = mysql_query("SELECT sr_no FROM parcel WHERE date_received='$_POST[date_received]' && destn_code='$_POST[destn_code]'");

while($row = mysql_fetch_array($result))
{
$serial++;
}


$sql="INSERT INTO parcel (account, hawb, service, sr_no, date_received, company, contact, address_line_1, address_line_2, city, country, postcode, telephone, number_pieces, weight, hv_lv, description, value, currency, bag_no, notes, sender_acc, s_company, sender, s_address1, s_address2, s_city, s_country, s_pc, s_tel, destn_code, length, width, height, amount, special_charges, other, gst, id_ntn)
VALUES
('9211788','$_POST[hawb]','$_POST[service]','$serial','$_POST[date_received]','$_POST[company]','$_POST[contact]','$_POST[address_line_1]','$_POST[address_line_2]','$_POST[city]','$_POST[country]','$_POST[postcode]','$_POST[telephone]','$_POST[number_pieces]','$_POST[weight]','$_POST[hv_lv]','$_POST[description]','$_POST[value]','$_POST[currency]','$_POST[bag_no]','$_POST[notes]','$_POST[users]','$_POST[s_company]','$_POST[sender]','$_POST[s_address1]','$_POST[s_address2]','$_POST[s_city]','$_POST[s_country]','$_POST[s_pc]','$_POST[s_tel]','$_POST[destn_code]','$_POST[length]','$_POST[width]','$_POST[height]','$_POST[amount]','$_POST[special_charges]','$_POST[other]','$_POST[gst]','$_POST[id_ntn]' )";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
	  $hawb= $_POST[hawb];
echo "Parcel details added successfully.<br/><br/><br/>";

echo "<a href='hawb.php?q=" . $hawb ."' target='_blank'>Airway Bill</a><br/><br/>";
echo "<a href='gift_invoice.php?TrackNbrs=" . $hawb ."' target='_blank'>GIFT INVOICE</a>";
  }

$sql="INSERT INTO tracking VALUES ('$_POST[hawb]','$datetime','Shipment picked up','Karachi')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
mysql_close($con)
?>
</body>
</html>