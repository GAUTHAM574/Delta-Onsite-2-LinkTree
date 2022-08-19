<?php

include_once '../shared/connection.php';
if(!isset($_SESSION['login-status'])==1)
{
    echo "<h1>Unauthorized access</h1>";
    die;
}
if($_SESSION['login-status']!=1)
{
    echo "<h1>Invalid Access</h1>";
    die;
}
include 'header.php';
$name=$_SESSION['name'];
$cmd2="SELECT *FROM $name";
$sql_obj=mysqli_query($conn,$cmd2);
$tot_rows=mysqli_num_rows($sql_obj);
echo "
    <div>";
for($i=0;$i<$tot_rows;$i++)
{
    $row=mysqli_fetch_assoc($sql_obj);
    $url_id=$row['url_id'];
    $url_name=$row['url_name'];
    $url_value=$row['url_value'];
    $url=$url_value;
    echo "
    <div class='d-flex justify-content-around m-1 bg-dark rounded p-2 text-light'>
        <div>$url_id</div>
        <div>$url_name</div>
        <div>$url_value</div>
        <a href='edit.php?url_id=$url_id'><div><button class='btn btn-primary'>EDIT</button></div></a>
        <div><a href='delete.php?url_id=$url_id'><button class='btn btn-danger'>DELETE</button></a></div>
        </div>
    ";

}

echo "</div>
";


?>