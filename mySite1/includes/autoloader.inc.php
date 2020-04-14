<?php
    // Instead of using include of each class (normally we would store each class in a separate file) we can Load Classes Automatically.
    spl_autoload_register('myAutoLoader');
    function myAutoLoader($className){
        $path = 'classes/';
        $extension = '.class.php';
        $fullPath = $path . $className . $extension;
    // Error handling in case we have an issue with a class name
        if(!file_exists($fullPath)){
            return false;
        }
    include_once $fullPath;
}