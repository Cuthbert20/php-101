<?php
    declare(strict_types = 1);
    // Define a class
    class User{
        // Properties ie (attributes)
        private $name;
        private $email;
        # Remember that the constructor function runs every time we create a new object! so does a destructor
    public function __construct(string $name, string $email)
    {
            // Using magic Constant __CLASS__ give us access to the class name. There are other magic Constants
            echo 'Class ' . __CLASS__ . " constructor function ran <br>";
        $this->name = $name;
        $this ->email = $email;
    }

        // Methods ie (functions)
        public function getName() :string {
            return $this->name;
        }
        # destructorcalled when no other references to a certain object
        # is used for clean up, closing connections to databases, things like that
        public function __destruct()
        {
            echo "<br> destruct ran... for each instance of the User class";
        }
    }

    // Instantiate a user from the User class.
    $user1 = new User("Spencer", "spencer@me.com");
    echo $user1->getName() . " is Awesome ;)";

    echo '<br>';

    $user2 = new User("Cody", "cody@me.com");
    echo $user2->getName();
