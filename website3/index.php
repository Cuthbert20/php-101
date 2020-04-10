<?php
    // Message Vars
    $msg = '';
    $msgClass = '';
    // CHECK FOR SUBMIT looking for name="submit" on our button in the form
    if(filter_has_var(INPUT_POST, 'submit')){
        // GET FORM DATA and store in variables
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        // echo "{$name} {$email} {$message}";

        // ALL FIELDS ARE REQUIRED, CHECKING REQUIRED FIELDS
        if(!empty($name) && !empty($email) && !empty($message)){
            // Passed
            // CHECK EMAIL
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                // Failed
                $msg = "Please enter valid email format";
                $msgClass = "alert-danger";
            }else {
                // Passed
            // RECIPIENT EMAIL
            $toEmail = 'spencer.carey407@gmail.com';
            $subject = "Contact Request From".$name;
            $body = "<h2>Contact Request</h2>
                <h4>Name:</h4><p>".$name.'</p>
                <h4>Email:</h4><p>'.$email.'</p>
                <h4>Message:</h4><p>'.$message."</p>";

            // EMAIL HEADERS
            $headers = "MIME-Version: 1.0" . "\r\n";
            # .= will append $headers variable not ovewrite it.
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

            // ADDITIONAL HEADERS
            $headers .= "From: " .$name. "<".$email.">". "\r\n";

            //IF THE EMAIL SENDS OR IT DOESN'T
            if(mail($toEmail, $subject, $body, $headers)){
                // EMAIL SENT
                $msg = "Your email has been sent";
                $msgClass = "alert-success";
            } else {
                // EMAIL FAILED TO SEND
                $msg = "Your email was not sent";
                $msgClass = "alert-danger";
            }
            }
        }else{
            // Failed
            $msg = "Please fill in all fields";
            $msgClass = "alert-danger";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    <title>Contact Us</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">
    <?php if($msg !== ''): ?>
        <div class="alert <?php echo $msgClass; ?>" style=""><?php echo $msg; ?></div>
    <?php endif; ?>
        <!-- for our action on the form we could just use index.php but, instead we are using $_SERVER SUPER GLOBAL VARIABLE  -->
        <form method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="">Name</label>
                <input value="<?php echo isset($_POST["name"]) ? $name: "";  ?>" type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input value="<?php echo isset($_POST['email']) ? $email : ""; ?>" type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <textarea  name="message" class="form-control" cols="30" rows="10"><?php echo isset($_POST["message"]) ? $message : ""; ?></textarea>
            </div>
            <br>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>