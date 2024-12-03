<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="left">
                <div class="cabeçalho">
                    <div class="logo">
                        <img src="livraria.png.png">
                    </div>
                    <div class="pesquisa">
                        <input type="text" placeholder="Pesquisar...">
                    </div>

                </div>
            </div>
            <div class="right">
                <div class="icons">
                    <a href="carrinho.php" target="_blank">
                    <img src="carrinho2.png" alt="">
                    </a>
                </div>
                <div class="icons">
                    <a href="login.php" target="_blank">
                    <img src="perfil2.png">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <br>

    <div class="form-container">
        <h2>Lista de Livros Cadastrados</h2>
        <!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Livros</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Lista de Livros Cadastrados</h1>
    
    <!-- Tabela de Livros -->
    <table class="book-table">
      <thead>
        <tr>
          <th>Título</th>
          <th>Autor</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <!-- Os dados dos livros serão preenchidos aqui -->
        <tr>
          <td>Dom Casmurro</td>
          <td>Machado de Assis</td>
          <td class="actions">
            <button class="action-btn view-btn">Visualizar</button>
            <button class="action-btn edit-btn">Editar</button>
            <button class="action-btn delete-btn">Remover</button>
            <button class="action-btn buy-btn">adicionar</button>
          </td>
        </tr>
        <tr>
          <td>O Primo Basílio</td>
          <td>José de Alencar</td>
          <td class="actions">
            <button class="action-btn view-btn">Visualizar</button>
            <button class="action-btn edit-btn">Editar</button>
            <button class="action-btn delete-btn">Remover</button>
            <button class="action-btn buy-btn">adicionar</button>
          </td>
        </tr>
        <!-- Repita os tr acima para exibir mais livros -->
      </tbody>
</table>

    <!-- Paginação -->
    <div class="pagination">
      <button class="pagination-btn">« Anterior</button>
      <span>Página 1 de 5</span>
      <button class="pagination-btn">Próximo »</button>
    </div>
  </div>
</body>
</html>

    </div>


    
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Livraria Virtual. Todos os direitos reservados.</p>
            <div class="footer-links">
                <a href="#">Política de Privacidade</a> | 
                <a href="#">Termos de Serviço</a> | 
                <a href="#">Contato</a>
            </div>
        </div>
    </footer>
    
</body>
</html>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Arial', sans-serif;
  background-color: #f4f4f4;
  color: #333;
}

.container {
  width: 80%;
  margin: 50px auto;
  padding: 20px;
  background-color: #333;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
}

h1 {
  text-align: center;
  color: #4CAF50;
  margin-bottom: 20px;
}

/* Estilos para a Tabela */
.book-table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

