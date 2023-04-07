<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkBox.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza"/>Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger"/>Hamburger<br>
        <input type="checkbox" name="frog" value="Frog"/>Frog<br>
        <input type="checkbox" name="goat" value="Goat"/>Hamburger<br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){ // to check whether the submit button is clicked
        if(isset($_POST["pizza"])){
            echo"u have selected {$_POST["pizza"]} for the dinner <br>";
        }
        if(isset($_POST["hamburger"])){
            echo"u have selected {$_POST["hamburger"]} for the dinner <br>";
        }
        if(isset($_POST["frog"])){
            echo"u have selected {$_POST["frog"]} for the dinner <br>";
        }
        if(isset($_POST["goat"])){
            echo"u have selected {$_POST["goat"]} for the dinner <br>";
        }
        if(empty($_POST["pizza"]) || empty($_POST["hamburger"]) || empty($_POST["frog"]) || empty($_POST["goat"])) {
            echo "u have not selected anythin";
        }
    }

?>