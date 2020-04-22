<?php
    # Below is an example of Polymorphism in PHP using Run Time (function overriding).
    # We create a Super class Shape then inside shape there is a function that we will be overriding in each sub class.
    abstract class Shape{
        protected $myShape;

        public function __construct($myShape)
        {
            $this->myShape = $myShape;
        }

        protected function draw(){

        }
    }

    class Circle extends Shape{
        public function draw(){
            echo "I am a $this->myShape";
        }
    }

    class Square extends Shape{
        public function draw(){
            echo "I am a $this->myShape";
        }
    }

    class Triangle extends Shape{
        public function draw(){
            echo "I am a $this->myShape";
        }
    }

    $val = array();
    $val[0] = new Circle("circle");
    $val[1] = new Square("square");
    $val[2] = new Triangle("triangle");

    foreach($val as $obj){
        echo $obj->draw() . '<br>';
    }
