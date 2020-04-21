<?php
    require "config.php";

    $host = DB_HOST;
    $user = DB_USER;
    $password = DB_PASS;
    $dbname = DB_NAME;

    // Set DSN Data Source Name
    $dsn = "mysql:host=$host;dbname=$dbname";
    // Create a PDO instance
    $pdo = new PDO($dsn,$user,$password);
    //Setting an attribute on our $pdo obj, so when we fetch anything it will come back as an object. We could set it to FETCH_ASSOC or whatever we want.
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    // PDO QUERY
//    $stmt = $pdo->query('SELECT * FROM posts');
    // Looping through $stmt- fetching data as associate array
//    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//        echo $row['title'] . "<br>";
//}
    // Looping through $stmt> fetching data as an object, we don't pass anything into fetch because we set the attribute on line 16.
//    while($row = $stmt->fetch()){
//        echo $row->body . "<br>";
//    }

# PREPARED STATEMENTS 2 main methods (prepare & execute)

    // UNSAFE WAY don't do this!
//    $sql = "SELECT * FROM POSTS WHERE author = $author";

    // FETCH MULTIPLE POSTS /////////////

    // User Input
    $author = "Spencer";
    $is_published = true;

    // Positional Params ie ?
//    $sql = 'SELECT * FROM posts WHERE author = ?';
//    $stmt = $pdo->prepare($sql);
    // in execute method we pass in value to replace positional params, must be in same order as sql query.
//    $stmt->execute([$author]);
//    $posts = $stmt->fetchAll();
//    var_dump($posts);
    // Loop through posts
//    foreach($posts as $post){
//        echo $post->title . "<br>";
//    }

    // Named Params ie :name or whatever you want after the :
    $sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
    $stmt = $pdo->prepare($sql);
    // Replacing Named Param :author with $author in our sql query.
    $stmt->execute(['author' => $author, 'is_published'=> $is_published]);
    $posts = $stmt->fetchAll();
//    var_dump($posts);
    foreach($posts as $post){
        echo $post->title . "<br>";
    }