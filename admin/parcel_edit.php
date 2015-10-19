<html>
<head>
<title>Edit Parcel Details</title>
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
xmlhttp.open("GET","edit_ajax.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>
<?php
include("menu.inc.php");
?>
<h2>Edit Parcel Details</h2>

Select HAWB No.:
<select name="users" onChange="showUser(this.value)">
<option value="">Select Parcel No. </option>

<?php
include("settings.inc.php");

    $query = mysql_query("SELECT hawb FROM parcel ORDER BY hawb");
	while($show = mysql_fetch_array($query)) {
	  echo '<option value="'.$show['hawb'].'">'.$show['hawb'].'</option>';
    }
	?></select>
<br /><br />
<div id="txtHint"><b>Parcel data will be listed here.</b></div>

</body>
</html> 