<html>

<head>
<title>Add Parcel Details</title>

<link rel="stylesheet" type="text/css" href="messages.css" />
<script type="text/javascript" src="messages.js"></script>
<script type="text/javascript" src="javascript/bsn.AutoSuggest_c_2.0.js"></script>

<link rel="stylesheet" href="css/autosuggest_inquisitor.css" type="text/css" media="screen" charset="utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","index_ajax.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>
<?php
include("menu.inc.php");
?> 


		<h2>Add Parcel Details</h2>
		
<form name="parcel" action="added.php" onSubmit="return validate(this)" method="post">

		<h3 class="mandcap">Booking Details</h3>
		<table align="center">
        <tr>
				<!-- mandatory -->
				<td><strong>HAWB</strong></td>
<?php
include("settings.inc.php");

    $query = mysql_query("SELECT hawb FROM parcel WHERE hawb BETWEEN 90000100 AND 99999999 ORDER BY hawb DESC LIMIT 1");
	$show = mysql_fetch_array($query);    
?>                
				<td><input type='text' name='hawb' id="hawb" value="<?php echo $show['hawb']+1; ?>" size='13'/></td>
                <td><strong>&nbsp;&nbsp;Destination Code</strong></td>
                                <td><select name="destn_code" id="destn_code" style='font-weight: bold' >
<option value="">Select</option>

<?php
include("settings.inc.php");

    $query = mysql_query("SELECT destination FROM destn_codes");
	while($show = mysql_fetch_array($query)) {
	  echo '<option value="'.$show['destination'].'">'.$show['destination'].'</option>';
    }
	?></select></td>
				<td><strong>Service</strong></td>
                <td><select id='service' name='service' style='font-weight: bold' >
							<option value="">Select</option>
                            <option 
								value='INT'>INT</option>
							<option 
								value='DBP'>DBP</option>
							<option 
								value='R1'>R1</option>
						</select></td>		

				<!-- mandatory --> 
       	  <script language="JavaScript" src="calendar_db.js"></script>
	<link rel="stylesheet" href="calendar.css">             
				<td><strong>Date</strong></td>
				<td colspan='2'><input type="text" name="date_received" id="date_received" value="<?php echo date('Y-m-d') ?>"/>	<script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'parcel',
		// input name
		'controlname': 'date_received'
	});

	</script></td>
		  </tr>
			
			
		</table>

<h3 class="mandcap">Sender Details</h3>

<table>
			<tr>
				<!-- mandatory -->
				<td><strong>Account No:</strong></td>
				<td><select name="users" id="users" onChange="showUser(this.value)">
<option value="">Select</option>
                	<?php
					include("settings.inc.php");
$query = mysql_query("SELECT account FROM sender_acc ORDER BY account");
                    while($show = mysql_fetch_array($query)) {
	  echo '<option value="'.$show['account'].'">'.$show['account'].'</option>';
    }
	?></select></td>

				
			</tr>
            
	  </table>
<div id="txtHint">Sender details will be listed here.</div>        
        
<h3 class="mandcap">Consignee  Details</h3>
<table align="center">
			<tr>
				<!-- mandatory -->
				<td width="85"><strong>Company</strong></td>
				<td width="245"><input type='text' id="company" name='company' size='43'/></td>
				<td width="85">Contact Person</td>
				<td width="156"><input type='text' id="contact" name='contact' size='31'/></td>                
			</tr>

			<tr>
				<!-- mandatory -->
				<td><strong>Address Line 1</strong></td>
				<td colspan='3'><input type='text' id="address_line_1" name='address_line_1' size='99'/></td>
			</tr>
			<tr>
				<td>Address Line 2</td>
				<td colspan='3'><input type='text' id="address_line_2" name='address_line_2' size='99'/></td>
			</tr>
			<!--<tr>
				<td>Address Line 3:</td>
				<td colspan='3'><input type='text' name='address_line_3' id='address_line_3'
									value=''  size='100'
									 /></td>
			</tr>
			<tr>
				 mandatory -->
				<td><strong>City</strong></td>
				<td><input type='text' id="city" name='city' size='43'/></td>

				<!-- mandatory -->
				<td align="right"><strong>Postcode</strong></td>
				<td><input type='text' id="postcode" name='postcode' size='31'/></td>
			</tr>
			<tr>
				<!-- mandatory -->
				<td><strong>Country</strong></td>
				<td><input type='text' id="country" name='country' size='43'/></td>

				<td align="right">Telephone</td>
				<td><input type='text' id="telephone" name='telephone' size='31'/></td>
			</tr>
		</table>

		<h3 class="mandcap">Package Details</h3>
<table width="617" align="center">
			<tr>
				<!-- mandatory -->
				<td width="81"><strong>No. of Pieces</strong></td>
				<td width="115"><input type='text' id="number_pieces" name='number_pieces' size='15'/></td>
				<td width="90"><strong>Bag Number(s)</strong></td>
              <td width="125"><input type='text' id="bag_no" name='bag_no' size='17'/></td>		

				<!-- mandatory -->
			  <td width="40"><strong> Weight</strong></td>
			  <td width="138" colspan='3'><input type='text' id="weight" name='weight' size='14'/></td>
			</tr>

			<tr>
					<td>Dimensions</td>
					<td colspan='5'>
<table>


								<tr>
																		
									<td>Length</td><td><input type="text" name="length" id="length" value="1"  size='8'/></td>
									<td>Width</td><td><input type="text" name="width" id="width" value="1"  size='8'/></td>
									<td>Height</td><td><input type="text" name="height" id="height" value="1" size='8'/></td>
</tr>
						</table>
					</td>
		  </tr>	

			<tr>
				<td>Description</td>
				<td colspan='5'><input type='text' id="description" name='description' size='99'/></td>
			</tr>
			<tr>
				<!-- mandatory -->
				<td><strong>Value</strong></td>
				<td><input type='text' name='value' id="value" size='15'/></td>
				<!-- mandatory -->
				<td align="right"><strong>Currency</strong></td>
				<td><input type='text' name='currency' id="currency" size='17'/></td>

				<!-- mandatory -->
				<td><strong>Value</strong></td>
				
					<td><select name='hv_lv' id="hv_lv" style='font-weight:bold'/>
							<option value="">Select</option>
                            <option 
								value='LV'>Low</option>                    
							<option 
								value='HV'>High</option>
						</select>
					</td>
				

				
			</tr>
			<tr>
				<td>Notes</td>
				<td colspan='5'><input type='text' name='notes' id="notes" size='99'/></td>
			</tr>
		</table>
        
	  <h3 class="mandcap">Charges</h3>
<table width="620" align="center" style="text-align:right;">
			<tr>
				<!-- mandatory -->
				<td width="69" align="left"><strong>Amount</strong></td>
				<td width="50"><input type='text' id="amount" name='amount' size='10'/></td>
				<td width="89"><strong>Special</strong></td>
              <td width="75"><input type='text' id="special_charges" name='special_charges' size='10'/></td>
				<td width="83"><strong>Other</strong></td>
      <td width="68"><input type='text' id="other" name='other' size='10'/></td>		

				<!-- mandatory -->
			  <td width="79"><strong>GST</strong></td>
			  <td width="71" colspan='3'><input type='text' id="gst" name='gst' size='10'/></td>
			</tr>
            </table>
        
        <br /><br />

<input type="submit" value="Add Shipment"/>
</form>

        

</div>
</div>
</body>
</html>