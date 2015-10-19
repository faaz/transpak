<?php
$q=$_GET["q"];

include("settings.inc.php");

$sql="SELECT * FROM parcel WHERE hawb = '".$q."'";

$result = mysql_query($sql);

$row = mysql_fetch_array($result);

$sender = mysql_query("SELECT * FROM sender_acc WHERE account='$row[sender_acc]'");  
$sender_row = mysql_fetch_array($sender);

?>		
		
<form name="parcel" action="edited.php?hawb=<?php echo $row['hawb'] ?>" method="post">

		<h3 class="mandcap">Booking Details</h3>
  <table align="center">
			<tr>
				<!-- mandatory -->
				<td><strong>Account</strong></td>
				<td><input type='text' value="<?php echo $row['sender_acc'] ?>" name='sender_acc' size='20'/></td>
                                <td><strong>Destination Code:</strong></td>
                                <td><select id='service' name='destn_code' style='font-weight: bold' >
                                <option value="<?php echo $row['destn_code'] ?>"><?php echo $row['destn_code'] ?></option>
							<option 
								value='LHR'>LHR</option>
							<option 
								value='SIN'>SIN</option>
							<option 
								value='DXB'>DXB</option>
							<option 
								value='KHZ'>KHZ</option>
						</select></td>
				<td><strong>Service:</strong></td>
                <td><select id='service' name='service' style='font-weight: bold' >
							<option value="<?php echo $row['service'] ?>"><?php echo $row['service'] ?></option>
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
				<td><strong>Date:</strong></td>
				<td colspan='4'><input type="text" name="date_received" value="<?php echo $row['date_received'] ?>"/>	<script language="JavaScript">
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
<table align="center">

<tr>
				<!-- mandatory -->
				<td width="85"><strong>Company</strong></td>
				<td width="245"><input type='text' value="<?php echo $row['s_company'] ?>" name='s_company' size='43'/></td>
				<td width="85" align="right">Contact</td>
				<td width="156"><input type='text' value="<?php echo $row['sender'] ?>" name='sender' size='31'/></td> 
	</tr>
			<tr>
				<!-- mandatory -->
				<td><strong>Address Line 1</strong></td>
				<td colspan='3'><input type='text' value="<?php echo $row['s_address1'] ?>" name='s_address1' size='100'/></td>
			</tr>
			<tr>
				<td>Address Line 2</td>
				<td ><input type='text' value="<?php echo $row['s_address2'] ?>" name='s_address2' size='43'/></td>
				<td  align="right"><strong>ID/NTN No.</strong></td>
				<td ><input type='text' value="<?php echo $row['id_ntn'] ?>" name='id_ntn' size='31'/></td>
                
			</tr>
            <tr>
				<td><strong>City</strong></td>
				<td width="250"><input type='text' value="<?php echo $row['s_city'] ?>" name='s_city' size='43'/></td>

				<!-- mandatory -->
				<td width="76" align="right"><strong>Postcode</strong></td>
				<td width="156"><input type='text' value="<?php echo $row['s_pc'] ?>" name='s_pc' size='31'/></td>
			</tr>
			<tr>
				<!-- mandatory -->
				<td><strong>Country</strong></td>
				<td><input type='text' value="<?php echo $row['s_country'] ?>" name='s_country' size='43'/></td>

				<td align="right">Telephone</td>
				<td><input type='text' value="<?php echo $row['s_tel'] ?>" name='s_tel' size='31'/></td>
			</tr>

				
			
  </table>
        
        
  <h3 class="mandcap">Consignee  Details</h3>
		<table align="center">

<tr>
				<!-- mandatory -->
				<td width="85"><strong>Company</strong></td>
				<td width="245"><input type='text' value="<?php echo $row['company'] ?>" name='company' size='43'/></td>
				<td width="85" align="right">Contact</td>
				<td width="156"><input type='text' value="<?php echo $row['contact'] ?>" name='contact' size='31'/></td> 
			</tr>
			<tr>
				<!-- mandatory -->
				<td><strong>Address Line 1</strong></td>
				<td colspan='3'><input type='text' value="<?php echo $row['address_line_1'] ?>" name='address_line_1' size='100'/></td>
			</tr>
			<tr>
				<td>Address Line 2</td>
				<td colspan='3'><input type='text' value="<?php echo $row['address_line_2'] ?>" name='address_line_2' size='100'/></td>
		  </tr>            
