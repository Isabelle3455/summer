<?php

$vetor = ["Maçã", "Banana", "Laranja", "Uva", "Manga"];

foreach ($vetor as $fruta) {
    echo $fruta . "<br>";
}

echo "<br>Após adicionar nova fruta:<br><br>";

$vetor[] = "Abacaxi";

foreach ($vetor as $fruta) {
    echo $fruta . "<br>";
}

?>