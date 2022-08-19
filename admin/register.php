<?php

if(!isset($_POST['user-name'])||!isset($_POST['password']))
{
    echo "<h1 style='color:white'>Error creating user</h1>";
    echo "<a href='../index.html'>Try again</a>";
}

include_once '../shared/connection.php';
$user_name=$_POST['user-name'];
$pass=$_POST['password'];

$cmd1="SELECT *FROM admin_details";
$obj=mysqli_query($conn,$cmd1);

$temp=0;
for($i=0;$i<mysqli_num_rows($obj);$i++)
{
    $row=mysqli_fetch_assoc($obj);
    if($row['name']==$user_name)
    {
        $temp=1;
    }
}

if($temp==1)
{
    echo "<h1>user name already exists </h1>";
    echo "<a href='../index.html'>Try again</a>";
}
else
{
    $hash_pass=password_hash($pass, PASSWORD_BCRYPT, ['cost' => 12,]);
    $cmd2="INSERT INTO admin_details(name,password) VALUES('$user_name','$hash_pass')";
    mysqli_query($conn,$cmd2);
    $cmd3="CREATE TABLE `$user_name` ( `url_id` INT NOT NULL AUTO_INCREMENT , `url_name` VARCHAR(100) NOT NULL , `url_value` TEXT NOT NULL , PRIMARY KEY (`url_id`)) ENGINE = InnoDB";
    mysqli_query($conn,$cmd3);
    echo "<script>
                alert('Registerd succesfully Login to continue');    
             </script>";
             header('location:./login_fe.php');

}









?>