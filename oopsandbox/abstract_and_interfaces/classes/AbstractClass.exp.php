<?php

abstract class AbstractClass{
//    Force Extending class to define this method
    abstract protected function getValue();

    public function printOut(){
        print $this->getValue() . "\n";
    }
}