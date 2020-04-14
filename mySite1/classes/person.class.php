<?php
class Person {
    # PROPERTIES
    private $name;
    private $age;
    private $hairColor;
    # METHODS
    public function __construct($name, $age, $hairColor){
        $this->name = $name;
        $this->age = $age;
        $this->hairColor = $hairColor;
    }
    # Static Properties
    public static $drinkingAge = 21;
    # Static Method
    public static function setDrinkingAge($newDA){
        self::$drinkingAge = $newDA;
    }
    # GETTER
    function getName(){
        return $this->name;
    }
}
?>