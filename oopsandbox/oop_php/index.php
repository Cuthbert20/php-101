<?php
    include 'includes/class-autoload.inc.php';
    ////////////////// In this section we are going to connect to a database using OOP PHP. We will focus on how to interact with databases using PDO //////////////
    // See Link about PDO vs mysqli https://websitebeaver.com/php-pdo-vs-mysqli
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
    $usersObj->showUser("Eva");
//    $usersObj->createUser("Cody", "White", "2010-12-12");

    ///////////// Controller userscontr class ///////////////////////
    $userCon = new UsersController();
    $userCon->createUser("Remi", "Coley", "2017-12-1");

?>
</body>
</html>
