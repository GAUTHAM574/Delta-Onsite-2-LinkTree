<?php

$conn=new mysqli('localhost','root','','delta_onsite');

if($conn->connect_error)
{
    echo "<h1>Connection Error!</h1>";
    die;
}
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>

    *
    {
        font-family: 'Montserrat', sans-serif;
    }

        </style>
</head>
<body class="gradient3" style="height:100vh">
    
</body>
</html>