<html>
<head>
<title>Export Shipment Manifest</title>

<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php
include("settings.inc.php");
include("menu.inc.php");
echo "<br />" . "<br />" . "<br />";

	echo "<table width='100%' border='0' align='center'><tr><th><div align='center'>Date</th>";
	
    $query = mysql_query("SELECT destination FROM destn_codes");
	while($show = mysql_fetch_array($query)) {

echo "<th><div align='center'>".$show['destination']."</th>";

	}
echo "</tr>";
$result = mysql_query("SELECT DISTINCT date_received FROM parcel ORDER BY date_received DESC");
while($row = mysql_fetch_array($result))
  {
  $datef=date("d-m-Y", strtotime($row['date_received']));
  $date=$row['date_received'];
  $service = $row['ID'];
  echo "<tr>";
  echo "<td><div align='center'>" . $datef . "</td>";
    $query = mysql_query("SELECT destination FROM destn_codes");
	while($show = mysql_fetch_array($query)) {

echo '<td><div align="center"><a href="manifest_gen.php?destn_code=' .$show['destination'] . '&date=' . $date .'">' . $show['destination'] . "</a></td>";

	}
  
  echo "</tr>";
  }
echo "</table>";



mysql_close($con);
?>