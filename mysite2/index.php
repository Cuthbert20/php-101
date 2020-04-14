<?php include 'classes/person.class.php'; ?>
<?php include 'inc/header.php'; ?>
<?php
    if(isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);
        $email = htmlentities($_POST['email']);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        // if users.txt doesn't exist then create file
        if(!is_file('users.txt')){
           $userFile = fopen('users.txt', "w");
           if($username && $email) {
               fwrite($userFile, "{$username} {$email}\n");
               fclose($userFile);
           }
        }else{
//            $handle = fopen('users.txt', "w");
            $file = 'users.txt';
            // appending users.txt file so that the content isn't overwritten.
            file_put_contents($file, "{$username} {$email}\n", FILE_APPEND);
//            fclose($handle);
        }
    }
//    if(filter_has_var(INPUT_POST,$email)){
//        $email = filter_var($email, FILTER_SANITIZE_EMAIL_EMAIL);
//        echo $email;
//    }
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
<div>
    <?php
        $personOne = new People('Stu', 'Knowlton', 35, "5ft 9in", 184, true);
        echo $personOne->getBirthYear();
    ?>
</div>
<div style="display: flex; flex-display:row; justify-content: center; margin-top: 10rem">
    <?php include 'inc/footer.php';?>
</div>
