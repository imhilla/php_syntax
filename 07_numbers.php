<?php
$x = 5985;
var_dump(is_int($x));
echo "<br>";
$x = 10.365;
var_dump(is_float($x));
// casting strings, floats to integers
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;