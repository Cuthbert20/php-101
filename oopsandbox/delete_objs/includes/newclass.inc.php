<?php
    class NewClass{
        private $data = "I am a property";

        public function __construct()
        {
            echo "A instance of NewClass has been created <br>";
        }
        public function __set($name, $value)
        {
            $this->$name = $value;
        }
        public function __get($name)
        {
            return $this->$name;
        }
        public function __destruct()
        {
            echo "<br> This is the end of the class!";
        }
    }