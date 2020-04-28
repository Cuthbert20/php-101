<?php
//    Quick refresher on PDO connection, DSN (Database Source Name), Prepared statements, & more. No classes in this example just something quick.
include "config.php";
    $host = 'localhost';
    $user = 'root';
    $pass = PASS;
    $dbName = 'acme';

//    Set DSN
    $dsn = 'mysql:host='. $host . ';dbname=' . $dbName;

//    Create a PDO instance, its all Object Oriented.
    $data = array('Spears');
    $pdo = new PDO($dsn, $user, $pass);

//    Set Attribute to FETCHING ASSOC ARRAY
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

//    Using Named params
//    $sql = 'SELECT * FROM users WHERE last_name = :last';
//    $stmt = $pdo->prepare($sql);
//    $stmt->execute(['last'=> $data[0]]);
//    $users = $stmt->fetchAll(PDO::FETCH_OBJ); // fetching as OBJ instead of ASSOC array which is set to default on line 16.
//    print_r($users);

//    foreach($users as $user){
//        echo $user->first_name . "<br>";
//        echo $user->last_name. "<br>";
//    }

//    Insert into Table in DataBase
//    Image this info is coming from a form
/*
    $first = "Billy";
    $last = "Ellie";
    $email = "notbillyjoe@fire.com";
    $pass = '123';
    $location = 'Utah';
    $dept = 'Auto Techs';
    $age =  18;

    $sql = 'INSERT INTO users (first_name, last_name, email, password, location, dept, age) VALUES (?,?,?,?,?,?,?)';
    $stmt = $pdo->prepare($sql);
try {
    $stmt->execute([$first,$last, $email, $pass, $location, $dept, $age]);
    echo "Inserted into Database";
}catch(TypeError $error){
    echo "ERROR: " . $error->getMessage();
}
*/



