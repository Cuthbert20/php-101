<?php
    session_start();
    print_r($_SESSION);
    # using isset function to see if name is a variable on sessions using ternary.
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : "Guest";
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : "No Email";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <h1><?php echo $name; ?></h1>
    <h3><?php echo $email; ?></h3>
    <a href="page4.php">Go to Page 4</a>
</body>
</html>