<?php

  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
		
			  		$tmpName = $_FILES["file"]["tmp_name"];

					$file = fopen($tmpName,"r");

					include("settings.inc.php");
					
					$datetime=date('Y-m-d H:i:s');

					while($row = fgetcsv($file))
  						{
	  						if($row[0]!= "HAWB")
							{
							
	  						$sql="INSERT INTO tracking (hawb, date_time, status, location)
							VALUES
							('$row[0]','$datetime','$row[1]','$row[2]')";
	  
	  						if (!mysql_query($sql,$con))
  								{
  									die('Error: ' . mysql_error());
  								}
							}
  						}
  
					mysql_close($con);
	

    }


?> 