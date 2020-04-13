<?php
    // Using an associative array to store multiple values in a cookie
    // cookies normal look for arrays we have to use the serialize function and pass in the array.
    $user = ['name' => 'Spencer', "age" => 29, "email" => 'stu@me.com', "admin" => true];
    // serialize prepares the data to be stored.
    $user = serialize($user);
    setcookie('user', $user, time() + 3600);
    //accessing data that has been serialized.
    $user = unserialize($_COOKIE['user']);
    print_r($user);

