<?php
    declare(strict_types = 1);
    include 'includes/autoloader.inc.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Auto Loader Demo</title>
</head>
<body>
    <?php
    $dog1 = new Dogs\Dog("Cody", 12);
    // Using try catch block.
    try{
        echo $dog1->__get('name') . '<br>';
    } catch(TypeError $e){
        echo "Error!: " . $e->getMessage();
    }

    $kennel1 = new Kennel('123 jump street', 84057);
    echo $kennel1->__get('address');
    ?>
</body>
</html>
