<?php

$numerito = "5";
var_dump($numerito);

$numerito = (int) $numerito;
var_dump($numerito);

$dias = 5.89;
var_dump($dias);

// No redondea, solo borra los decimales
$dias = (int) $dias;
var_dump($dias);


// Si convertimos a boolean, el 0 siempre será false
// Cualquier otro valor será true
$banderita = 0;
var_dump($banderita);

$banderita = (bool) $banderita;
var_dump($banderita);

echo "RETO*************** \n";

echo "\n";