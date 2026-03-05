<?php

$numeros = [5, 10, 15, 20, 25];

unset($numeros[2]);

echo "<h3>Elementos restantes:</h3>";

echo "Total de elementos: " . count($numeros) . "<br><br>";

foreach ($numeros as $num) {
    echo $num . "<br>";
}

?>