<tr>
				<td><strong>City</strong></td>
				<td width="250"><input type='text' value="<?php echo $row['s_city'] ?>" name='s_city' size='43'/></td>

				<!-- mandatory -->
				<td width="76" align="right"><strong>Postcode</strong></td>
				<td width="156"><input type='text' value="<?php echo $row['s_pc'] ?>" name='s_pc' size='31'/></td>
			</tr>
			<tr>
				<!-- mandatory -->
				<td><strong>Country</strong></td>
				<td><input type='text' value="<?php echo $row['s_country'] ?>" name='s_country' size='43'/></td>

				<td align="right">Telephone</td>
				<td><input type='text' value="<?php echo $row['s_tel'] ?>" name='s_tel' size='31'/></td>
			</tr>

				
			
  </table>

		<h3 class="mandcap">Package Details</h3>
  <table width="625" align="center">
			<tr>
				<!-- mandatory -->
				<td width="124"><strong>Number of Pieces:</strong></td>
				<td width="108"><input type='text' value="<?php echo $row['number_pieces'] ?>" name='number_pieces' size='15'/></td>
			  <td width="98"><strong>Bag Number:</strong></td>
                <td width="121"><input type='text' value="<?php echo $row['bag_no'] ?>" name='bag_no' size='17'/></td>		

				<!-- mandatory -->
				<td width="102"><strong>Total Weight:</strong></td>
				<td width="109" colspan='3'><input type='text' value="<?php echo $row['weight'] ?>" name='weight' size='17'/></td>
			</tr>				
<tr>
					<td>Dimensions:</td>
					<td colspan='5'>
						<table>
							<tr>
								
								
								<th>Length</th>
								<th>Width</th>
								<th>Height</th>
							</tr>

								<tr>
																		
									<td><input type="text" name="length" value="<?php echo $row['length'] ?>"  size='8'/></td>
									<td><input type="text" name="width" value="<?php echo $row['width'] ?>"  size='8'/></td>
									<td><input type="text" name="height" value="<?php echo $row['height'] ?>" size='8'/></td>
								</tr>
						</table>
					</td>
				</tr>			
			<tr>
				<td>Description:</td>
				<td colspan='5'><input type='text' value="<?php echo $row['description'] ?>" name='description' size='100'/></td>
			</tr>
			<tr>
				<!-- mandatory -->
				<td><strong>Value:</strong></td>
				<td><input type='text' value="<?php echo $row['value'] ?>" name='value' size='15'/></td>
				<!-- mandatory -->
		    <td><strong>Currency:</strong></td>
				<td><input type='text' value="<?php echo $row['currency'] ?>" name='currency' size='17'/></td>

				<!-- mandatory -->
				<td><strong>Value:</strong></td>
				
					<td><select name='hv_lv' style='font-weight:bold'  />
					  <option value="<?php echo $row['hv_lv'] ?>"><?php echo $row['hv_lv'] ?></option>
                      <option value='HV'>HV</option>
						<option value='LV'>LV</option>							
						</select>
					</td>
				

				
			</tr>
			<tr>
				<td>Notes:</td>
				<td colspan='5'><input type='text' value="<?php echo $row['notes'] ?>" name='notes' size='100'/></td>
			</tr>
		</table>
	  <h3 class="mandcap">Charges</h3>
<table width="620" align="center" style="text-align:right;">
			<tr>
				<!-- mandatory -->
				<td width="69" align="left"><strong>Amount</strong></td>
				<td width="50"><input type='text' value="<?php echo $row['amount'] ?>" name='amount' size='10'/></td>
				<td width="89"><strong>Special</strong></td>
              <td width="75"><input type='text' value="<?php echo $row['special_charges'] ?>" name='special_charges' size='10'/></td>
				<td width="83"><strong>Other</strong></td>
      <td width="68"><input type='text' value="<?php echo $row['other'] ?>" name='other' size='10'/></td>		

				<!-- mandatory -->
			  <td width="79"><strong>GST</strong></td>
			  <td width="71" colspan='3'><input type='text' value="<?php echo $row['gst'] ?>" name='gst' size='10'/></td>
			</tr>
            </table>        
        <br /><br />
  <input type="submit" value="Edit Shipment"/>
</form>




<?php
mysql_close($con);
?> 