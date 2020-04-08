<?php require 'inc/header.php'; #you can use include or require include will show the rest of the content if file not found require will not load other content ?>
    <h1>Home</h1>
    <?php
    $value = "Test";
    session_start();
    $_SESSION["newsession"]=$value;
    echo $_SESSION["newsession"];
    ?>
<?php include 'inc/footer.php'; ?>
    