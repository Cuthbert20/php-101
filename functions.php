<?php
    #FUNCTION - Block of code that can be repeatedly called.

    /*
    Different way to format function, variables, class, ect names.
    
    Camel Case myFunction() mostly used
    Lower Case my_function() 
    Pascal Case - MyFunction() used for Classes like in JS (Classes Constructor Functions)
    */
    // Simple function
    function simpleFunction(){
        echo "Hello There";
    }
    // simpleFunction();
    echo "<br>";
    // Function with param
    function sayHello($name = "No name"){
        echo "My name is " . $name;
        echo "<br>";
    }
    // sayHello("Spencer");
    // sayHello();

    // Function with return value
    function addNumbers($num1 = 0, $num2 = 0){
        return $num1 + $num2;
    }
    // echo addNumbers(9,9);
    // echo "<br>";
    // $sum = addNumbers(1,5);
    // echo $sum;

    // By Reference on addTen using & on param &$num
    $myNum = 10;
    function addFive($num){
        $num += 5;
    }
    function addTen(&$num){
        // & passed in by reference
        $num += 10;
    }
    addFive($myNum);
    echo " value: $myNum<br>";
    addTen($myNum);
    echo " value: $myNum<br>";
    
?>