<?php

$url_id=$_GET['url_id'];

include_once '../shared/connection.php';

$name=$_SESSION['name'];
$cmd1="DELETE FROM $name WHERE url_id=$url_id";

$sql_status=mysqli_query($conn,$cmd1);
if($sql_status)
{
    header('location:home.php');
}
else
{
    echo"unkqwon error";
}

?>