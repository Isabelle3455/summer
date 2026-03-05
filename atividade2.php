<?php
$usuarios = [
    "admin" => ["senha" => "1234", "cargo" => "Administrador"],
    "joao" => ["senha" => "abcd", "cargo" => "Gerente"],
    "maria" => ["senha" => "5678", "cargo" => "Funcionária"]
];

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

echo "<h2>Resultado do Login</h2>";

if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario]['senha'] === $senha) {
    
    $cargo = $usuarios[$usuario]['cargo'];
    echo "Bem-vindo, <strong>$usuario</strong>!<br>";
    echo "Seu cargo é: <strong>$cargo</strong>";
    
} else {
    
    echo "Erro: Nome de usuário ou senha incorretos.";
}

?>