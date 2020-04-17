<?php
    declare(strict_types = 1);
    # Count the vowels
$str = "abracadabra";
    function countVowels(string $str){
        echo preg_match_all('/[aeiou]/i', $str);

}
//countVowels($str);

    # Even or Odd create a static method that returns even or odd in a class from a static property.
class Number {
        public static $number = 7;
        public static function evenOdd(){
            return self::$number % 2 === 0 ? "Even" : "Odd";
        }
}
//echo Number::evenOdd();

    # Get the Middle Character, if str is has odd length middle char, even length grab to chars in middle.
class Words{
        private static $str = "middles";
        public static function middleCharacter(){
            if(strlen(self::$str) % 2 === 0){
                return substr(self::$str, strlen(self::$str)/2 -1,2);
            }else{
                $index = floor(strlen(self::$str) /2);
                return substr(self::$str, (int)$index,1);
//                return $index;
            }
        }
}
//echo Words::middleCharacter();

    # Return Highest and Lowest number in a string;
class Value{
        private $numbers;
        public function __construct($numbers)
        {
            $this->numbers = $numbers;
        }
        public function highLow() : string {
            $arr = explode(" ",$this->numbers);

            # Solving with for loop for practice with loops.
            /*
            $high = $arr[0];
            $low = $arr[0];
            for($i = 0; $i < count($arr); $i++){
                if($arr[$i] < $low){
                    $low = $arr[$i];
                }
                if($arr[$i] > $high){
                    $high = $arr[$i];
                }
           }

            var_dump($arr);
            return "{$high} {$low}";
            */
            # Solving using min and max functions
            return max($arr) . " " . min($arr);
        }
}
//$value1 = new Value("8 3 -5 42 -1 0 0 -9 4 7 4 -4");
//echo $value1->highLow();


