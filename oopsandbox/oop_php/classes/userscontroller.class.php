<?php

    class UsersController extends Users{
        public function foo(){
            echo "bar";
        }

        public function createUser($first, $last, $dob){
            $this->setUser($first, $last, $dob);
        }
    }