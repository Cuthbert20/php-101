<?php
    include 'includes/newclass.inc.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Objects in OOP PHP</title>
</head>
<body>
    <?php
        $object = new NewClass;
        # Deleting an Object/instance of a class that we have created using unset(); function.
        // unset() function runs the __destructor inside the class and destroys this instance of the class.
        unset($object);
        # the method below will now throw an error because the object has been destroyed when we ran unset above.
        echo $object->__get('data');
    ?>
</body>
</html>