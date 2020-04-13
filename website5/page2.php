<?php
    // using $_COOKIE Super Global
    // Use chrome dev tools F12 in application to look at cookie or even sessions
    if(isset($_COOKIE['username'])){
        echo 'User: ' . $_COOKIE['username'] . ' is set <br>';
    }else {
        echo 'User is not set';
    }


