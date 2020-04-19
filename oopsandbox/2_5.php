<?php
declare(strict_types = 1);
    class Employee{
        private $name;
        private $age;

        public function __construct(string $name, int $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        # Getter
        // __get MAGIC METHOD we can get any property on the class now using this magic __get function.
        public function __get($property){
            if(property_exists($this, $property)){
                return $this->$property;
            }
        }
        # Setter
        public function __set($property, $value)
        {
            if(property_exists($this, $property)){
                $this->$property = $value;
            }
        }


    }
    $employee1 = new Employee('Spencer', 35);
    echo $employee1->__get('name') . '<br>';
echo $employee1->__get('age') . '<br>';
        $employee1->__set('name','Carey');
        $employee1->__set('age',36);
    echo $employee1->__get('name') . '<br>';
    echo $employee1->__get('age');
