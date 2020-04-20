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
                echo $row['users_first'] . " " . $row['users_last'] . ' ';
                echo "DOB: {$row['users_dob']}".'<br>';
            }
        }
        # getUsersStatement function will get a user input
        public function getUsersStmt($first, $last){
            # Prepaid sql Statement, which makes things safer.
            $sqlQuery = "SELECT * FROM users WHERE users_first = ? AND users_last = ?";
            # instead of querying the DataBase we want to prepare the sql statement without the user input
            $stmt = $this->connect()->prepare($sqlQuery);
            # Now we need to fill in the blanks (?) in our SQL Query above. Chronological.
            $stmt->execute([$first, $last]);
            $names = $stmt->fetchAll();

            foreach($names as $name){
                echo $name['users_first'] . "<br>";
                echo $name['users_last'] . "<br>";
                echo "DOB: " . $name['users_dob'] . "<hr>";
            }
        }

    }
