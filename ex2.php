<?php

//2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas)

$numbers = [
       [1, 3, 5],
       [55, 87, 100],
       [12],
       [],
];

function exercise2 (array $myArr): int{
    $output = 1;
    foreach ($myArr as $value){
        foreach ($value as $ndValue) {
                $output *= $ndValue;
        }
    }
    return $output;
}

var_dump(exercise2($numbers));
