<?php

    spl_autoload_register(function($className){
        $path = 'classes/';
        $ext = '.class.php';
        $fullPath = $path . $className . $ext;

//        Error handling
        if(!file_exists($fullPath)){
            return false;
        }
        include_once $fullPath;
    });
