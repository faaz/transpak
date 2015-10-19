<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/hawb.css" />
</head>
<?php
$q=$_GET["q"];
include("settings.inc.php");

$sql="SELECT * FROM parcel WHERE hawb = '".$q."'";

$result = mysql_query($sql);

$row = mysql_fetch_array($result);
?>
<body>
<div class="wrapper">
<div class="leftcol">


<div style="margin-left:200px; margin-top: 110px; text-align:center; width:110px; height:18px;">
<?php echo $row['s_country']; ?>
</div>

<div style="margin-left:60px; margin-top: 18px; width:110px; float:left; height:18px;">
<?php echo date("d/m/Y",strtotime($row['date_received'])); ?>
</div>

<div style="margin-left:139px; margin-top: 18px; width:90px; float:left; height:18px;">
<?php echo $row['sender_acc']; ?>
</div>

<div style="margin-left:90px; margin-top: 16px; width:110px; float:left; height:18px;">
<?php echo $row['id_ntn']; ?>
</div>

<div style="margin-left:109px; margin-top: 16px; width:90px; float:left; height:18px;">
<?php echo $row['notes']; ?>
</div>

<div style="margin-left:60px; margin-top: 15px; width:200px; float:left; height:18px;">
ABCD
</div>

<div style="margin-left:100px; margin-top: 15px; width:10px; float:left; height:18px;">

</div>

<div style="margin-left:80px; margin-top: 11px; width:200px; float:left; height:18px;">
<?php echo $row['sender']; ?>
</div>

<div style="margin-left:100px; margin-top: 10px; width:10px; float:left; height:18px;">

</div>

<div style="margin-left:60px; margin-top: 12px; width:200px; float:left; height:18px;">
<?php echo $row['s_address1']; ?>
</div>

<div style="margin-left:100px; margin-top: 12px; width:10px; float:left; height:18px;">

</div>

<div style="margin-left:60px; margin-top: 11px; width:200px; float:left; height:15px;">
<?php echo $row['s_address2']; ?>
</div>

<div style="margin-left:100px; margin-top: 15px; width:10px; float:left; height:14px;">

</div>

<div style="margin-left:60px; margin-top: 11px; width:150px; float:left; height:18px;">
<?php echo $row['s_city']; ?>
</div>

<div style="margin-left:60px; margin-top: 15px; width:10px; float:left; height:14px;">

</div>

<div style="margin-left:60px; margin-top: 11px; width:150px; float:left; height:18px;">
<?php echo $row['s_country']; ?>
</div>

<div style="margin-left:98px; margin-top: 11px; width:90px; float:left; height:18px;">
<?php echo $row['s_pc']; ?>
</div>

<div style="margin-left:60px; margin-top: 11px; width:150px; float:left; height:18px;">
<?php echo $row['s_tel']; ?>
</div>

<div style="margin-left:100px; margin-top: 15px; width:10px; float:left; height:14px;">

</div>

<div style="margin-left:20px; margin-top: 130px; width:340px; float:left; height:18px;">
<?php echo $row['description']; ?>
</div>

</div>

<div class="rightcol">

<div style="margin-left:175px; margin-top: 70px; width:235px; text-align:center; height:18px;">
<?php echo $row['hawb']; ?>
</div>
<div style="margin-left:2px; margin-top: 23px; text-align:center; width:107px; height:18px;">
<?php echo $row['country']; ?>
</div>

<div style="margin-left:70px; margin-top: 18px; width:200px; float:left; height:18px;">
<?php echo $row['company']; ?>
</div>

<div style="margin-left:100px; margin-top: 18px; width:10px; float:left; height:18px;">

</div>

<div style="margin-left:100px; margin-top: 17px; width:180px; float:left; height:18px;">
<?php echo $row['contact']; ?>
</div>

<div style="margin-left:100px; margin-top: 17px; width:10px; float:left; height:18px;">

</div>

<div style="margin-left:70px; margin-top: 15px; width:210px; float:left; height:18px;">
<?php echo $row['address_line_1']; ?>
</div>

<div style="margin-left:100px; margin-top: 15px; width:10px; float:left; height:18px;">

</div>

<div style="margin-left:70px; margin-top: 11px; width:220px; float:left; height:15px;">
<?php echo $row['address_line_2']; ?>
</div>

<div style="margin-left:100px; margin-top: 15px; width:10px; float:left; height:14px;">

</div>

<div style="margin-left:70px; margin-top: 41px; width:170px; float:left; height:18px;">
<?php echo $row['city']; ?>
</div>

<div style="margin-left:60px; margin-top: 45px; width:10px; float:left; height:14px;">

</div>

<div style="margin-left:70px; margin-top: 10px; width:150px; float:left; height:18px;">
<?php echo $row['country']; ?>
</div>

<div style="margin-left:85px; margin-top: 10px; width:90px; float:left; height:18px;">
<?php echo $row['postcode']; ?>
</div>

<div style="margin-left:70px; margin-top: 12px; width:180px; float:left; height:18px;">
<?php echo $row['telephone']; ?>
</div>

<div style="margin-left:100px; margin-top: 16px; width:10px; float:left; height:14px;">

</div>

<div style="margin-left:7px; margin-top: 43px; width:100px; float:left; text-align:center; height:18px;">
<?php echo $row['number_pieces']; ?>
</div>

<div style="margin-left:1px; margin-top: 47px; width:50px; float:left; height:14px; text-align:center;">
<?php echo $row['weight']; ?>
</div>

<div style="margin-left:50px; margin-top: 47px; width:50px; float:left; height:14px; text-align:center;">
<?php echo $row['length']; ?>
</div>

<div style="margin-left:1px; margin-top: 47px; width:50px; float:left; height:14px; text-align:center;">
<?php echo $row['width']; ?>
</div>

<div style="margin-left:1px; margin-top: 47px; width:90px; float:left; height:14px; text-align:center;">
<?php echo $row['height']; ?>
</div>

<div style="margin-left:107px; margin-top: 10px; width:100px; float:left; height:14px; text-align:center;">
<?php echo $row['value']; ?>
</div>

<div style="margin-left:108px; margin-top: 10px; width:80px; float:left; height:14px; text-align:center;">

</div>

<div style="margin-left:270px; margin-top: 95px; width:120px; float:left; height:14px; text-align:right;">
<?php echo $row['amount']; ?>
</div>

<div style="margin-left:270px; margin-top: 10px; width:120px; float:left; height:14px; text-align:right;">
<?php echo $row['special_charges']; ?>
</div>

<div style="margin-left:270px; margin-top: 10px; width:120px; float:left; height:14px; text-align:right;">
<?php echo $row['other']; ?>
</div>

<div style="margin-left:270px; margin-top: 10px; width:120px; float:left; height:14px; text-align:right;">
<?php echo $row['gst']; ?>
</div>

<div style="margin-left:270px; margin-top: 10px; width:120px; float:left; height:14px; text-align:right;">
<?php echo $row['amount']+$row['special_charges']+$row['other']+$row['gst']; ?>
</div>

</div>






</div>
</body>
</html>