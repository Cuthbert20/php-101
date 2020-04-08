<?php
/* 3 types of arrays
indexed *like normal array in js
Associative *Kinda Like JS Objects
Multi-dimensional *Kina Like a nested array in JS
*/
$names = ["Bill", "Jill", "Jane", "Ken"];
echo $names[2];
$cars = array(array("Make" => "Honda", "Model" => "Civic"),
array("Make" => "Ford", "Model" => "F-150"),
array("Make" => "Chevy", "Model" => "Nova"),
[1,2,3,4]
);
echo $cars[2]["Model"];
?>