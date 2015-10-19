<html>
<head>
<title>Update Tracking Status</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include("menu.inc.php");
?>
<h2>Tracking Update</h2>
<br/>
<form action="tracking_update.php" method="post">
<table width="300" border="0" cellpadding="0" cellspacing="1">
  <tr>
    <td width="78"><strong>HAWB</strong></td>
    <td><select name="hawb" >
<option value="">Select HAWB </option>

<?php
include("settings.inc.php");

    $query = mysql_query("SELECT hawb FROM parcel ORDER BY hawb");
	while($show = mysql_fetch_array($query)) {
	  echo '<option value="'.$show['hawb'].'">'.$show['hawb'].'</option>';
    }
	?></select></td>
  </tr>
  <tr>
  <td width="78"><strong>Status</strong></td>
    <td><input type="name" name="status" size="40" /></td>
  </tr>
  <tr>
  <td width="78"><strong>Location</strong></td>
    <td><input type="text" name="location" size="40" /></td>
  </tr>
  
</table>
<br/>
<input type="submit" value="Update"/>
</form>
<br/><hr/><br/>
Upload CSV file to update tracking details.
<br/><br/><br/>

<form action="tracking_updated.php" method="post"
enctype="multipart/form-data">
<input type="file" name="file" id="file" />
<br /><br />
<input type="submit" name="submit" value="Submit" />
</form>
<?php
//include("menu.inc.php");
?>
</body>
</html> 