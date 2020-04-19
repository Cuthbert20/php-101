<?php
include "include/calc.inc.php";

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $cal = $_POST['cal'];

    $calculator = new Calc($num1, $num2, $cal);
    echo '<h1>' . $calculator->calcMethod() . ' is the result</h1>';
