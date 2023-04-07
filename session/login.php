<?php
    session_start(); // starting a session here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <h2>Username</h2><br>
        <input type="text" name="username"/>
        <h2>Password</h2><br>
        <input type="password" name="password"/>
        <input type="submit" name="login" value="login" />
    </form>
    
</body>
</html>
<?php
    if(isset($_POST["login"])){
        if(!empty($_POST["username"]) && $_POST["password"]){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("location: home.php"); //this will allow you to move to other php pages

        }
    }


?>