<?php include 'class_lib.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Basics</title>
</head>
<body>
    <?php
    echo 'test';
    $personOne = new Person("Bill", 33, "Blonde");
    var_dump($personOne);
    ?>
</body>
</html>