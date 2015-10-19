<html>
<head>
<title>Bag Details</title>

<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php
include("settings.inc.php");
include("menu.inc.php");
echo "<br />" . "<br />" . "<br />";
$result = mysql_query("SELECT DISTINCT date_received FROM parcel ORDER BY date_received DESC");

echo "<table width='70%' border='0' align='center'>
<tr>
<th><div align='center'>Date</th>
<th><div align='center'>LHR</th>
<th><div align='center'>SIN</th>
<th><div align='center'>DXB</th>
<th><div align='center'>KHZ</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  $datef=date("D j F, Y", strtotime($row['date_received']));
  $date=$row['date_received'];
  $service = $row['ID'];
  echo "<tr>";
  echo "<td>" . $datef . "</td>";
  echo '<td><div align="center"><a href="bagdetails.php?destn_code=' . LHR . '&date=' . $date .'">' . LHR . "</a></td>";  
  echo '<td><div align="center"><a href="bagdetails.php?destn_code=' . SIN . '&date=' . $date .'">' . SIN . "</a></td>";
  echo '<td><div align="center"><a href="bagdetails.php?destn_code=' . DXB . '&date=' . $date .'">' . DXB . "</a></td>";
  echo '<td><div align="center"><a href="bagdetails.php?destn_code=' . KHZ . '&date=' . $date .'">' . KHZ . "</a></td>";
  
  echo "</tr>";
  }
echo "</table>";



mysql_close($con);
?>