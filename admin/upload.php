<html>
<head>
<title>Import Consignment Details Through CSV</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
include("menu.inc.php");
echo  "<br />" .  "<br />" ."<br />" . "Upload CSV file to import parcel details." . "<br />" . "<br />";
?>
<form action="parcel_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" />
<br />
<input type="submit" name="submit" value="Submit" />
</form>
</body>
</html> 