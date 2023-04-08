<?php
    include("database.php");
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
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
    <h2>Welcome to FakeBook</h2>
    Username<br>
    <input type="text" name="username">
    <br>
    <input type="password" name="password">
    <br>
    <input type="submit" name="submit" value="register"/>

    </form>
    
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $hash = password_hash($password, PASSWORD_DEFAULT);
        if(empty($username)){
            echo "please enter your username";
        }
         elseif(empty($password)){
            echo "please enter your password";
         } else {
            $query = "insert into users(username, password) values('$username', '$hash')";
            try {
                mysqli_query($conn, $query);
                echo "user registered succesfully";
            } catch(mysqli_sql_exception){
                echo "user did not registered";
            }
            
            

         }
    }
    mysqli_close($conn);
?>