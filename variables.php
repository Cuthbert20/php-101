

<?php 
// make a comment
# make a comment
/*
multiline comment
*/
/* Variable rules of PHP
    - Prefix $ 
    - Start with a letter or an underscore
    - Only letters, numbers and underscores
    - Case sensitive
*/
/* 
    - Data Types in PHP
    String single or double quotes
    Integers pos or neg
    floats any number with a decimal point
    Booleans
    Arrays
    Objects
    NULL
    Resource ie a reference to a function or something like that
*/
//!Const in PHP
define("SERVER", 5001, true);
echo SERVEr;
$output = "Testing one two three ";
$num1 = 5;
$num2 = 6;
$sum =  $num1 + $num2;
$firstArray = ["me", "you"];
$firstArray[] = "Them";
$num = count($firstArray);
$firstArray[0] = ["test", "hi", 0, 99, false, true];

echo SERVER;
// echo $num . " ";
// echo count($firstArray) . "! ";
    // echo $sum;
    // echo $output; 
    // echo "There ";
    // print $output;
    echo $firstArray[0][3];

    // print_r($firstArray);
    /* 
    3 types of arrays
    indexed *like normal array in js
    Associative *Kinda Like JS Objects
    Multi-dimensional *Kina Like a nested array in JS
    */
    $carArray = ["Honda" => 30000, "Toyota" => 35000, "Tesla" => 90000];
    $carArray["Dodge"] = 27000;
    print_r($firstArray);
    print_r($output);
    var_dump($carArray);
    ?>
