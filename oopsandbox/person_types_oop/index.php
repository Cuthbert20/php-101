<?php
    include_once 'Person.class.php';
    include_once 'SalesEmployee.class.php';

    echo Person::dayOfWeek() . "<br>";
    echo Person::getYear();
    $today = getdate();
    $newHire =  new SalesEmployee($today['weekday'], 70000, 'Stu', array('Monday',"Tuesday", "Wednesday", "Thursday", "Friday"),80, 2.0, array("Stokes", "BBQ House", "Loafers are Us"), 30);
    echo '<br>' . $newHire->ptoUsed();
    echo "<br>" . $newHire->__get('currentPto');