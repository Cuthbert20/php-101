<?php
declare(strict_types = 1);
    class Kennel{
        private $address;
        private $zipcode;

        public function __construct(string $address, int $zipcode)
        {
            $this->address = $address;
            $this->zipcode = $zipcode;
        }

        public function __get($name)
        {
           return $this->$name;
        }
    }
