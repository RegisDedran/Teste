<?php
include ("conect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = trim($_POST['nome']);
    $categoria = trim($_POST['categoria']);
    $descricao = trim($_POST['descricao']);
    $valor = trim($_POST['valor']);
    $autor = trim($_POST['autor']);

    $sql = "INSERT INTO produto (nome, categoria, descricao, valor, autor) 
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conexao->prepare($sql);

    if ($stmt) {
        $stmt->bind_param(
            "sssss", 
            $nome,
            $categoria, 
            $descricao, 
            $valor, 
            $autor
        );
        
        if ($stmt->execute()) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $conexao->error;
    }
    $conexao->close();
}