<?php
include("connection.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM korisnik WHERE id = '".$_GET['']."'");
header("location:users.php");  

?>
