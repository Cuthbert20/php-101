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
    // var_dump($personOne);
    echo '<br>'.' Hi '.$personOne->getName();
    // :: is used to access static methods and Properties in a class.
    echo "<br>".Person::$drinkingAge; // accessing $drinkinAge Property on Person class.
    Person::setDrinkingAge(19); // Using static method to change $drinkingAge from 21 to the argument num that was passed into the method.
    echo '<br>'. Person::$drinkingAge;
    
    ?>
</body>
</html>