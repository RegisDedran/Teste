
<?php 
/*
include_once("conect.php");

if (isset($_GET["id"])) {
    // Obtém o ID do usuário a ser excluído a partir do parâmetro GET
    $id = $_GET["id"];
    
    // Cria a consulta SQL para deletar o registro com o ID especificado
    // Nota: Esta abordagem é vulnerável a SQL Injection. Use prepared statements para mais segurança.
    $sql = "DELETE FROM tb_clientes WHERE ID_CLIENTES=$id";

    // Executa a consulta SQL
    if ($conexao->query($sql) === TRUE) {
        // Se a execução foi bem-sucedida, exibe uma mensagem de sucesso
        echo "Usuário excluído com sucesso!";
    } else {
        // Se a execução falhou, exibe uma mensagem de erro com detalhes do erro
        echo "Erro ao excluir usuário: " . $sql . "<br>" . $conexao->error;
    }
} else {
    // Exibe uma mensagem de erro caso nenhum ID tenha sido passado
    echo "ID não encontrado.";
}

// Fecha a conexão com o banco de dados
$conexao->close();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Listar Usuários</h1>
    </header>

    <section>
        <table class="tabela_usuario">
            <thead>
                <tr>
                    <th><strong>Nome</strong></th>
                    <th><strong>Email</strong></th>
                    <th><strong>Senha</strong></th>
                    <th><strong>Data de Nascimento</strong></th>
                    <th><strong>CPF</strong></th>
                    <th><strong>RG</strong></th>
                    <th><strong>Endereço</strong></th>
                    <th><strong>Cidade</strong></th>
                    <th><strong>Estado</strong></th>
                    <th><strong>Telefone</strong></th>
                    <th><strong>Celular</strong></th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </section>
</body>
</html>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        margin: 0;
        padding: 10px;
    }

    header {
        text-align: center;
        margin-bottom: 20px;
    }

    h1 {
        font-size: 36px;
        color: #2c3e50;
    }

    .tabela_usuario {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .tabela_usuario th, .tabela_usuario td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .tabela_usuario th {
        background-color: blue;
        color: white;
    }


</style>
*/
include_once("conect.php");

// Verifica se o ID foi enviado para exclusão
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM usuarios WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Usuário excluído com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao excluir usuário!');</script>";
    }

    $stmt->close();
}

// Consulta para listar todos os usuários
$sql = "SELECT * FROM usuarios";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Usuários</title>
</head>
<body>
    <header>
        <h1>Gerenciar Usuários</h1>
    </header>

    <section>
        <table class="tabela_usuario">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Data de Nascimento</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row["nome"]); ?></td>
                            <td><?php echo htmlspecialchars($row["email"]); ?></td>
                            <td><?php echo htmlspecialchars($row["senha"]); ?></td>
                            <td><?php echo htmlspecialchars($row["data_de_nascimento"]); ?></td>
                            <td><?php echo htmlspecialchars($row["cpf"]); ?></td>
                            <td><?php echo htmlspecialchars($row["rg"]); ?></td>
                            <td><?php echo htmlspecialchars($row["endereco"]); ?></td>
                            <td><?php echo htmlspecialchars($row["cidade"]); ?></td>
                            <td><?php echo htmlspecialchars($row["estado"]); ?></td>
                            <td><?php echo htmlspecialchars($row["telefone"]); ?></td>
                            <td><?php echo htmlspecialchars($row["celular"]); ?></td>
                            <td class="acoes">
                                <a href="editar.php?id=<?php echo $row['id']; ?>" class="btn btn-editar">Editar</a>
                                <a href="?id=<?php echo $row['id']; ?>" class="btn btn-deletar" onclick="return confirm('Tem certeza que deseja excluir este usuário?')">Deletar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="12" style="text-align: center;">Nenhum usuário encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </section>
</body>
</html>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        color: #333;
        margin: 0;
        padding: 20px;
    }

    header {
        text-align: center;
        margin-bottom: 30px;
    }

    h1 {
        font-size: 36px;
        color: #2c3e50;
        margin: 0;
    }

    .tabela_usuario {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .tabela_usuario th, .tabela_usuario td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        white-space: nowrap; /* Impede quebra de linha no texto */
        overflow: hidden;
        text-overflow: ellipsis; /* Garante que o texto longo seja cortado com "..." */
    }

    .tabela_usuario th {
        background-color: #2980b9;
        color: white;
        font-weight: bold;
    }

    .tabela_usuario tr:hover {
        background-color: #f1f1f1;
    }

    .acoes {
        display: flex;
        gap: 10px;
    }

    .btn {
        padding: 8px 16px;
        border: none;
        border-radius: 5px;
        color: #fff;
        text-align: center;
        cursor: pointer;
        font-weight: bold;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.3s;
    }

    .btn-editar {
        background-color: #3498db;
    }

    .btn-editar:hover {
        background-color: #2980b9;
    }

    .btn-deletar {
        background-color: #e74c3c;
    }

    .btn-deletar:hover {
        background-color: #c0392b;
    }

    .btn:active {
        transform: scale(0.98);
    }

</style>