<?php

$alunos = [
    "Aluno1" => ["nome" => "Carlos", "nota" => 8.5],
    "Aluno2" => ["nome" => "Ana", "nota" => 7.0],
    "Aluno3" => ["nome" => "Marcos", "nota" => 9.2]
];

$soma = 0;
$maiorNota = 0;
$melhorAluno = "";

foreach ($alunos as $aluno) {
    
    $soma += $aluno["nota"];
    
    if ($aluno["nota"] > $maiorNota) {
        $maiorNota = $aluno["nota"];
        $melhorAluno = $aluno["nome"];
    }
}

$media = $soma / count($alunos);

echo "<h3>Notas dos Alunos:</h3>";

foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno["nome"] . " - Nota: " . $aluno["nota"] . "<br>";
}

echo "<br>Média das notas: " . number_format($media, 2);
echo "<br>Maior nota: $maiorNota";
echo "<br>Aluno com maior nota: $melhorAluno";

?>