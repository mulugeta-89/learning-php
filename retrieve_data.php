<?php
    include("database.php");
    $query = "select * from users";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){ // this used to check if the number of rows is greater than 0
        //$wana = mysqli_fetch_assoc($result); // if the above greater than zero, then this line will retrieve for us
        while ($wana = mysqli_fetch_assoc($result)){ // using while to retrive all the datas
            echo "<br>";
            echo $wana["od"]. "<br>";
            echo $wana["username"]. "<br>";
            echo $wana["reg_date"]. "<br><hr>";
        }
        
    }

    mysqli_close($conn);
?>