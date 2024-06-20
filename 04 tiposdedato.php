<?php

$numerito = "23";
var_dump($numerito);

$numerito = $numerito + 2;
var_dump($numerito);


$numerito = 10;
$numerito = $numerito + 0.5;
var_dump($numerito);

// PHP puede sumar string + int si encuentra un valor
// en el texto, sin embargo no está bien.
$papas = "10 papas en el costal";
$cuantas_papas_hay = $papas + 5;

echo $cuantas_papas_hay;

echo "\n";