<?php
$host = 'mysql12.000webhost.com';
$user = 'a6074651_froot';
$pass = 'paragon44';
$db = 'a6074651_tpedb';
$table = 'parcel';
$file = 'Remote_Booking';

$link = mysql_connect($host, $user, $pass) or die("Can not connect." . mysql_error());
mysql_select_db($db) or die("Can not connect.");


$values = mysql_query("SELECT * FROM parcel WHERE date_received='$_POST[date_received]' && destn_code='$_POST[destn_code]' ORDER BY sr_no");
if (mysql_affected_rows()!=0)
{
while ($rowr = mysql_fetch_row($values)) {
for ($j=0;$j<21;$j++) {
	if($j==4)
	$csv_output .= $rowr[1].",";
	
$csv_output .= str_replace(",","",$rowr[$j]).",";
}
$csv_output .= $rowr[32]."*".$rowr[33]."*".$rowr[34];
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
