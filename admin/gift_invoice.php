<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="print.css" type="text/css" media="print" />
</head>
<?php


$q=$_GET["q"];

include("settings.inc.php");

$sql="SELECT * FROM parcel WHERE hawb = $_GET[TrackNbrs]";
//'$_POST[hawb]'
$result = mysql_query($sql);

$row = mysql_fetch_array($result);

?>

<body>
<div class="print" style="width:700px;">
<a href="javascript:document.contentEditable='true';document.designMode='on';void 0" onClick="this.style.display='none';">
Click To Edit Table
</a><br/>
<center><h2><u>Gift / Performa Invoice</u></h2></center>

<table width="700px" border="1" cellpadding="5"  style="border-collapse:collapse;">

  <tr>
    <td><strong>Airway Bill No :</strong> <?php echo $row['hawb'] ?></td>
    <td><strong>Ship date:</strong> <?php echo date("D, j F Y", strtotime($row['date_received'])) ?></td>
  </tr> 
  <tr>
    <td><strong>Shipper:</strong> <?php echo $row['sender'] ?></td>
    <td><strong>Consignee:</strong> <?php echo $row['company'] ?></td>
  </tr>
  <tr>
    <td><?php echo $row['s_address1'] . ", " . $row['s_address2']?></td>
    <td><?php if ($row['contact']) echo $row['contact']; else echo $row['address_line_1'] . "," . $row['address_line_2'] ?></td>
  </tr>
  <tr>
    <td><?php echo $row['s_city'] . ", " . $row['s_country']?></td>
    <td><?php if ($row['contact']) echo $row['address_line_1'] . "," . $row['address_line_2']; else echo $row['city'] . ", " . $row['postcode'] ?></td>
  </tr>
  <tr>
	<td><?php echo $row['s_tel'] ?>&nbsp;</td>
    <td><?php if ($row['contact']) echo $row['city'] . ", " . $row['postcode']; else echo $row['country'] ?></td>    

  </tr>
</table><br/><br/>



<table id="editable" width="700" border="1" style="text-align:center; border-collapse:collapse;">
  <tr>
    <th width="45" scope="col">S. No.</th>
    <th width="66" scope="col">Qty.</th>
    <th width="317" scope="col">Description</th>
    <th width="125" scope="col">Unit Price</th>
    <th width="125" scope="col">Amount</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><strong>No Commercial Value</strong></td>
    <td><strong>Total</strong></td>
    <td>&nbsp;</td>
  </tr>
  </table>
<br/>  
<p id="editable">  The above mentioned items are unsolicited gift for consignee. The items have no commercial value and are not for resale. The above mentioned value is mentioned for customs perpose only.</p>
<p>  I certify that the above statement is true to the best of my knowledge and belief.</p><br/>
  
  
<p>  _____________________</p>
<p>  Shipper's Signature</p>
</div>
<br/><br/>


</body>
<form><input type="button" value=" Print "
onclick="window.print();return false;" /></form>
</html>