<?php
    // this is defining a function in php
    function finding_hypotheneus($adjacent, $opposite){
        return sqrt((pow($adjacent, 2) + pow($opposite, 2)));
        
    }
    echo finding_hypotheneus(3,4); // this is for calling a function
?>