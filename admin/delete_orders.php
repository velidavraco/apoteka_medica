<?php
include("connection.php"); //spajanje na bazu
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM narudzba WHERE 'id' = '".$_GET['order_del']."'"); // izbriši narudžu korištenjem id 

header("location:orders.php");  //kada je proizvod izbrisan vrati se na trenutnu stranicu
?>