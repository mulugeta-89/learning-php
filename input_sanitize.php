<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="input_sanitize.php" method="post">
        Username<br>
        <input type="text" name="username"/><br>
        Age<br>
        <input type="number" name="age"/>
        <br>
        <br>
        Email<br>
        <input type="text" name="email"/>
        <br>
        <br>
        <input type="submit" name="submit" value="submit"/>
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){ // to check whether the button is clicked
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        echo "welcom {$username}<br>";
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        echo "u are {$age} years old <br>";
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        echo "ur email is {$email}";
    }
?>