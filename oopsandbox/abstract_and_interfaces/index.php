<?php
include './inc/autoloader.inc.php';

$controller = new UsersController(new LogToDatabase());
$controller->show();
echo '<br>';
$controller2 = new UsersController(new LogToFile());
$controller2->show();
echo "<br>";
$drink = new Tea();
$drink->make();
echo '<hr>';
$drink2 = new Coffee();
$drink2->make();
//echo get_include_path();
//echo __DIR__ . '/interfaces/Logger.php';