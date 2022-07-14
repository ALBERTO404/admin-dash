<?php
        $server = "localhost";
        $username ="root";
        $password = "";
        $database = "web2";

    $conn = mysqli_connect($server,$username,$password,$database);
    if($conn)
    {
        echo 'Database connection success';
    }
    else
    {
        echo 'Error occured'.mysqli_error($conn);
    }
    // slide 202
 ?>