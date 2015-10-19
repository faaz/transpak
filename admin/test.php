<?php

/*
note:
this is just a static test version using a hard-coded countries array.
normally you would be populating the array out of a database

the returned xml has the following structure
<results>
	<rs>foo</rs>
	<rs>bar</rs>
</results>
*/
include("settings.inc.php");

$sql = "SELECT * FROM parcel";

$result = mysql_query($sql);

//$aUsers = mysql_fetch_array($result);
while ($rowr = mysql_fetch_row($result)) {


$csv_company .= $rowr[5].",";

$csv_contact .= $rowr[6].",";

$csv_address1 .= $rowr[7].",";

$csv_address2 .= $rowr[8].",";

$csv_city .= $rowr[9].",";

$csv_country .= $rowr[10].",";

$csv_postcode .= $rowr[11].",";

$csv_telephone .= $rowr[12].",";

}

{$company = explode(",",$csv_company);}

$contact = explode(",",$csv_contact);

$address1 = explode(",",$csv_address1);

$address2 = explode(",",$csv_address2);

$city = explode(",",$csv_city);

$country = explode(",",$csv_country);

$postcode = explode(",",$csv_postcode);

$telephone = explode(",",$csv_telephone);

	
	$input = strtolower( $_GET['input'] );
	$len = strlen($input);
	
	
	$aResults = array();

	
	if ($len)
	{
		for ($i=0;$i<count($company);$i++)
		{
			// had to use utf_decode, here
			// not necessary if the results are coming from mysql
			//
			if($_GET['field']=="company"){
			if (strtolower(substr(utf8_decode($company[$i]),0,$len)) == $input)
				$aResults[] = array( "id"=>($i+1) ,"value"=>htmlspecialchars($company[$i]), "info"=>htmlspecialchars($aInfo[$i]) );}
			if($_GET['field']=="contact"){
			if (strtolower(substr(utf8_decode($contact[$i]),0,$len)) == $input)
				$aResults[] = array( "id"=>($i+1) ,"value"=>htmlspecialchars($contact[$i]), "info"=>htmlspecialchars($aInfo[$i]) );}
			if($_GET['field']=="address1"){
			if (strtolower(substr(utf8_decode($address1[$i]),0,$len)) == $input)
				$aResults[] = array( "id"=>($i+1) ,"value"=>htmlspecialchars($address1[$i]), "info"=>htmlspecialchars($aInfo[$i]) );}
			if($_GET['field']=="address2"){
			if (strtolower(substr(utf8_decode($address2[$i]),0,$len)) == $input)
				$aResults[] = array( "id"=>($i+1) ,"value"=>htmlspecialchars($address2[$i]), "info"=>htmlspecialchars($aInfo[$i]) );}
			if($_GET['field']=="city"){
			if (strtolower(substr(utf8_decode($city[$i]),0,$len)) == $input)
				$aResults[] = array( "id"=>($i+1) ,"value"=>htmlspecialchars($city[$i]), "info"=>htmlspecialchars($aInfo[$i]) );}
			if($_GET['field']=="country"){
			if (strtolower(substr(utf8_decode($country[$i]),0,$len)) == $input)
				$aResults[] = array( "id"=>($i+1) ,"value"=>htmlspecialchars($country[$i]), "info"=>htmlspecialchars($aInfo[$i]) );}
			if($_GET['field']=="postcode"){
			if (strtolower(substr(utf8_decode($postcode[$i]),0,$len)) == $input)
				$aResults[] = array( "id"=>($i+1) ,"value"=>htmlspecialchars($postcode[$i]), "info"=>htmlspecialchars($aInfo[$i]) );}
			if($_GET['field']=="telephone"){
			if (strtolower(substr(utf8_decode($telephone[$i]),0,$len)) == $input)
				$aResults[] = array( "id"=>($i+1) ,"value"=>htmlspecialchars($telephone[$i]), "info"=>htmlspecialchars($aInfo[$i]) );	}		
			//if (stripos(utf8_decode($aUsers[$i]), $input) !== false)
			//	$aResults[] = array( "id"=>($i+1) ,"value"=>htmlspecialchars($aUsers[$i]), "info"=>htmlspecialchars($aInfo[$i]) );
		}
	}
	
	
	
	
	
	header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header ("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
	header ("Pragma: no-cache"); // HTTP/1.0
	
	
	

	
		header("Content-Type: text/xml");

		echo "<?xml version=\"1.0\" encoding=\"utf-8\" ?><results>";
		//if($aResults)
		//{
		for ($i=0;$i<count($aResults);$i++)
		{
			echo "<rs id=\"".$aResults[$i]['id']."\" info=\"".$aResults[$i]['info']."\">".$aResults[$i]['value']."</rs>";
		}
		/*}
		if($aContact)
		{
		for ($i=0;$i<count($aContact);$i++)
		{
			echo "<rs id=\"".$aContact[$i]['id']."\" info=\"".$aContact[$i]['info']."\">".$aContact[$i]['value']."</rs>";
		}
		}
		if($aAddress1)
		{
		for ($i=0;$i<count($aAddress1);$i++)
		{
			echo "<rs id=\"".$aAddress1[$i]['id']."\" info=\"".$aAddress1[$i]['info']."\">".$aAddress1[$i]['value']."</rs>";
		}
		}*/
		echo "</results>";
	
?>