<?php
include("conect.php");

// Inserir novo produto
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome']) && isset($_POST['categoria']) && isset($_POST['descricao']) && isset($_POST['valor']) && isset($_POST['autor'])) {
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $autor = $_POST['autor'];

    $sql = "INSERT INTO produto (nome, categoria, descricao, valor, autor) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sssss", $nome, $categoria, $descricao, $valor, $autor);

    if ($stmt->execute()) {
        echo "<script>alert('Produto adicionado com sucesso!');window.location.href='Editar_produtos.php';</script>";
    } else {
        echo "<script>alert('Erro ao adicionar produto!');window.location.href='Editar_produtos.php';</script>";
    }

    $stmt->close();
}

// Deletar produto
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM produto WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Produto excluído com sucesso!');window.location.href='Editar_produtos.php';</script>";
    } else {
        echo "<script>alert('Erro ao excluir produto!');window.location.href='Editar_produtos.php';</script>"; 
    }

    $stmt->close();
}

$sql = "SELECT * FROM produto";
$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Produtos</title>
</head>
<body>
    <header>
        <h1>Gerenciar Produtos</h1>
    </header>

    <!-- Formulário de Adicionar Produto -->
    <section>
        <h2>Adicionar Novo Produto</h2>
        <form method="POST" action="">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required><br>

            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" required><br>

            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" required><br>

            <label for="valor">Valor:</label>
            <input type="text" name="valor" required><br>

            <label for="autor">Autor:</label>
            <input type="text" name="autor" required><br>

            <button type="submit">Adicionar Produto</button>
        </form>
    </section>

    <!-- Tabela de Produtos -->
    <section>
        <table class="tabela_usuario">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Autor</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row["nome"]); ?></td>
                            <td><?php echo htmlspecialchars($row["categoria"]); ?></td>
                            <td><?php echo htmlspecialchars($row["descricao"]); ?></td>
                            <td><?php echo htmlspecialchars($row["valor"]); ?></td>
                            <td><?php echo htmlspecialchars($row["autor"]); ?></td>
                            <td class="acoes">
                        
                                <button class="btn btn-editar" onclick="openEditModal(<?php echo $row['id']; ?>, '<?php echo htmlspecialchars($row['nome']); ?>', '<?php echo htmlspecialchars($row['categoria']); ?>', '<?php echo htmlspecialchars($row['descricao']); ?>', '<?php echo htmlspecialchars($row['valor']); ?>', '<?php echo htmlspecialchars($row['autor']); ?>')">Editar</button>
                                <a href="?id=<?php echo $row['id']; ?>" class="btn btn-deletar" onclick="return confirm('Tem certeza que deseja excluir este produto?')">Deletar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" style="text-align: center;">Nenhum produto encontrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </section>
    <!-- Modal de Edição -->
    <div id="editModal" class="modal">
        <!-- Caixa de Pesquisa -->
        <div class="modal-content">
            <span class="close" onclick="closeEditModal()">&times;</span>
            <h2>Editar Produto</h2>
            <form id="editForm" method="POST" action="editar_produto.php">
                <input type="hidden" id="productId" name="id">
                
                <label for="editNome">Nome:</label>
                <input type="text" id="editNome" name="nome" required><br><br>

                <label for="editCategoria">Categoria:</label>
                <input type="text" id="editCategoria" name="categoria" required><br><br>

                <label for="editDescricao">Descrição:</label>
                <input type="text" id="editDescricao" name="descricao" required><br><br>

                <label for="editValor">Valor:</label>
                <input type="text" id="editValor" name="valor" required><br><br>

                <label for="editAutor">Autor:</label>
                <input type="text" id="editAutor" name="autor" required><br><br>

                <button type="submit">Salvar Alterações</button>
            </form>
        </div>
    </div>

    <script>
        // Função para abrir o modal de edição e preencher os campos
        function openEditModal(id, nome, categoria, descricao, valor, autor) {
            document.getElementById("productId").value = id;
            document.getElementById("editNome").value = nome;
            document.getElementById("editCategoria").value = categoria;
            document.getElementById("editDescricao").value = descricao;
            document.getElementById("editValor").value = valor;
            document.getElementById("editAutor").value = autor;
            document.getElementById("editModal").style.display = "block";
        }

        // Função para fechar o modal
        function closeEditModal() {
            document.getElementById("editModal").style.display = "none";
        }

        // Fecha o modal se o usuário clicar fora dele
        window.onclick = function(event) {
            if (event.target == document.getElementById("editModal")) {
                closeEditModal();
            }
        }
    </script>
</body>

</html>

<style>
    /* Estilos da página */
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

    form {
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    form label {
        display: block;
        margin-bottom: 8px;
    }

    form input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    form button {
        background-color: #c0392b;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    form button:hover {
        background-color: #080808;
    }

</style>
