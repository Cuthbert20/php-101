<?php
// echo date("d");   // Day
// echo date("m");   // Month
// echo date('Y');  // Year, lowercase y last two digits, uppercase Y all four digits of the year
// echo date('l'); //  Day of the week

// echo date("Y/m/d");  // Year Month Day

//TIME
// echo date('h'); // Hour
// echo date('i'); //Minutes
// echo date('s'); //Seconds
// echo date('a'); //AM or PM

// Set Time Zone
date_default_timezone_set("America/Denver");

// echo date('h:i:sa');  //Hour Minutes Seconds AM/PM

/* Creating a timestamp which is a long integer containing the number of seconds
between the Unix Epoch (January 1 1070 00:00:00 GMT) and the time specified.

*/
$timeStamp = mktime(10, 14, 54, 9, 10, 1991);
// echo $timeStamp;
// Converting timestamp into a readable date.
echo date('m/d/y H:i:sa', $timeStamp);

echo "<br>";
//converting string with time/date to date
$timeStamp2 = strtotime('7:00pm March 22 2019');
$timeStamp3 = strtotime('tomorrow');
$timeStamp4 = strtotime("next Sunday");
$timeStamp5 = strtotime('+2 Months'); // could be days, months, years, ect.
$timeStamp6 = strtotime('Christmas');
// echo $timeStamp2;
echo date('m/d/y H:i:sa', $timeStamp6);
?>