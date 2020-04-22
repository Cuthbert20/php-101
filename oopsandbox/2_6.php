<?php
declare(strict_types = 1);
    class User{
        protected $name;
        protected $age;

        public function __construct(string $name, int $age)
        {
            $this->name = $name;
            $this->age = $age;
        }
    }

    class Customer extends User{
        private $balance;

        public function __construct(string $name, int $age, $balance)
        {
            parent::__construct($name, $age);
            $this->balance = $balance;
        }

        // Customer now has access to User class properties and methods
        public function pay(int $amount){
            return $this->name . ' paid $'. $amount;
        }

        public function getBalance(){
            return $this->balance;
        }
    }

    $customer1 = new Customer("Spencer", 37, 500);
    echo $customer1->pay(20) . '<br>';
    echo $customer1->getBalance();