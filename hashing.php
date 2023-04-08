<?php
    $password = "mulugeta";
    $hash = password_hash($password, PASSWORD_DEFAULT);//PASSWORD_DEFAULT uses bcypt algorithm to hash the password_get_info
    
    if(password_verify("mulugeta", $hash)){ //password_verify function allows us check the hash and the original password
        // and return true if they are identical
        echo "you are successfully logged in";
    } else {
        echo "your password is incorrect";
    }
    

?>