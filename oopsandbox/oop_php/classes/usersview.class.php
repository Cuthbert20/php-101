<?php
    // usersview.class.php will be the View for our MVC.
    // The View in MVC gets the data either from the controller or the Model and gives/shows it to the user. (Depending on how you set it up) We will get our data from the Controller.
    include 'users.class.php';
    class UsersView extends Users{

        public function showUser($first){
            // This is where we use the method from our Model ie users.class which give us an array with a nested associative array
            $results = $this->getUser($first);
            echo "Length of Results array: " . count($results) . "<br>";
            foreach($results as $row){
                echo "Full Name: " . $row['users_first'] . " " . $row['users_last'];
                echo "<br>" . $row['users_dob'] . "<br>";
            }
        }
    }