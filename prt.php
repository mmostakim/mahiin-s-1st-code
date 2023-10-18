<?php

// date seting

// echo "Today is " . date ("d") . "<br>";
// echo "Today is " . date ("jS") . "<br>";
// echo "Month is " . date ("F") . "<br>";
// echo "Month is " . date ("M") . "<br>";
// echo "Month is " . date ("m") . "<br>";
// echo "Month is " . date ("n") . "<br>";
// echo "year is " . date ("Y") . "<br>";
// echo "year is " . date ("y") . "<br>";
// echo "Full Date is " . date ("M-jS-Y") . "<br>";
// echo "Week day " . date ("D") . "<br>";
// echo "Week day " . date ("l") . "<br>";
// echo "Week day " . date ("n") . "<br>";
// echo "Week day " . date ("w") . "<br>";
// echo "Week day " . date ("z") . "<br>";
// echo "Week of the year " . date ("W") . "<br>";
// echo "Day's of the month " . date ("t") . "<br>";
// echo "Is this is leap year " . date ("L") . "<br>";


//time seting 

// echo "Hour is " . date ("h") . "<br>"; // 12 hours show korba
// echo "Hour is " . date ("H") . "<br>"; // 24 hours show korba
// echo "Hour is " . date ("G") . "<br>"; 
// echo "Hour is " . date ("g") . "<br>";
// echo "Minutes " . date ("i") . "<br>";
// echo "Seconds " . date ("s") . "<br>";
// echo "meridiam " . date ("a") . "<br>";
// echo "meridiam " . date ("A") . "<br>";

// echo "Time is " . date ("h:i:sa e") . "<br>";
// date_default_timezone_set('Asia/Dhaka');

// echo "Time & Date " . date ("d-m-y  h:i:sa ") . "<br>";
//  echo date( "d-m-y h:i:sa ", mktime(0,0,0,11,15,1998)) ."<br><br>";
//  date_default_timezone_set ("Asia/Dhaka");
//  echo date( "d-m-y h:i:sa ", gmmktime(0,0,0,11,15,1998))

// $d=mktime(11, 14, 54, 8, 12, 2014);
// date_default_timezone_set ("Asia/Dhaka");
// echo "Created date is " . date("Y-m-d h:i:sa", );

$date= date_create ("2003-11-15");

echo date_format ($date,"d/m/Y ". "l " . "L");





























































?>

