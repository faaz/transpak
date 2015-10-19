<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'upg';
$table = 'parcel';
$file = 'CSV_Manifest';

$link = mysql_connect($host, $user, $pass) or die("Can not connect." . mysql_error());
mysql_select_db($db) or die("Can not connect.");



$values = mysql_query("SELECT * FROM parcel WHERE date_received='$_POST[date_received]' && destn_code='$_POST[destn_code]' ORDER BY sr_no");
if (mysql_affected_rows()!=0)
{
while ($rowr = mysql_fetch_row($values)) {
for ($j=0;$j<24;$j++) {
$csv_output .= str_replace(",","",$rowr[$j]).",";
}
$csv_output .= "\n";
}
$filename = $file."_".$_POST[date_received];
header("Content-type: application/vnd.ms-excel");
header("Content-disposition: csv" . date("d-m-Y") . ".csv");
header( "Content-disposition: filename=".$filename.".csv");
print $csv_output;
}
else echo "There are no bookings for ".$_POST[destn_code]. " on " .$_POST[date_received];
//exit;
?>
