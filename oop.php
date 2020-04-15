<?php
    class User{
        # Different Access Modifiers Public, Private, Protected.
        // Note -> is === to . notation in JavaScript.
        # Encapsulation:
        # With Encapsulation you want to keep your properties private or maybe protected if you are going to extend the class to a sub class.
        # Then we will create public methods to access those properties but, we want to keep our state (properties) private.
        private $name;
        private $email;
        private $admin;
        public function __construct($name, $email, $admin)
        {
            # Constructor runs every time a new instance/obj of the class is created
            echo __CLASS__ . " Created<br>";
            $this->name = $name;
            $this->email = $email;
            $this->admin = $admin;
        }
        # There is also a destruct method that can be used, I need to do more research on __destruct and what it is useful for.
        /*
        public function __destruct()
        {
            // TODO: Implement __destruct() method.
            echo __CLASS__ . " destroyed<br>";
        }
        */

        public static $company = "Utah School District";
        public static function setCompany($newCompany){
            self::$company = $newCompany;
        }
        # GETTER
        public function getName(){
            return $this->name;
        }
    }
    # Using static method and access static properties on user Class.
/*
    echo user::$company;
    echo "<br>";
    user::setCompany("Provo College");
    echo user::$company;
    echo "<br>";

    $userOne = new User("Stu", "stu@me.com", true);
    echo $userOne->getName()."<br>";
*/
    # Inheritance: a child/sub class can Inherit from a parent/super class see below.
    class Customer extends User{
        private $balance;

        public function __construct($name, $email, $admin, $balance)
        {
            $this->balance = $balance;
            # access to parent class using parent:: ie(similar to super() in javascript)
            parent::__construct($name, $email, $admin, $balance);
            echo 'A new '. __CLASS__ . " has been created with a balance of {$this->balance}";
        }

        public function getBalance(){
            return $this->balance;
        }
        public function setBalance($balance){
            $this->balance = $balance;
        }
    }

    $customerOne = new Customer("Spencer", "spencer@me.com", true, 500);
    echo"<br>" . $customerOne->getBalance() . "<br>";
