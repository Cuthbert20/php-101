<?php
require_once 'interfaces/Logger.php';
    class LogToDatabase implements Logger{
        public function execute($message){
            var_dump('log the message to a database :'. $message);
        }
    }
