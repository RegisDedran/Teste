<?php
include 'conect.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e1e;
            color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            width: 500px;
            padding: 30px;
            background-color: #2c2c2c;
            border: 1px solid #444;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #f0a500;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #ddd;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #555;
            border-radius: 3px;
            font-size: 16px;
            background-color: #333;
            color: #f5f5f5;
        }
        .form-inline-group {
            display: flex;
            gap: 10px;
        }
        .form-inline-group .form-group {
            flex: 1;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #f0a500;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 20px;
            margin-top: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Cadastro</h2>
        <form action="insertuser.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome">
            </div>
            <div class="form-inline-group">
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf">
                </div>
                <div class="form-group">
                    <label for="rg">RG:</label>
                    <input type="text" id="rg" name="rg">
                </div>
                <div class="form-group">
                    <label for="data_nasc">Data de Nasc.:</label>
                    <input type="date" id="data_nasc" name="data_nasc">
                </div>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco">
            </div>
            <div class="form-inline-group">
                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade">
                </div>
                <div class="form-group">
                    <label for="estado">Estado:</label>
                    <input type="text" id="estado" name="estado">
                </div>
            </div>
            <div class="form-inline-group">
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone">
                </div>
                <div class="form-group">
                    <label for="celular">Celular:</label>
                    <input type="tel" id="celular" name="celular">
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email">
                </div>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha">
            </div>
            <div class="form-group">
                <label for="confirmar_senha">Confirmar Senha:</label>
                <input type="password" id="confirmar_senha" name="confirmar_senha">
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
