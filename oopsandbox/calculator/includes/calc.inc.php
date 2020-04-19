<?php
    declare(strict_types = 1);
    include 'class-autoloader.inc.php';

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
        // casting $num1 && $num2 using (int) to a number because we used strict_types and set value to int in class for $num1 && $num2.
    $calculator = new Calc($operator, (int)$num1, (int)$num2);

    try{
        echo '<h2> The result is ' . $calculator->calcMethod() . '</h2>';
    }catch(TypeError $e){
        echo "Error!: " . $e->getMessage();
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Results</title>
</head>
<body>
<a href="../index.php">Back</a>
</body>
</html>
