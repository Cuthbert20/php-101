<?php
    require "config/config.php";
    require "config/db.php";

    // Check for submit
    if(isset($_POST['submit'])){
//        echo 'form has been submitted';
        // Get form data, remember $conn short for connection comes from db.php file in config folder, where we are connecting to MySQL DB.
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);

            // Creating our MySQL Query inserting post into posts Table. Make sure to use "" around the query string and '' around values as below.
        $query = "INSERT INTO posts(title, author, body) VALUES ('$title', '$author', '$body')";

        if(mysqli_query($conn, $query)){
            // If successful redirect using header();
            header('Location: ' . ROOT_URL . '');
        }else{
            echo 'ERROR: ' . mysqli_error($conn);
        }
    }
?>

<?php include("inc/header.php"); ?>
<div class="container">
    <h1>Add Posts</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
            <label>Title</label>
            <input name="title" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input name="author" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea name="body" type="text" class="form-control"></textarea>
        </div>
        <input name="submit" class="'btn btn-primary" value="Submit" type="submit">
    </form>
        </div>
    <?php include "inc/footer.php"; ?>

