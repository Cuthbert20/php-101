<?php
// spl_autoload_register takes in a string which is the name of a function we are referencing. ie we could just pass in the function but, its cleaner to pass in the name only.
spl_autoload_register('myAutoLoader');

function myAutoLoader($className){
    $path = 'classes/';
    $ext = '.class.php';
    $fullPath = $path . $className . $ext;

    // Error handling incase class doesn't exist.
    if(!file_exists($fullPath)){
        return false;
    }
    include_once $fullPath;
}
