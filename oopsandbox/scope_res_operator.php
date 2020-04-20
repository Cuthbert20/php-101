<?php
    // Scope Resolution Operator ::
    # Below I am going over different ways to use the scope resolution operator ie :: different key words
    # Key words such as parent, self, ect
    # I will also look at constants in PHP
    # const defines constants at complie time, whereas define() defines them at run time.
    # We can't use the const keyword to declare constant in conditional blocks, while with define() we can achieve that.
    class SuperClass {

        const EXAMPLE = "You can't change this because it is a constant";


        public static function test(){
           return self::EXAMPLE;
    }
    }
    // assigning $val the value of EXAMPLE constant.
    $val = SuperClass::EXAMPLE;
//    echo $val;

    //Extending SuperClass, SubClass will have access to public properties and methods
    class SubClass extends SuperClass{
        public static $staticProperty = "A static property!";

        public static function anotherTest(){
            echo parent::EXAMPLE . '<br>';
            echo self::$staticProperty;
        }
    }
    echo SubClass::test();
    echo '<br>';
    $val2 = SubClass::anotherTest();
    echo $val2;
