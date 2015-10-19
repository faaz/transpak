<?php
include("menu.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>Export Consignment Details for Remote Booking</title>

	<!-- link calendar files  -->
	<script language="JavaScript" src="calendar_db.js"></script>
	<link rel="stylesheet" href="calendar.css">
	<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
<body>

<h2>Generate Customer Invoice</h2>

<form name="date" action="inv.php" method="post">

<table width="300" border="0" cellpadding="2" cellspacing="1">
<tr>
<td>
<strong>Account number:</strong>
</td>
                                <td><select name="account" id="account" style='font-weight: bold' >
<option value="">Select</option>

<?php
include("settings.inc.php");

    $query = mysql_query("SELECT account FROM sender_acc");
	while($show = mysql_fetch_array($query)) {
	  echo '<option value="'.$show['account'].'">'.$show['account'].'</option>';
    }
	?></select></td>
</tr>
  <tr>
    <td width="116" align="left"><strong>Start Date:</strong></td>
    <td width="175" align="left"><input type="text" name="startdate" size='9'/>	<script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'date',
		// input name
		'controlname': 'startdate'
	});

	</script></td>
  </tr>
  <tr>
  <td width="116" align="left"><strong>End Date:</strong></td>
    <td align="left"><!-- calendar attaches to existing form element -->
	<input type="text" name="enddate" size='9'/>
	<script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'date',
		// input name
		'controlname': 'enddate'
	});

	</script></td>
  </tr>
	<br /><br />
  </table>
  <br />
<input type="submit" value="Generate Invoice"/>
</form>

</body>
</html>
