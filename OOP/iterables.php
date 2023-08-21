<?php
function printIterable(iterable $myIterable)
{
    foreach ($myIterable as $item) {
        echo $item;
    }
}

$arr = ["a", "b", "c"];
printIterable($arr);