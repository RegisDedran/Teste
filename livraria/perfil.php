<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Perfil do Usuário</h1>
        </div>
    </header>
    <main class="profile-container">
        <div class="profile-card">
            <div class="profile-image">
                <img src="perfil.png" alt="Foto de Perfil">
            </div>
            <div class="profile-info">
                <h2>Nome do Usuário</h2>
                <p><strong>Email:</strong> usuario@exemplo.com</p>
                <p><strong>Endereço:</strong> Rua Exemplo, 123, Cidade, Estado</p>
                <p><strong>Telefone:</strong> (00) 1234-5678</p>
                <p><strong>Sobre:</strong> Apaixonado por livros e leitura, sempre em busca de novas aventuras e conhecimentos.</p>
            </div>
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

.profile-container {
    display: flex;
    justify-content: center;
    padding: 20px;
    width: 100%;
    max-width: 800px;
}

.profile-card {
    background-color: #ffffff;
    width: 100%;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    display: flex;
    align-items: center;
    flex-direction: column;
    text-align: center;
}

.profile-image img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    margin-bottom: 15px;
}

.profile-info h2 {
    font-size: 24px;
    color: #ff6b6b;
}

.profile-info p {
    margin: 5px 0;
    font-size: 16px;
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