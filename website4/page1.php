<!-- WORKING WITH SESSIONS IN PHP -->
<?php
    if(isset($_POST['submit'])){
        # Every page you want to use the session data you have to use session_start function.
        session_start(); // Start the session
        // Session super global variable
        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        # Redirect to new page. Once submit it clicked in form POST user is redirected to page2.php
        header('Location: page2.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SESSIONS</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="name" placeholder="Enter Name">
        <br>
        <input type="text" name="email" placeholder="Enter Email">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>