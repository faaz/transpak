<?php

include("settings.inc.php");

$result = mysql_query("SELECT * FROM tracking
WHERE hawb='92111168'");

$row = mysql_fetch_array($result);
	

echo "<table width='100%' border='0' align='center'>
<tr>
<th bgcolor='#e4e4e4'><div align='center'>Date and time</th>
<th bgcolor='#e4e4e4'><div align='center'>Status</th>
<th bgcolor='#e4e4e4'><div align='center'>Service Area Location</th>
<th bgcolor='#e4e4e4'><div align='center'>Status</th>
</tr>";

do
  {
$s=date("D, j F Y - g:i a", strtotime($row['date_time']));	  
  echo "<tr>";
  echo "<td><div align='center'>" . $s . "</td>";
  echo "<td><div align='center'>" . $row['status'] . "</td>";
  echo "<td><div align='center'>" . $row['location'] . "</td>";
  echo "<td><div align='center'>" . $row['hawb'] . "</td>";
  echo "</tr>";
  }

while($row = mysql_fetch_array($result));

  
echo "</table>";

?>

<?php
$q=$_GET["q"];

include("settings.inc.php");

$sql="SELECT * FROM parcel WHERE hawb = 4501163";
//'$_POST[hawb]'
$result = mysql_query($sql);

$row = mysql_fetch_array($result);

$sender = mysql_query("SELECT * FROM sender_acc WHERE account='$row[sender_acc]'");  
$sender_row = mysql_fetch_array($sender);

?>

<table width="100%" border="1" cellpadding="5">
  <tr>
    <th scope="col">FROM</th>
    <th scope="col">TO</th>
    <th scope="col">Shipment Information</th>
  </tr>
  <tr>
    <td><?php echo $sender_row['sender'] ?></td>
    <td><?php echo $row['company'] ?></td>
    <td>Ship date: <?php echo date("D, j F Y", strtotime($row['date_received'])) ?></td>
  </tr>
  <tr>
    <td><?php echo $sender_row['s_address1'] ?></td>
    <td><?php if ($row['contact']) echo $row['contact']; else echo $row['address_line_1'] . "," . $row['address_line_2'] ?></td>
    <td>Pieces: <?php echo $row['number_pieces'] ?></td>
  </tr>
  <tr>
    <td><?php echo $sender_row['s_address2'] ?></td>
    <td><?php if ($row['contact']) echo $row['address_line_1'] . "," . $row['address_line_2']; else echo $row['city'] . ", " . $row['postcode'] ?></td>
    <td>Total Weight: <?php echo $row['weight'] ?> KGs</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php if ($row['contact']) echo $row['city'] . ", " . $row['postcode']; else echo $row['country'] ?></td>
    <td>Description: <?php echo $row['description'] ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php if ($row['contact']) echo $row['country'] ?>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
