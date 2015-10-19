<html>
<head>
<title>Consignment Details Added</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include("menu.inc.php");
echo  "<br />" .  "<br />" ."<br />" . "Consignment details added." . "<br />" . "<br />";
/*if ((($_FILES["file"]["type"] == "application/csv")
|| ($_FILES["file"]["type"] == "application/vnd.ms-excel")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 20000))
  {*/
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
		
			  		$tmpName = $_FILES["file"]["tmp_name"];

					$file = fopen($tmpName,"r");

					include("settings.inc.php");

					while($row = fgetcsv($file))
  						{
	  						if($row[0]!= "Account")
							{
							$date = date(DATE_ATOM, strtotime(strtr($row[4], "/", "-")));
							$value = str_replace("/","",$row[15]); 
	  						$sql="INSERT INTO parcel (account, hawb, service, sr_no, date_received, company, contact, address_line_1, address_line_2, city, country, postcode, telephone, number_pieces, weight, hv_lv, description, value, currency, blank, bag_no, notes, notes2, notes3)
VALUES
('$row[0]','$row[1]','$row[2]','$row[3]','$date','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]','$row[13]','$row[14]','$value','$row[16]','$row[17]','$row[18]','$row[19]','$row[20]','$row[21]','$row[22]','$row[23]')";
	  
	  						if (!mysql_query($sql,$con))
  								{
  									die('Error: ' . mysql_error());
  								}
							}
  						}
  
					mysql_close($con);
	
/*    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("export_dir/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "export_dir/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "export_dir/" . $_FILES["file"]["name"];
      }*/
    }
  /*}

else
  {
  echo "Invalid file";
  }*/

//include("menu.inc.php");

?> 