<?php
    require "config/config.php";
    require "config/db.php";
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
            <input name="name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea name="body" type="text" class="form-control"></textarea>
        </div>
        <input name="submit" class="'btn btn-primary" value="Submit" type="submit">
    </form>
        </div>
    <?php include "inc/footer.php"; ?>

