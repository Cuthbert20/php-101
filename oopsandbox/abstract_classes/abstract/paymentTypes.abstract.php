<?php
 // we can create an instance/obj of the Visa class because it is an abstract class.
abstract class Visa{
    public function visaPayment(){
        return "Perform a payment";
    }
    #NOTE If you have an abstract method in any class that class now has to be abstract.
    # Similar to how we create an interface with methods that have to exists on any class that is implementing that interface....
    # Any class that extends the abstract class Visa will have to include a method named getPayment();
    abstract function getPayment();
}
