<?php

// Echo sirve para imprimir cualquier cosa
echo "Hola programando con php \n";
// Siempre se debe cerrar la línea con un ; (punto y coma)

$nombre = "Carlos";
$apellido = "Santana";

// Se puede concatenar con . (punto)
echo "No, no. Yo me llamo " . $nombre . " " . $apellido . "\n";

// Otra forma más fácil de concatenar
// Solo funciona con comillas dobles
echo "No, no. Yo me llamo $nombre $apellido \n";

// Concatenar operaciones matemáticas
echo "El resultado de 4 x 5 es " . (4 * 5) . "\n";

/* La etiqueta de cierre no es necesaria si solo vas 
    a trabajar con php, en caso contrario, si vas a trabajar
    con html, si es necesario.
*/
?>