<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela De Login</title>
   
</head>
<body>

    <div class="login-container">
        <div class="login-form">
            <h1>Bem Vindo!!</h1>
            <p>Por favor, insira seus dados</p>
            <form action="livrariaon.php" method="post">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" required>

                <input type="submit" value="Entrar">
            </form>
            <a href="recuperar############">Esqueceu sua senha?</a>
            <p1>Ainda não possui uma conta? <a href="cadastro.php">Cadastre-se aqui</a></p1>
        </div>
        <div class="image-section">
            <img src="livraria.png.png" alt="Livros">
        </div>
    </div>
</body>
</html>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }
    p1{
        color:#808080;
        text-align: center;
        margin-top: 20px;
        font-size: 12px;
    }

    body {
        display: flex;
        height: 100vh;
        align-items: center;
        justify-content: center;
        background-color: #808080;
    }

    .login-container {
        display: flex;
        width: 900px;
        height: 500px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .login-form {
        background-color: #1e1e1e;
        color: #f0a500;
        width: 40%;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .login-form h1 {
        font-size: 32px;
        color: #f0a500;
        margin-bottom: 20px;
    }

    .login-form p {
        font-size: 14px;
        margin-bottom: 20px;
    }

    .login-form label {
        font-size: 14px;
        margin-top: 10px;
    }

    .login-form input[type="email"],
    .login-form input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 20px;
        border: none;
        border-radius: 4px;
        background-color: #F5F5F5;
        color: black;
    }
    .login-form input[type="submit"] {
    display: block;
    margin: 0 auto;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #f0a500;
    color: white;
    font-size: 16px;
}



    .login-form a {
        font-size: 12px;
        color: #888;
        margin-top: 10px;
        text-decoration: none;
        align-self: center;
    }

    .login-form a:hover {
        text-decoration: underline;
    }

    .image-section {
        width: 60%;
        background-color: #333;
        background-size: cover;
        background-position: center;
    }
</style>