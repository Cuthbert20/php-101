<?php include 'inc/header.php';  ?>
<?php
    if(isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);
        $email = htmlentities($_POST['email']);
        echo $username . " " . $email;
    }
?>
    <div class="container">
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>"  style="font-weight: bolder; font-size: 2rem" action="">
            Username: <input name="username" placeholder="Enter Username" type="text" class="form-control">
            <br>
            Email: <input name="email" placeholder="Enter Email" type="email" class="form-control">
            <br>
            <input type="submit" name="submit" value="submit" class="btn btn-success">
        </form>
    </div>
<div style="display: flex; flex-display:row; justify-content: center; margin-top: 10rem">
    <?php include 'inc/footer.php';?>
</div>
