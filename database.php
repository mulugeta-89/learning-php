<?php
    $db_server = "localhost:3307";
    $db_name = "schooldb";
    $db_password = "";
    $db_user = "root";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
    } catch(mysqli_sql_exception){
        echo "couldn't connect the database";
    }
    
    if($conn){
        echo "connected successfully!";
    }

?>