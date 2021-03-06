<?php
    spl_autoload_register('myAutoLoader');

    function myAutoLoader($className){
//        echo $_SERVER['HTTP_HOST'];
//        echo $_SERVER['REQUEST_URI'];
        $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        // if includes is not found in $url set $path to ../classes/ else $path = classes/
        if(strpos($url, 'includes') !== false){
            $path = '../classes/';
        }else {
            $path = 'classes/';
        }

//        $path = "/classes";
        $ext = '.class.php';
        $fullPath = $path . $className . $ext;

        if(!file_exists($fullPath)){
            return false;
        }
        include_once $fullPath;
    }