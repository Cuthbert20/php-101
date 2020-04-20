<?php


        # Extending Visa class to Buy Product so we have access to visaPayment method.
    class BuyProduct extends Visa{
        public function getPayment(){
            return $this->visaPayment();
        }
    }

