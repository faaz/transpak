<?php
session_start();
if(isset($_SESSION['myusername']))
{
header("location:../ya/login.php");
}
?>