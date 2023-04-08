<?php
    include("database.php");
    $username = "kede";
    $password = "kebe123";
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);

    $query = "insert into users (username, password) values('$username', '$pass_hash')";
    mysqli_query($conn, $query);
    mysqli_close($conn);

?>