<?php

include_once '../shared/connection.php';
$url_name=$_POST['url_name'];
$url_value=$_POST['url_address'];
$name=$_SESSION['name'];
$cmd2="INSERT INTO $name(url_name,url_value) VALUES('$url_name','$url_value')";
$sql_query=mysqli_query($conn,$cmd2);
header('location:home.php');

?>