.book-table th, .book-table td {
  padding: 12px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

.book-table th {
  background-color: #4CAF50;
  color: white;
}

.actions {
  display: flex;
  gap: 10px;
}

.action-btn {
  padding: 6px 12px;
  font-size: 14px;
  cursor: pointer;
  border: none;
  border-radius: 5px;
  transition: all 0.3s ease-in-out;
}

.view-btn {
  background-color: #2196F3;
  color: white;
}

.edit-btn {
  background-color: #ff9800;
  color: white;
}

.delete-btn {
  background-color: #f44336;
  color: white;
}

.action-btn:hover {
  opacity: 0.8;
}

/* Estilos de Paginação */
.pagination {
  text-align: center;
  margin-top: 20px;
}

.pagination-btn {
  padding: 10px 20px;
  font-size: 16px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.pagination-btn:hover {
  background-color: #45a049;
}

.pagination-btn:disabled {
  background-color: #ddd;
  cursor: not-allowed;
}

.pagination span {
  margin: 0 10px;
  font-size: 16px;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #121212;
    color: #e0e0e0;
}

header {
    background-color: #1e1e1e;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #e0e0e0;
    height: 70px;
}
.btn-container img {
    width: 10px;
}
.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.cabeçalho {
    display: flex;
    align-items: center;
    gap: 20px;
}

.logo img {
    width: 50px;
    height: auto;
}

.pesquisa input {
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    background-color: #333333;
    color: #e0e0e0;
    width: 350px;
}

.icons img {
    width: 90px;
    justify-content: inline;
}

.promocoes {
    background-color: #333333;
    padding: 20px;
    text-align: center;
    border-radius: 8px;
    margin: 20px;
}

.promocoes h1 {
    color: #f0a500;
    font-size: 40px;
    margin-bottom: 15px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.promocoes p1 {
    color: #ffffff;
    font-size: 26px;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.promo-items {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 15px;
}

.promo-item {
    background-color: #1e1e1e;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    text-align: center;
    width: 180px;
    margin: 10px;
}

.promo-item img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    margin-bottom: 10px;
}

.promo-item p {
    font-size: 16px;
    color: #e0e0e0;
}


h2 {
    color: #f0a500;
    text-align: center;
    font-size: 28px;
    margin: 5px auto;
    padding: 20px;
}
.left {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    flex-grow: 1;
}

.right {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 5px; 
    flex-shrink: 0;
}

section {
    margin: 20px;
    padding: 20px;
    background-color: #1e1e1e;
    border-radius: 8px;
}

section h3 {
    color: #faa602;
    font-size: 22px;
    margin-bottom: 15px;
}

.categoria-items {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}

.categoria-items .item {
    background-color: #333333;
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    text-align: center;
    width: 150px;
}

.categoria-items .item img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    margin-bottom: 8px;
}

.categoria-items .item p {
    font-size: 16px;
    color: #e0e0e0;
}

.sobre-nos {
    background-color: #1e1e1e;
    padding: 20px 0;
    text-align: center;
}

.sobre-nos h2 {
    color: #f0a500;
    font-size: 32px;
    margin-bottom: 10px;
}

.sobre-nos p {
    font-size: 16px;
    color: #e0e0e0;
    line-height: 1.4;
    margin: 9px 0;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

footer {
    background-color: #333333;
    color: #f0a500;
    padding: 30px 0;
    text-align: center;
    border-top: 3px solid #f0a500;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

footer p {
    font-size: 16px;
    margin-bottom: 10px;
}

.footer-links {
    font-size: 14px;
    margin-top: 10px;
}

.footer-links a {
    color: #f0a500;
}

.footer-links a:hover {
    text-decoration: underline;
    color: #ffa726;
}
video{
    pointer-events: none;

}
</style>
<script>
document.querySelectorAll("section h3").forEach(function(header) {
    header.addEventListener("click", function() {
        const items = this.nextElementSibling;
        if (items) items.classList.toggle("hidden");
    });
});
</script>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Virtual</title>
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #e0e0e0;
        }
        .categoria-items {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .categoria-items .item {
            background-color: #333333;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 150px;
            position: relative;
        }
        .categoria-items .item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 8px;
        }
        .categoria-items .item p {
            font-size: 16px;
            color: #e0e0e0;
        }
        .btn-container {
            margin-top: 10px;
        }
        .btn {
            padding: 5px 10px;
            background-color: #f0a500;
            color: #121212;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px 0;
        }
        .btn:hover {
            background-color: #ffa726;
        }
        .cart {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #333333;
            padding: 15px;
            border-radius: 8px;
            color: #e0e0e0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            display: none;
        }
        .cart h3 {
            margin-bottom: 10px;
        }
        .cart-items {
            max-height: 200px;
            overflow-y: auto;
            margin-bottom: 10px;
        }
        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 5px;
        }
        .cart-item span {
            margin-right: 10px;
        }
        .close-cart {
            background-color: #f0a500;
            color: #121212;
            border: none;
            padding: 5px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>

    <div class="cart" id="cart">
        <h3>Seu Carrinho</h3>
        <div class="cart-items" id="cart-items"></div>
        <button class="close-cart" id="close-cart">Fechar Carrinho</button>
    </div>

    <script>
        const cart = [];
        const cartElement = document.getElementById('cart');
        const cartItemsElement = document.getElementById('cart-items');
        const closeCartButton = document.getElementById('close-cart');

        document.querySelectorAll('.add-cart-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const itemElement = e.target.closest('.item');
                const title = itemElement.getAttribute('data-title');
                const price = itemElement.getAttribute('data-price');

                cart.push({ title, price });
                updateCart();
                showCart();
            });
        });

        document.querySelectorAll('.buy-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const itemElement = e.target.closest('.item');
                const title = itemElement.getAttribute('data-title');
                const price = itemElement.getAttribute('data-price');

                alert(`Você comprou "${title}" por R$ ${price}.`);
            });
        });

        closeCartButton.addEventListener('click', () => {
            cartElement.style.display = 'none';
        });

        function updateCart() {
            cartItemsElement.innerHTML = '';
            cart.forEach(item => {
                const div = document.createElement('div');
                div.classList.add('cart-item');
                div.innerHTML = `<span>${item.title}</span> <span>R$ ${item.price}</span>`;
                cartItemsElement.appendChild(div);
            });
        }

        function showCart() {
            cartElement.style.display = 'block';
        }
    </script>
</body>
</html>
