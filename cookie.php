<?php
    setcookie("fav_food", "shiro", time() -0, "/"); //setting cookie for the browswer that 'll be expiried in 2days
    setcookie("fav_drink", "sprite", time() + (86400*3), "/"); // this after 3 days
    setcookie("fav_dessert", "cookie", time() + (86400*4), "/"); // this after 4 days

    //to remove a cookie use time()-0
    //retrieving a collator_sort_with_sort_keys
    foreach($_COOKIE as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    //recommeding a user based on cookie data
    if(isset($_COOKIE["fav_food"])){
        echo "There is a good shiro bet, u might be interested";
    }
    else {
        echo "I don't have enough information to recommend you";
    }


?>