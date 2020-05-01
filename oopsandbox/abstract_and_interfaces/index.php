<?php
include './inc/autoloader.inc.php';

$test = new LogToDatabase();
$test->execute('test');
echo '<br>';
//echo get_include_path();
//echo __DIR__ . '/interfaces/Logger.php';