<?php
declare(strict_types=1);
    abstract class Person{
//        What does each Person at a company need?
        protected $startDate;
        protected $salary;
        protected $name;
        protected $workSchedule;
        protected $initPto;

        public function __construct(string $startDate, int $salary, string $name, array $workSchedule, int $initPto)
        {
            $this->startDate = $startDate;
            $this->salary = $salary;
            $this->name = $name;
            $this->workSchedule = $workSchedule;
        }

    static $originYear = 2018;
        static public function dayOfWeek(){
            $today = getdate();
            return $today['weekday'];
        }

        static public function getYear(){
            $today = getdate();
            if($today['year'] > self::$originYear){
                return $today['year'];
            }else{
                return self::$originYear;
            }
        }

        abstract function ptoUsed();

        abstract function getDepartment();

        public function __destruct()
        {
            echo "Destroying " . __CLASS__ . "\n";
        }
}