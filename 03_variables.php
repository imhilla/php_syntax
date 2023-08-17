<?php
//$x = 5; // global scope
//
//function myTest()
//{
//    $x = 5;
//    echo "<p>Variable x inside function is: $x</p>";
//}
//
//myTest();
//
//echo "<p>Variable x outside function is: $x</p>";
//$x = 5;
//$y = 10;
//function myTest()
//{
//    global $x, $y;
//    $y = $x + $y;
//    echo $GLOBALS['y'];
//}
//
//myTest();
//
//echo $y;

function myTest()
{
    static $x = 0;
    echo $x . "<br>";
    $x++;
}
myTest();
myTest();
myTest();
myTest();
?>