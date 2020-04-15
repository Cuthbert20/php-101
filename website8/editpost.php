<?php
    require "config/config.php";
    require "config/db.php";

    // Check for submit
    if(isset($_POST['submit'])){
//        echo 'form has been submitted';
        // Get form data, remember $conn short for connection comes from db.php file in config folder, where we are connecting to MySQL DB.
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);

        // Creating our MySQL Query inserting post into posts Table. Make sure to use "" around the query string and '' around values as below.
        $query = "UPDATE posts SET 
                    title='$title', 
                    author = '$author', 
                    body = '$body' 
                    WHERE id = {$update_id}";
        // die function Give us a page where we can see the query string and any error if give one.
//        die($query);
        if(mysqli_query($conn, $query)){
            // If successful redirect using header();
            header('Location: ' . ROOT_URL . '');
        }else{
            echo 'ERROR: ' . mysqli_error($conn);
        }
    }
    // Getting the id from the url params ?id=1
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Create MySQL Query
    $query = 'SELECT * FROM posts WHERE id = '. $id;

    // Get Results
    $results = mysqli_query($conn, $query);
//    var_dump($results);

    // Fetch Data, values will be store in $post so we can access them
    $post = mysqli_fetch_assoc($results);
//    var_dump($post);

    // Free Result Frees it from Memory
    mysqli_free_result($results);

    // Close Connection
    mysqli_close($conn);

?>

<?php include("inc/header.php"); ?>
    <div class="container">
        <h1>Add Posts</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-group">
                <label>Title</label>
                <input value="<?php echo $post['title']; ?>" name="title" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input value="<?php echo $post['author']; ?>" name="author" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea  name="body" type="text" class="form-control"><?php echo $post['body']; ?></textarea>
            </div>
<!-- Hidden input -->
            <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>" >
            <input name="submit" class="'btn btn-primary" value="Submit" type="submit">
        </form>
    </div>
<?php include "inc/footer.php"; ?>