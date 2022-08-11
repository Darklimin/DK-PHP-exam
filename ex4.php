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

function exercise4(array $myArr): void
{
    $fileName = './ex4output.txt';
    $dest = [];
    foreach ($myArr as $value) {
        if ($value['price'] !== null) {
            $dest[] = $value['destination'];
        }
    }
    $unDest = array_unique($dest);
    foreach ($unDest as $ndValue) {
        $content = 'Destination "' . $ndValue . '".' . PHP_EOL . 'Titles: ';
        file_put_contents($fileName, $content, FILE_APPEND);
        foreach ($myArr as $value) {
            if ($value['destination'] === $ndValue) {
                $content = '"' . $value['title'] . '", ';
                file_put_contents($fileName, $content, FILE_APPEND);
            }
        }
        $sum = 0;
        $content = PHP_EOL . 'Total: ';
        file_put_contents($fileName, $content, FILE_APPEND);
        foreach ($myArr as $value) {
            if ($value['destination'] === $ndValue) {
                $sum += $value['price'] * $value['tourists'];
            }
        }
        $content = $sum . PHP_EOL . '*****************' . PHP_EOL;
        file_put_contents($fileName, $content, FILE_APPEND);
    }
}

exercise4($holidays);

