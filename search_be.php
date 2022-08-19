<?php

$name=$_POST['domain'];

if(!isset($name))
{
    echo "unkwon error";
    die;
}

include_once './shared/connection.php';

$cmd2="SELECT * FROM admin_details";
$sql_obj=mysqli_query($conn,$cmd2);
$sql_status=0;
for($i=0;$i<mysqli_num_rows($sql_obj);$i++)
{
    $row=mysqli_fetch_assoc($sql_obj);
    if($name==$row['name'])
    {
        $sql_status=1;
        break;
    }    
}
if($sql_status==0)
{
    echo "<script>
        alert('Domain does not exists');
        window.location.href='./user_index.html'</script>";
        die;
}

else
{
    $cmd3="SELECT * FROM $name";
    $sql_obj3=mysqli_query($conn,$cmd3);
    echo`
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>$name</title>
        <link rel='style-sheet' href='style.css'>
    </head>
    <body class='bg-dark'>
    <div>`;
    for($i=0;$i<mysqli_num_rows($sql_obj3);$i++)
    {
        $row2=mysqli_fetch_assoc($sql_obj3);
        $url_name=$row2['url_name'];
        $url_value=$row2['url_value'];
        $url='https://'.$url_value.'/';
        echo "<div class='bg-dark text-light d-flex m-5 p-3 justify-content-around w-50 border-light'>
                <div>$url_name</div>
                <a href=$url id='div$i'>$url_value</a>
            </div>";
    }

    // echo "<script>";
    // for($i=0;$i<mysqli_num_rows($sql_obj3);$i++)
    // {
    //     $row4=mysqli_fetch_assoc($sql_obj3);
    //     $url_value=$row4['url_value'];
    //     $url="https://".
    // }

    echo "</div></body>
    </html>";

}

?>


    
