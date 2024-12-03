<?php
include ("conect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obter os dados do formulário
    $nome = trim($_POST['nome']);  
    $cpf = trim($_POST['cpf']);
    $rg = trim($_POST['rg']);
    $data_nasc = $_POST['data_nasc']; 
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $endereco = trim($_POST['endereco']);
    $cidade = trim($_POST['cidade']);
    $estado = trim($_POST['estado']);
    $telefone = trim($_POST['telefone']);
    $celular = trim($_POST['celular']);
    $email = trim($_POST['email']);

    // Validar senha e confirmação
    #if ($senha !== $confirmar_senha) {
    #    die("Erro: As senhas não coincidem.");
    #}

    // Hash da senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Prepara a instrução SQL
    $sql = "INSERT INTO usuarios (nome, email, senha, data_de_nascimento, cpf, rg, endereco, cidade, estado, telefone, celular) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexao->prepare($sql);

    if ($stmt) {
        // Liga os parâmetros
        $stmt->bind_param(
            "sssssssssss", 
            $nome, 
            $email, 
            $senha, 
            $data_nasc, 
            $cpf, 
            $rg, 
            $endereco, 
            $cidade, 
            $estado, 
            $telefone, 
            $celular
        );
        

        // Executa a declaração
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
?>
