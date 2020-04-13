<?php
    session_start();

    // We can change the session values whenever we want.
    $_SESSION['name'] = "Bob";
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SESSIONS</title>
</head>
<body>
    <h5> Thank you <?php echo $name;  ?> YOu have subscribed with the email <?php echo $email ?></h5>
    <a href="page3.php">Go to Page 3</a>
</body>
</html>