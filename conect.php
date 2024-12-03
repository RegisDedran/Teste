<?php
$host = 'localhost'; 
$usuario = 'root';
$senha = '2013028130';
$banco = 'Teste';

$conexao = new mysqli($host, $usuario, $senha, $banco);
if (!$conexao) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}
else {
    echo "Conexão bem sucedida";
}
?>