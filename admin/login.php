<?php

include_once '../shared/connection.php';

if(!isset($_POST['user-name'])||!isset($_POST['password']))
{
    echo "<h1>unknown error</h1>";
    echo "<a href='localhost/DELTA ONSITE 2/admin/login_fe.php'>Try again</a>";
}

$name=$_POST['user-name'];
$password=$_POST['password'];

$cmd2="SELECT *FROM admin_details WHERE name='$name'";

$sql_obj=mysqli_query($conn,$cmd2);
$tot_rows=mysqli_num_rows($sql_obj);
if($tot_rows==1)
{
    $row=mysqli_fetch_assoc($sql_obj);
    if($row['name']==$name && password_verify($password,$row['password']))
    {
        $_SESSION['login-status']=1;
        $_SESSION['name']=$name;
        header('location:home.php');
    }
    else
    {
        echo "<Invalid User name or password";
        echo "<a href='login_fe.html'>Try again</a>";
        die;
    }
}

else
{
    echo "No accounts found ";
    echo "<a href='../index.html'>Register here</a>";
}


?>