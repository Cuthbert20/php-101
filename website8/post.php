<?php
    require("config/config.php");
    require("config/db.php");

// Get ID so we can pass it into our MySQL Query. mysqli_real_escape_string escapes any dangerous chars
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Create Query where we SELECT a single post where id is found.
$query = 'SELECT * FROM posts WHERE id = '.$id;

// Get Results, $conn is coming from db.php short for connection.
$result = mysqli_query($conn, $query);

// Fetching one post from MySQL DB and converting it to an associative array using mysqli_fetch_assoc
$post = mysqli_fetch_assoc($result);
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
    <a class="btn btn-default" href="<?php echo ROOT_URL; ?>">Back To Home</a>
    <h1><?php echo $post['title']; ?></h1>
    <small>Created On <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
    <p><?php echo $post['body']; ?></p>
</div>
</body>
</html>