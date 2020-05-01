<?php

require_once 'interfaces/Logger.php';
class LogToFile implements Logger{
    public function execute($message)
    {
        var_dump('log the message to a file :' . $message);
    }
}