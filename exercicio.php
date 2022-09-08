<?php

$contDiv = 0;  // 
$primos = []; 

$limite = 12;

for ($numero = 3; $numero < $limite; $numero++) {
    $contDiv = 0;

    // echo "numero: " . $numero . "<br>";

    for ($numeroDescontar = $numero; $numeroDescontar > 1; $numeroDescontar--) {
        // echo "numeroDescontar: " . $numeroDescontar . "<br>";

        $resto = $numero % $numeroDescontar;

        if ($resto == 0) {
            $contDiv++;
        }
    }


    if ($contDiv == 1) {
        $primos[] = $numero;
    }
}

echo implode(",", $primos);

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; //30
// MDC Maximo Divisor Comun
// 15 10 - 5

$contDiv = 0; //

$limite 12

for ($numero = 0; $numero < $limite; $numero++) {
    $contDiv 0;

    echo // "numero: " .$numero . "<br>";

    
}

   



