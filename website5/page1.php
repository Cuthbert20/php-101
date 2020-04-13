<?php
//    $name = isset($_POST['username']) ? $_POST['username'] : "Guest";
//    echo $name;
    if(isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);
        // to set a cookie use setcookie function first value is the name, second value, third expiration time.
        setcookie('username', $username, time() + 3600); // 1 Hour

        # Redirect to new page. Once submit it clicked in form POST user is redirected to page2.php
        header('Location: page2.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="username" placeholder="Enter Username">
        <br>
        <input type="submit" name="submit" value="Submit" >
    </form>
</body>
</html>