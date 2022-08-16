<?php
//3.     Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
//Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
//      Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (3 balai)
//
//Destination "Paris".
//Titles: "Romantic Paris", "Hidden Paris"
//Total: 99500
//************
//Destination "New York"
//      ...

   $holidays = [
       [
           'title' => 'Romantic Paris',
           'destination' => 'Paris',
           'price' => 1500,
           'tourists' => 55,
       ],
       [
           'title' => 'Amazing New York',
           'destination' => 'New York',
           'price' => 2699,
           'tourists' => 21,
       ],
       [
           'title' => 'Spectacular Sydey',
           'destination' => 'Sydey',
           'price' => 4130,
           'tourists' => 9,
       ],
       [
           'title' => 'Hidden Paris',
           'destination' => 'Paris',
           'price' => 1700,
           'tourists' => 10,
       ],
       [
           'title' => 'Emperors of the past',
           'destination' => 'Beijing',
           'price' => null,
           'tourists' => 10,
       ],
   ];

function exercise3(array $myArr): void {
    $dest = [];
    foreach ($myArr as $value){
        if ($value['price']!== null){
            $dest[] = $value['destination'];
        }
    }
    $unDest = array_unique($dest);
    foreach ($unDest as $ndValue){
        echo 'Destination "' . $ndValue . '".' . PHP_EOL . 'Titles: ';
        foreach ($myArr as $value){
            if ($value['destination'] === $ndValue && $value['price']!==null){
                echo '"' . $value['title'] . '", ';
            }
        }
        $sum = 0;
        foreach ($myArr as $value){
            if ($value['destination'] === $ndValue && $value['price']!==null){
            $sum += $value['price'] * $value['tourists'];
            }
        }
        echo PHP_EOL . 'Total: ' . $sum . PHP_EOL . '*****************' . PHP_EOL;
    }
}

exercise3($holidays);
