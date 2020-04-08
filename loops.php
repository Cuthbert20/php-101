<?php
# LOOPS - Execute code set number of times, just like in JS.

/*
For
While
Do..While
Foreach
*/

#For Loop
$output = 1;
# @params - initializer, condition, increment
for($i = 3; $i <= 10; $i++){
    // echo "Number " . $i; 
    // echo '<br>';
 $output += $i;
}
// echo $output;

#While Loop
# @params -condition
/*
$i = 0;
while($i < 10){
    echo $i;
    echo '<br>';
    $i++;
}
*/
# Do While Loop, similar to while loop excep tthe truth expression
# is checked at the end of each iteration instaed of in the begining.
# Main Difference from while loops is that the first iteration of a do-while loop
# is guaranteed to run.
# @params - condition
# EXP
/*
$i = 0;
do {
    echo "Number " . $i;
    $i++; 
} while($i > 1);
*/
# Foreach Lopp - For Arrays!
// $people = array("Spencer", "Brynne", "Ryker", "Remi");
// foreach ($people as $val){
//     echo $val;
//     echo "<br>";
// }
$people = ["Spencer" => 37, "Brynne" => 29, "Ryker" => 7, "Remi" => 2];
foreach($people as $person => $age){
    echo $person . ":";
    echo $age;
    echo "<br>";
}
?>