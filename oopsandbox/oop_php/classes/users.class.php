<?php
    // users.class.php will be the Model of our MVC.
    // The model interacts with the Database.
    include 'dbh.class.php';

    class Users extends Dbh{

        protected function getUser($first){
            $sqlQuery = "SELECT * FROM users WHERE users_first = ?";
            $stmt = $this->connect()->prepare($sqlQuery);
            // When we run the execute method the value that we pass in, is what replaces the question mark ? in our sql query/statement.
            $stmt->execute([$first]);

            // We already set a fetch mode in our dbh class ie PDO::FETCH_ASSOC so we don't need to pass it in to fetchAll()
            $results = $stmt->fetchAll();
            # we will use the results in our View ie. usersview class.
            return $results;
        }

        protected function setUser($first, $last, $dob){
            $sqlQuery = "INSERT INTO users (users_first, users_last, users_dob) VALUES (?,?,?)";
            $stmt = $this->connect()->prepare($sqlQuery);

            try{
                $stmt->execute([$first, $last, $dob]);
            }catch(TypeError $e){
                echo "Error Message: " . $e->getMessage();
            }
        }
    }