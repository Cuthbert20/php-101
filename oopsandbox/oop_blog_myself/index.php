<?php
    include 'includes/class-autoloader.inc.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog On My Own</title>
</head>
<body>
<form action="includes/posts.inc.php" method="POST">
    <div>
        <label >Title</label>
        <br>
        <input type="text" name="title">
    </div>
    <div>
        <label >Body</label>
        <br>
        <input type="text" name="body">
    </div>
    <div>
        <label >Author</label>
        <br>
        <input type="text" name="author">
    </div>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>