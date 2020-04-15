<?php
    require("config/db.php");

    // Create Query
    $query = 'SELECT * FROM posts';

    // Get Results, $conn is coming from db.php short for connection.
    $result = mysqli_query($conn, $query);

    // Fetch Data, and setting our result type to an associative array. ['name' => "Spencer", ect]
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    print_r($posts);

    // Free Result, Frees it from Memory
    mysqli_free_result($result);

    // Close Connection
    mysqli_close($conn);
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Blog</title>
</head>
<body>
<div class="container">
    <h1>Posts</h1>
    <?php foreach($posts as $post) : ?>
        <div class="well">
            <h3><?php echo $post['title']; ?></h3>
            <small>Created on <?php echo $post['created_at']; ?> by
                <?php echo $post['author']; ?>
            </small>
            <p><?php echo $post['body']; ?></p>
            <a class="btn btn-default" href="posts.php?id=<?php echo $post['id']; ?>">Read More</a>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>

