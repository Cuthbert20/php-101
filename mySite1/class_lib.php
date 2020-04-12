<!-- OOP revolves around a construct called a ‘class’. Classes are the cookie-cutters / templates that are used to define objects. -->
<?php 
    class Person {
        private $name;
        private $age;
        private $hairColor;

        public function __construct($name, $age, $hairColor){
            $this->name = $name;
            $this->age = $age;
            $this->hairColor = $hairColor;
        }
        function getName(){
            return $this->name;
        }
    }
?>