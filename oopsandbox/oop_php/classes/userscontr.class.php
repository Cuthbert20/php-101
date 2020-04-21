<?php
    // userscontrl.class.php will be the Controller for our MVC
    // The controller is where we get values from the user for our SQL Statements when updating, inserting, ect. to the DB.
include 'users.class.php';
class UsersContr extends Users{


    public function createUser($first, $last, $dob){
        // Running method from Users class which is our model.
        $this->setUser($first, $last, $dob);
    }
}