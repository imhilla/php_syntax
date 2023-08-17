<?php
// string type
$x = "Hello world!";
$y = "Hello world";
echo $x;
echo "<br>";
// integer
$x = 5985;
var_dump($x);
echo "<br>";
// float
$x = 10.365;
var_dump($x);
echo "<br>";
// boolean
$x = true;
$y = false;
// array
$cars = array("Volvo", "BMW", "Toyota");

// PHP Object
# class is a template for objects, and an object is an instance of a class
class Car
{
    public $color;
    public $model;

    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("black", "Volvo");
echo $myCar->message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();