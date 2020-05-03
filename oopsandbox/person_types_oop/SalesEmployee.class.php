<?php
    declare(strict_types = 1);
    require_once 'Person.class.php';
    class SalesEmployee extends Person{
        private $compensation;
        private $clientList;
        private $currentPto;

    public function __construct($startDate, $salary, $name, $workSchedule, $initPto, float $compensation, array $clientList, int $currentPto)
    {
        $this->compensation = $compensation;
        $this->clientList = $clientList;
        $this->currentPto = $currentPto;
        parent::__construct($startDate, $salary, $name, $workSchedule, $initPto);
    }

        public function getDepartment()
        {
            return 'Sales';
        }
        public function ptoUsed()
        {
            return $this->initPto - $this->currentPto;
        }

        public function __destruct()
        {
            print "Destroying" .  __CLASS__ . "\n";
        }
    }