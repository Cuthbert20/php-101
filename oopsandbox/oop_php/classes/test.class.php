<?php
    include 'dbh.class.php';
    class Test extends Dbh{

        # Interacting with the DataBase
        # First working with the DB without prepaid statements. because right now we don't have a user input we just want to fetch from the DB.
        public function getUsers(){
            # mySQL Statement/Query
            $sqlQuery = "SELECT * FROM users";
            $stmt = $this->connect()->query($sqlQuery);
            # while statment
            while($row = $stmt->fetch()){
//                echo count($row);
                echo $row['users_first'] . " " . $row['users_last'] . '<br>';
            }
        }

    }
