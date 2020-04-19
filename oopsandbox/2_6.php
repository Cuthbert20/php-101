<?php
    class User{
        protected $name = "Spencer";
        protected $age;
    }

    class Customer extends User{
        // Customer now has access to User class properties and methods
        public function pay($amount){
            return $this->name . ' paid $'. $amount;
        }
    }

    $customer1 = new Customer();
    echo $customer1->pay(20);