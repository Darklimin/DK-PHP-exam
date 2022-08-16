<?php

//6. Parašykite programą, kuri per argumentų padavimą terminale paleidžiant funkciją juos priimtų
// ir juos sudaugintų tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra
// paduodamas ne skaičius, reikia, kad terminale gautumėme atitinkamą klaidos kodą ir pranešimą. (2 balai)

function exercise6($firstArg, $secondArg): void{
    if (is_numeric($firstArg) && is_numeric($secondArg)){
        echo ($firstArg * $secondArg)**2;
    } else {
        echo "Error. Entered arguments wasn't integers.";
    }
}

exercise6($argv[1], $argv[2]);