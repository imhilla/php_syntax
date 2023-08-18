<?php
// to create constant use define

define("GREETING", "Welcome to W3Schools.com");
echo GREETING;

echo "<br>";
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);

echo cars[0];

// constants are global
define("NEWGREETING", "Welcome to W3Schools.com");
function myTest()
{
    echo NEWGREETING;
}
echo "<br>";
myTest();
