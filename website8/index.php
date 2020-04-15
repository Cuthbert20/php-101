<?php
    require("config/config.php");
    require("config/db.php");

    // Create Query
    $query = 'SELECT * FROM posts';

    // Get Results, $conn is coming from db.php short for connection.
    $result = mysqli_query($conn, $query);

    // Fetch Data, and setting our result type to an associative array. ['name' => "Spencer", ect]
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
//    print_r($posts);

    // Free Result, Frees it from Memory
    mysqli_free_result($result);

    // Close Connection
    mysqli_close($conn);
    ?>

<?php include("inc/header.php"); ?>
<div class="container">
    <h1>Posts</h1>
    <?php foreach($posts as $post) : ?>
        <div class="well">
            <h3><?php echo $post['title']; ?></h3>
            <small>Created on <?php echo $post['created_at']; ?> by
                <?php echo $post['author']; ?>
            </small>
            <p><?php echo $post['body']; ?></p>
            <a class="btn btn-default" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>
        </div>
    <?php endforeach; ?>
<?php include "inc/footer.php"; ?>

