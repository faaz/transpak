<?php
$q=$_GET["q"];

include("settings.inc.php");

$sql="SELECT * FROM sender_acc WHERE account = '".$q."'";

$result = mysql_query($sql);

$row = mysql_fetch_array($result);

?>
  

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
        
        





<?php
mysql_close($con);
?> 