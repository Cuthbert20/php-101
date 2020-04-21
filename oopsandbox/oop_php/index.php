<?php
    include 'includes/class-autoload.inc.php';
    ////////////////// In this section we are going to connect to a database using OOP PHP. We will focus on how to interact with databases using PDO //////////////
    // See Link about PDO vs mysqli https://websitebeaver.com/php-pdo-vs-mysqli
    if(isset($_POST['submit'])){

        $first = $_POST['first'];
        $last = $_POST['last'];
        $dob = $_POST['dob'];

        $user = new UsersController();
        $user->createUser($first, $last, $dob);
    }
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Databases with OOP PHP</title>
</head>
<body>
    <?php
    //////////////////// test class //////////////////////////////////
//        $testObj = new Test();
        # getting all users from mySQL DB.
        // Getting all users without Stmt ie not prepared
//        $testObj->getUsers();
        // Get user based on first and last in Stmt, prepared, fetchAll
//        $testObj->getUsersStmt("Ryker", "Knowl");
        // Insert into User Table in DB with Stmt
//          $testObj->setUsersStmt("Eva", "Knowlton", "2019-10-21");

    /////////////// View  usersview class ////////////////////////////
    $usersObj = new UsersView();
    $usersObj->showUser("Remi");
//    $usersObj->createUser("Cody", "White", "2010-12-12");

    ///////////// Controller userscontroller class ///////////////////////
    $userCon = new UsersController();
    # WORKS!!!
//    $userCon->createUser("Remi", "Coley", "2017-12-1");

?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
        <div>
            <label for="">First Name</label>
            <input type="text" name="first">
        </div>
        <div>
            <label for="">Last Name</label>
            <input type="text" name="last">
        </div>
        <div>
            <label for="">Date of Birth</label>
            <input type="text" name="dob">
        </div>
        <input type="submit" name="submit">
    </form>
</body>
</html>
