<?php
// Inicia a sessão para recuperar o carrinho
session_start();

// Se o carrinho estiver vazio, exibe uma mensagem
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "Seu carrinho está vazio.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="carrinho.css"> <!-- Link para o arquivo CSS -->
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Carrinho de Compras</h1>
        </div>
    </header>
    
    <main class="cart-container">
        <div class="cart-items">
            <div class="cart-item">
                <img src="biblia_sagrada.png" alt="Imagem do Livro">
                <div class="item-info">
                    <h2>Bíblia Sagrada</h2>
                    <p><strong>Preço:</strong> R$ 50,00</p>
                    <p><strong>Quantidade:</strong> 1</p>
                </div>
                <div class="item-total">
                    <p>Total: R$ 50,00</p>
                </div>
            </div>
            <div class="cart-item">
                <img src="JogosVorazes.png" alt="Imagem do Livro">
                <div class="item-info">
                    <h2>Jogos Vorazes</h2>
                    <p><strong>Preço:</strong> R$ 40,00</p>
                    <p><strong>Quantidade:</strong> 2</p>
                </div>
                <div class="item-total">
                    <p>Total: R$ 80,00</p>
                </div>
            </div>
        </div>
        
        <div class="cart-summary">
            <h3>Resumo do Carrinho</h3>
            <p><strong>Subtotal:</strong> R$ 130,00</p>
            <p><strong>Frete:</strong> R$ 10,00</p>
            <p><strong>Total:</strong> R$ 140,00</p>
            <button class="checkout-button">Finalizar Compra</button>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Livraria Virtual. Todos os direitos reservados.</p>
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
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
}

header {
    background-color: #ffb6c1;
    width: 100%;
    padding: 20px;
    text-align: center;
    color: #fff;
}

header h1 {
    font-size: 24px;
}

.cart-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    width: 100%;
    max-width: 800px;
}

.cart-items {
    width: 100%;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    padding: 20px;
}

.cart-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #ddd;
    padding: 10px 0;
}

.cart-item:last-child {
    border-bottom: none;
}

.cart-item img {
    width: 80px;
    height: auto;
    border-radius: 5px;
}

.item-info h2 {
    font-size: 18px;
    color: #ff6b6b;
}

.item-info p {
    font-size: 14px;
    margin: 5px 0;
}

.item-total p {
    font-size: 16px;
    color: #333;
    font-weight: bold;
}

.cart-summary {
    width: 100%;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
}

.cart-summary h3 {
    font-size: 20px;
    color: #333;
    margin-bottom: 15px;
}

.cart-summary p {
    font-size: 16px;
    margin: 5px 0;
}

.checkout-button {
    background-color: #ff6b6b;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 15px;
}

.checkout-button:hover {
    background-color: #ff4a4a;
}

footer {
    background-color: #D8B7DD;
    color: #17468b;
    padding: 20px;
    text-align: center;
    width: 100%;
    margin-top: auto;
}


</style>