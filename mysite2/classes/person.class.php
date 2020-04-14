<?php
    class People{
        private $firstName;
        private $lastName;
        private $age;
        private $height;
        private $weight;
        private $admin;
        public static $company = "Best Buy";
        public function __construct($firstName, $lastName, $age, $height, $weight, $admin){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->age = $age;
            $this->height = $height;
            $this->weight = $weight;
            $this->admin = $admin;
        }
        # SETTER
        public static function setCompany($newCompany){
            self::$company = $newCompany;
        }
        public function setAdmin($privileges){
            $this->admin = $privileges;
        }
        # GETTER
        public function getFullName(){
            return "{$this->firstName} {$this->lastName}";
        }
        public function getBirthYear(){
            return date("Y") - $this->age;
        }
    }