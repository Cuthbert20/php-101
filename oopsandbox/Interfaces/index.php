<?php
declare(strict_types = 1);
# Interfaces are blueprints that classes follow when using the keyword
# Interfaces also help with type declaration, below I don't know what class will be passed into the pay method on BuyProduct class so...
# Using PaymentInterface any class that implements this interface will have to follow the rules set by the interface ie. must have a public function call payNow()
// Interfaces
interface PaymentInterface{
    # what rules do that classes that want to use this interface, need to follow? They need to have a method called payNow();
    public function payNow();
    // interface can have several rules
    public function paymentProcess();
}

# Second Interface, ie another set of rules.
interface LoginInterface{
    public function loginFirst();
}

    # Now the classes below follow rules that are implemented by the interface that the class implements;
class Paypal implements PaymentInterface, LoginInterface {
    // with paypal you would need to loginFirst() before paying unlike Cash or Visa.
    public function loginFirst(){}
    public function payNow(){
        echo 'Logged in and paid with paypal';
    }
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}

class BankTransfer implements PaymentInterface, LoginInterface{
    public function loginFirst(){
        // TODO: Implement loginFirst() method.
    }
    public function payNow(){
        echo 'Paid using bank transfer';
    }
    public function paymentProcess(){
        $this->loginFirst();
        $this->payNow();
    }
}

class Visa implements PaymentInterface {
    public function payNow(){
        echo 'paid with Visa';
    }
    public function paymentProcess(){
        $this->payNow();
    }
}

class Cash implements  PaymentInterface {
    public function payNow(){
        echo 'paid with cash';
    }
    public function paymentProcess(){
        $this->payNow();
    }
}

class BuyProduct{
    public function pay(PaymentInterface $paymentType){
    $paymentType->paymentProcess();
    }
}

$paymentType = new BankTransfer();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);