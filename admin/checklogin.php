<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="upg"; // Database name
$tbl_name="user"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$username=$_POST['username'];
$password=$_POST['password'];

// encrypt password
$enc=md5($password);

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM $tbl_name WHERE user_name='$username' and user_pass='$enc'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['myusername']="username";
//$_SESSION['myusername']
//session_register("myusername");
//session_register("mypassword");
$row = mysql_fetch_array($result);
if ($row['type']=='admin')
{
	$_SESSION['admin']=$row['type'];
header("location:acc_create.php");
}
else
header("location:index.php");
}
else {
echo "Wrong Username or Password";
}
?>