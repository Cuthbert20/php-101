<?php
declare(strict_types = 1);
# Interfaces are blueprints that classes follow when using the keyword
# Interfaces also help with type declaration, below I don't know what class will be passed into the pay method on BuyProduct class so...
# I am using the interface PaymentMethod so that it knows which instance/obj of a class that I will be passing in references the interface PaymentMethod.
// Interfaces
interface PaymentInterface{
    # what rules do that classes that want to use this interface, need to follow? They need to have a method called payNow();
    public function payNow();
}
    # Now the classes below that implement PaymentInterface are following the PaymentInterface interfaces rules.
class Paypal implements PaymentInterface {
    public function payNow(){
    }
}

class Visa implements PaymentInterface {
    public function payNow(){}
}

class Cash implements  PaymentInterface {
    public function payNow(){
        echo 'paid';
    }
}

class BuyProduct{
    public function pay(PaymentInterface $paymentType){
    $paymentType->payNow();
    }
}

$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);