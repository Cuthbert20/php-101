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
    // SETTING ATTRIBUTE ATTR_EMULATE_PREPARES to false so that we can set a limit using params on line 117
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

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

    // User Input image these are coming from a form $_POST['author'] ect ect.
//    $author = "Spencer";
//    $is_published = true;
//    $id = 1;

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
//    $sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
//    $stmt = $pdo->prepare($sql);
    // Replacing Named Param :author with $author in our sql query.
//    $stmt->execute(['author' => $author, 'is_published'=> $is_published]);
//    $posts = $stmt->fetchAll();
//    var_dump($posts);
//    foreach($posts as $post){
//        echo $post->title . "<br>";
//    }

    // FETCH SINGLE POST using positional params.
//    $sql = 'SELECT * FROM posts WHERE id = ?';
//    $stmt = $pdo->prepare($sql);
//    $stmt->execute([$id]);
    // Fetching single post instead of fetchAll() method
//    $post = $stmt->fetch();
    // Lets use $post data in a html tag for fun. --DELETED--

    // GET ROW COUNT
//    $stmt = $pdo->prepare('SELECT * FROM posts WHERE author = ?');
//    $stmt->execute(['Spencer']);
//    $postCount = $stmt->rowCount();
//    echo "Row Count: $postCount";

    // INSERT DATA using named params.
    // Image that this data is coming from a form with a method of POST
//    $title = 'Post Six';
//    $author = 'Remi';
//    $body = "This is Post Six";
//    $sql = 'INSERT INTO posts (title, body, author) VALUES (:title, :body, :author)';
//    $stmt = $pdo->prepare($sql);
//    $stmt->execute(["title"=>$title, "body"=>$body, "author"=>$author]);
//    echo "Data has been inserted";

    // UPDATE DATA using named params
//    $title = 'Post Four';
//    $author = 'Spencer';
//    $body = "This is Post Four";
//    $id = 4;
//    $sql = 'UPDATE posts SET title = :title, body = :body, author = :author WHERE id = :id';
//    $stmt = $pdo->prepare($sql);
//    $stmt->execute(['title'=>$title, "body"=>$body, "author"=>$author, "id"=>$id]);
//    echo "Post has been Updated";

    // DELETE DATA using positional params.
//    $id = 5;
//    $sql = 'DELETE FROM posts WHERE id = ?';
//    $stmt = $pdo->prepare($sql);
//    $stmt->execute([$id]);
//    echo "Post with id: $id has been deleted";

    // SEARCH DATA WITH LIKE OPERATOR
    // we are fetching an post where there is an e in the title using %e% && LIKE Operator.
//    $search = "%e%";
//    $sql = 'SELECT * FROM posts WHERE title LIKE ?';
//    $stmt = $pdo->prepare($sql);
//    $stmt->execute([$search]);
//    $results = $stmt->fetchAll();
//    var_dump($results);
//    foreach($results as $post){
//        echo $post->title . '<br>';
//    }

    // SELECTING DATA from Table with a limit using LIMIT Operator.
    // we could also include an offset first then the amount of rows we want to return ie LIMIT 2,3 or something like that.
    // User will select offset && row_count
    $offset = 2;
    $row_num = 3;
    $sql = 'SELECT title,author FROM posts LIMIT :offset, :row_num';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["offset"=>$offset, "row_num"=>$row_num]);
    $results = $stmt->fetchAll();
    // Counting rows for fun.
    echo $stmt->rowCount() . '<br>';
    foreach($results as $row){
        echo $row->title . " " . $row->author .  "<br>";
    }


