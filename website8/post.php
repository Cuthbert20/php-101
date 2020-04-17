<?php
    require("config/config.php");
    require("config/db.php");

// Check for submit
if(isset($_POST['delete'])){
//        echo 'form has been submitted';
    // If Delete Link Pressed then we will delete the post from the MySQL posts Table.
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

    // Creating our MySQL Query inserting post into posts Table. Make sure to use "" around the query string and '' around values as below.
    $query = 'DELETE FROM posts WHERE id = '. $delete_id;
    // die function Give us a page where we can see the query string and any error if give one.
//        die($query);
    if(mysqli_query($conn, $query)){
        // If successful REDIRECT using header();
        header('Location: ' . ROOT_URL . '');
    }else{
        echo 'ERROR: ' . mysqli_error($conn);
    }
}

// Get ID from url query string ?id=1 so we can pass it into our MySQL Query. mysqli_real_escape_string escapes any dangerous chars
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Create Query where we SELECT a single post where id is found.
$query = 'SELECT * FROM posts WHERE id = '.$id;

// Get Results, $conn is coming from db.php short for connection.
$result = mysqli_query($conn, $query);

// Fetching one post from MySQL DB and converting it to an associative array using mysqli_fetch_assoc
$post = mysqli_fetch_assoc($result);
//print_r($post);

// Free Result, Frees it from Memory
mysqli_free_result($result);

// Close Connection
mysqli_close($conn);
?>

<?php include "inc/header.php"; ?>
<div class="container">
    <a class="btn btn-default" href="<?php echo ROOT_URL; ?>">Back To Home</a>
    <h1><?php echo $post['title']; ?></h1>
    <small>Created On <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
    <p><?php echo $post['body']; ?></p>
    <hr>
    <form class="float-right" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<!--   Hidden Input     -->
        <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
        <input type="submit" name="delete" value="delete" class="btn btn-danger">
    </form>

    <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-default">EDIT</a>
<?php include "inc/footer.php"; ?>