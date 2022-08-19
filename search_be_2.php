<?php

$name=$_GET['domain'];

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


    $cmd3="SELECT * FROM $name";
    $sql_obj3=mysqli_query($conn,$cmd3);

    echo "<h1 class='text-center p-3 mb-3 gradient2 text-light'>$name</h1>";
    for($i=0;$i<mysqli_num_rows($sql_obj3);$i++)
    {
        $row2=mysqli_fetch_assoc($sql_obj3);
        $url_name=$row2['url_name'];
        $url_value=$row2['url_value'];
        $url='https://'.$url_value.'/';
        echo "<div class='gradient p-1 m-5'>
        <div class='bg-dark text-light d-flex p-3 justify-content-around '>
                <div>$url_name</div>
                <a href=$url>$url_value</a>
            </div>
        </div>";
    }

// }

?>



    
