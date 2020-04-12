<!-- OOP in PHP on my own -->

<?php
    class Critter{
        private $name;
        private $age;
        function __construct($name = "Anonymous",$age){
            $this->name = $name;
            $this->age = $age;
        }
        # GETTER
        public function getName(){
            echo $this->name;
        }
        # SETTER
        public function setName($name){
            $this->name = $name;
        }
    }
//     $boo = new Critter("Boo", 7);
//     $boo->getName();
//     $boo->setName("Boo2");
//     $boo->getName();


// ?>