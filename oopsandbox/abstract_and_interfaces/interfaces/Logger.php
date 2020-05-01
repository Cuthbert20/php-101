<?php
//    We know that an interface is defined by the interface keyword and all methods are abstract.
//    All methods declared in an interface must be public; this is simply the nature of an interface.
    interface Logger{
        public function execute($message);
    }