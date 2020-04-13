<?php
    session_start();
    print_r($_SESSION);

    // unset a session value/variable
    unset($_SESSION['name']);

    # destory a session
    session_destroy();
?>