<?php
    declare(strict_types = 1);
    class Person{
        private $name;
        private $eyeColor;
        private $age;

        # Static Property
        public static $drinkingAge = 21;

        public function __construct(string $name, string $eyeColor, int $age)
        {
            $this->name = $name;
            $this->eyeColor = $eyeColor;
            $this->age = $age;
        }
        public function __set($name, $value)
        {
            $this->$name = $value;
        }
        public static function setDrinkingAge(int $num){
            self::$drinkingAge = $num;
        }
    }
