<?php
//abstract class ParentClass {
//    abstract public function someMethod1();
//    abstract public function someMethod2($name, $color);
//    abstract public function someMethod3();
//}
abstract class Car
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function intro();
}

class Audi extends Car
{
    public function intro()
    {
        return "Choose German quality! I'm an $this->name";
    }
}

$audi = new Audi("Audi");
echo $audi->intro();