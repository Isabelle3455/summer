<?php

$produto = [
    "nome" => "Notebook",
    "preco" => 3500.00,
    "estoque" => 15
];

echo "<h3>Dados do Produto:</h3>";

foreach ($produto as $chave => $valor) {
    echo "$chave: $valor <br>";
}

?>