<?php
    // Regular Class/////////////////////////////////

    include_once 'classes/simpleClass.class.php';

    $obj = new SimpleClass();
    $obj->hellowWorld();
    echo '<br>';
    // Anonymous class //////////////////////////////
    $newObj = new class("Stu"){
        private $name;

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function helloWorld(){
            echo "Hello World from an Anonymous class by {$this->name}";
        }
    };
    $newObj->helloWorld();
