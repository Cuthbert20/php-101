<?php
    include('includes/person.inc.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using Static Props and Methods</title>
</head>
<body>
    <?php
        # Accessing static property and method without creating instant of class
        echo Person::$drinkingAge . '<br>';
        Person::setDrinkingAge(20);
        echo Person::$drinkingAge;

//        $person1 = new Person("Stu", "Blue", 37);

    ?>
</body>
</html>
