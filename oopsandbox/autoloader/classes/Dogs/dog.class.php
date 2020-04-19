<?php
    // Using namespace because the Dog class file is now inside Dogs directory.
    namespace Dogs;

    class Dog{
        private $name;
        private $age;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }
        public function __get($name)
        {
            return $this->$name;
        }
    }
