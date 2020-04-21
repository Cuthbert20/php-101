<?php
    include 'config.php';

    class Dbh{
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pwd = DB_PASS;
        private $dbName = DB_NAME;

        protected function connect(){
            # setting us DSN Data Source Name. describes exactly what type of database we're going to be using, what host we will be using and the name of the database we will be using.
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            # Create a PDO connection using PDO class.
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            # we are setting our connection so that our query's return objects.
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $pdo;
        }
    }
