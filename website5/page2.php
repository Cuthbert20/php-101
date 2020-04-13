<?php
    // Changing cookie using setcookie function
    setcookie('username', 'Stu', time() + (86400 * 30));

    // Unset/delete a cookie
    //setcookie('username', "Stu", time() - 3600);

    // Checking for cookies
    if(count($_COOKIE) > 0){
        echo 'There are '. count($_COOKIE) . 'Cookies saved<br>';
    }else{
        echo 'There are no cookies saved';
    }
    // using $_COOKIE Super Global
    // Use chrome dev tools F12 in application to look at cookie or even sessions
    if(isset($_COOKIE['username'])){
        echo 'User: ' . $_COOKIE['username'] . ' is set <br>';
    }else {
        echo 'User is not set';
    }


