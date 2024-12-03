<?php
include("conect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para buscar o produto pelo ID
    $sql = "SELECT * FROM produto WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verifica se o produto existe
    if ($result->num_rows > 0) {
        $produto = $result->fetch_assoc();
    } else {
        echo "<script>alert('Produto não encontrado!');window.location.href='Editar_produtos.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('ID inválido!');window.location.href='Editar_produtos.php';</script>";
    exit;
}

// Atualiza o produto no banco de dados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $autor = $_POST['autor'];

    $sql = "UPDATE produto SET nome = ?, categoria = ?, descricao = ?, valor = ?, autor = ? WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sssssi", $nome, $categoria, $descricao, $valor, $autor, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Produto atualizado com sucesso!');window.location.href='Editar_produtos.php';</script>";
    } else {
        echo "<script>alert('Erro ao atualizar produto!');</script>";
    }

    $stmt->close();
}

$conexao->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <header>
        <h1>Editar Produto</h1>
    </header>

    <section>
        <form method="POST" action="">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo htmlspecialchars($produto['nome']); ?>" required><br><br>

            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" value="<?php echo htmlspecialchars($produto['categoria']); ?>" required><br><br>

            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" value="<?php echo htmlspecialchars($produto['descricao']); ?>" required><br><br>

            <label for="valor">Valor:</label>
            <input type="text" name="valor" value="<?php echo htmlspecialchars($produto['valor']); ?>" required><br><br>

            <label for="autor">Autor:</label>
            <input type="text" name="autor" value="<?php echo htmlspecialchars($produto['autor']); ?>" required><br><br>

            <button type="submit">Salvar Alterações</button>
            <a href="Editar_produtos.php">Cancelar</a>
        </form>
    </section>
</body>
</html>
