<?php
    $name = "Mulugeta Hailegnaw Belay";
    $lower = strtolower($name); // for changing the whole string to lower case
    $upper = strtoupper($name);// for changing the whole string to upper case
    $trimmed = trim($name); // to trim or remove unnecessary white spacess before and after a string
    $reversed = strrev($name); // to reverse a string
    $substring = substr($name, 8, 2); // to create a slice from a string
    $string_length = strlen($name);// to find the lenght of the string
    $char_position = strpos($name, "H"); // to find the position of character from a string
    $replaced = str_replace(" ", "-", $name); // to replace a string
    $string_to_array = explode(" ", $name); // to split a string to an array

    foreach($string_to_array as $words){ // to print out the array
        echo $words . "<br>";
    }
    $array_to_string = implode(" ", $string_to_array); // to change the presented array to string



    echo $array_to_string;
?>