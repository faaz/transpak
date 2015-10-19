<?php
include("menu.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>Export Consignment Details for Relayer</title>

	<!-- link calendar files  -->
	<script language="JavaScript" src="calendar_db.js"></script>
	<link rel="stylesheet" href="calendar.css">
	<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
<body>

<br /><br /><br />
<h2>Generate Relayer File</h2>

<form name="date" action="relayer_csv.php" method="post">

<table width="300" border="1" align="center" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
  <tr>
    <td width="116" align="left"><strong>Destination Code:</strong></td>
    <td width="175" align="left"><select id='service' name='destn_code' style='font-weight: bold' >
							<option 
								value='LHR'>LHR</option>
							<option 
								value='SIN'>SIN</option>
							<option 
								value='DXB'>DXB</option>
							<option 
								value='KHZ'>KHZ</option>
	  </select></td>
  </tr>
  <tr>
  <td width="116" align="left"><strong>Booking Date:</strong></td>
    <td align="left"><!-- calendar attaches to existing form element -->
	<input type="text" name="date_received" size='9'/>
	<script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'date',
		// input name
		'controlname': 'date_received'
	});

	</script></td>
  </tr>
	<br /><br />
  </table>
  <br />
<input type="submit" value="Generate CSV"/>
</form>

</body>
</html>
