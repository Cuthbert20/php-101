<?php
    /*
    Comparison operators
     == tests just value not data type
     === test for value && data type
     <
     >
     <=
     >=
     !=
     !==
    */

    /*
    define("SERVER", 5000, true);
    if(SERVER === 5000){
        echo SERVER;
    }
    $num = 15;
    if($num === 5){
        echo "Number is 5";
    }elseif($num === 6){
        echo "Number is 6";
    }else{
        $num = "Test";
        echo "$num";
    }

    */

    # NESTING IF STATMENTS
    // $num = 5;
    // if($num > 5){
    //     if($num < 10){
    //         echo "$num passed";
    //     }
    // }

    /*
    and &&
    or ||
    xor Exclusive OR *MEANS ONLY ONE CONDITIONAL CAN BE TRUE.
    */
        // $num = 5;
        // if($num === 9 || $num > 3){
        //     echo "it worked";
        // }

    #SWITCH
    $remiColor = "blue";
    //converting to lowercase
    switch(strtolower($remiColor)){
        case 'red':
            echo "Your Fav Color is Red";
            break;
        case 'blue':
            echo "Your Fav Color is Blue";
            break;
        default:
            echo "Your Fav Color is some other color";
            break;
    }

?>