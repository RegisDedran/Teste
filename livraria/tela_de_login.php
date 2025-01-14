<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Entrar</title>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

	</head>
	<body>
		<div class="container" id="container">
			<div class="form-container sign-up-container">
				<form action="livrariaon.php">
					<h1>Criar Conta</h1>
					<div class="social-container">
						<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
						<a href="https://github.com/RegisDedraan" class="social"><i class="fab fa-github"></i></a>
						<a href="#" class="social"><i class="fab fa-google"></i></a>
					</div>
					<span>Use seu nome, email e senha para cadastrar.</span>
					<input type="text" placeholder="Nome" required/>
					<input type="email" placeholder="Email" required/>
					<input type="password" placeholder="Senha" required/>
					<button>Entrar</button>
				</form>
			</div>
			<div class="form-container sign-in-container">
				<form action="livrariaon.php">
					<h1>Entrar</h1>
					<div class="social-container">
						<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
						<a href="https://github.com/RegisDedraan" class="social"><i class="fab fa-github"></i></a>
						<a href="#" class="social"><i class="fab fa-google"></i></a>
					</div>
					<span>Ou use sua conta</span>
					<input type="email" placeholder="Email" required />
					<input type="password" placeholder="Senha"  required/>
					<a href="#">Esqueceu sua senha?</a>
					<button>Entrar</button>
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
						<h1>Bem vindo de volta!</h1>
						<p>Já possui uma conta? se sim vamos entrar. Aperte o botão abaixo para entrar.</p>
						<button class="ghost" id="signIn">Entrar</button>
					</div>
					<div class="overlay-panel overlay-right">
						<h1>Bem vindo!</h1>
						<p>Já possui uma conta? se não vamos criar. Aperte o botão abaixo para criar.</p>
						<button class="ghost" id="signUp">Criar conta</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<style>
	@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background:  #121212;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
	color: #faa602;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
	color: #FFD700;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid black;
	background-color: #faa602;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #333333;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
	color: #DDDDDD;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #faa602;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #FFFFFF;
	background: -webkit-linear-gradient(to right, #8A0707, #000080);
	background: linear-gradient(to right, #8A0707, #000080);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
	color:#DDDDDD;
}

</style>
<script>
			const signUpButton = document.getElementById('signUp');
			const signInButton = document.getElementById('signIn');
			const container = document.getElementById('container');

			signUpButton.addEventListener('click', () => {
				container.classList.add('right-panel-active');
			});

			signInButton.addEventListener('click', () => {
				container.classList.remove('right-panel-active');
			});

		</script>
 