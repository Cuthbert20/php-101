<?php
require_once 'interfaces/Logger.php';
    class UsersController{
        protected $logger;

        public function __construct(Logger $logger)
        {
            $this->logger = $logger;
            echo 'the constructor has ran of course';
        }

        public function show(){
            $user = 'Spencer';
            $this->logger->execute($user);
        }
    }
