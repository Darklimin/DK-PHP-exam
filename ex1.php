<?php

//1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas)

$numbers = [
    15,
    55,
    66,
    91,
    100,
    995,
    17,
    550,
];

function exercise1(array $myArr): int
{
    $sum = 0;
    foreach ($myArr as $value) {
        if ($value % 2 === 0) {
            $sum += $value;
        }
    }
    return $sum;
}

var_dump(exercise1($numbers));