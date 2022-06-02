<?php
include("connection.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM proizvod WHERE id = ''");
header("location:product.php");  
?>