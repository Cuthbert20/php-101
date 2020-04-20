<?php
    include_once('abstract/paymentTypes.abstract.php');
    include_once('classes/BuyProduct.class.php');

    $buyProducts = new BuyProduct();
    echo $buyProducts->getPayment();

    # Side note in JS $val would === a string of "11" in PHP the result will be an int 2
    $val = "1" + "1";
    echo '<br>'. $val;
    echo '<br>';
    echo gettype($val);