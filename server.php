<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    Username<br>
    <input type="text" name="username"/>
    <input type="submit" name="submit" value="submit"/>
    </form>
    
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        echo "ur name is {$_POST["username"]}";
    }

?>