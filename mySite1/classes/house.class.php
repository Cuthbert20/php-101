<?php
class House {
    private $address;
    private $city;
    private $state;
    private $zipcode;
    public function __construct($address, $city, $state, $zipcode){
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->zipcode = $zipcode;
    }
    # Static Property
    public static $realtor = 'Joey';
    # Static Method
    public static function setRealtor($agent){
        self::$realtor = $agent;
    }
    // Silly Function for fun.
    public function addZip(){
        $sum = 0;
        // Splitting string into an array
        $numbers = str_split($this->zipcode);
        foreach($numbers as $num){
            // I don't really need to change the data type from a string to a int because PHP will coerce the type for me but, for fun I will.
            $int = (int)$num;
            $sum += $int;
        }
        return $sum;
    }
}
?>