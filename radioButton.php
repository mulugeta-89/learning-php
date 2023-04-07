<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <!-- the radion button given the same to select a single element -->
        <input type="radio" name="credit_card" value="visa">Visa<br>
        <input type="radio" name="credit_card" value="mastercard">Mastercard<br>
        <input type="radio" name="credit_card" value="american express">American express<br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST["submit"])){ // to check whether the button is clicked
        if(isset($_POST["credit_card"])){ // to check whether the radio button is selected
            $selected = $_POST["credit_card"];
            echo "u have selected {$selected}";
        }
        else {
            echo "u have not selected, please select one";
        }
    }
?>