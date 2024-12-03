<?php
include '../conect.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="icone.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Virtual</title>
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
    <video src="livraria2.mp4" width="100%" height="auto" loop autoplay muted controls></video>

    <section class="promocoes">
        <h1>Promoções Especiais</h1>
        <p1>Super descontos de até 50%!</p1>
        <div class="promo-items">
            <div class="promo-item" data-title="Bíblia Sagrada">
                <img src="bíblia_sagrada.png" alt="">
                <p>Bíblia Sagrada</p>               
                <p class="preco">De R$ 60,00 para R$ 40,00</p>
                <div class="btn-container">
                    <a href="pagamento.php">
                        <button class="btn buy-btn">Comprar</button>
                    </a>
                </div>
            </div>
            <div class="promo-item" data-title="Jogos Vorazes">
                <img src="jogos_vorazes.png" alt="">
                <p>Jogos Vorazes</p>
                <p class="preco">De R$ 100,00 para R$ 69,00</p>
                <div class="btn-container">
                    <a href="pagamento.php">
                        <button class="btn buy-btn">Comprar</button>
                    </a>
                </div>              
            </div>
            <div class="promo-item" data-title="Divergente">
                <img src="divergente.png">
                <p>Divergente</p>
                <p class="preco">De R$ 50,00 para R$ 35,00</p>
                <div class="btn-container">
                    <a href="pagamento.php">
                        <button class="btn buy-btn">Comprar</button>
                    </a>
                </div>
            </div>
            <div class="promo-item" data-title="Mogli - O livro da selva">
                <img src="mogli_o_menino_da_selva.png" alt="">
                <p>Mogli - O livro da selva</p>
                <p class="preco">De R$ 30,00 para R$ 15,00</p>
                <div class="btn-container">
                    <a href="pagamento.php">
                        <button class="btn buy-btn">Comprar</button>
                    </a>
                </div>
            </div>
            <div class="promo-item" data-title="Urso do Pó Branco">
                <img src="urso_do_pó_branco.png" alt="">
                <p>Urso do Pó Branco</p>
                <p class="preco">De R$ 45,00 para R$ 25,00</p>
                <div class="btn-container">
                    <a href="pagamento.php">
                        <button class="btn buy-btn">Comprar</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
        <h2>Generos</h2>
    <section class="infantil">
        <div class="infantil">
            <h3>Infantil</h3>
            <div class="categoria-items">
                <div class="item" data-title="O mágico de Oz" data-price="R$ 20,00">
                    <img src="magico_deoz.png" alt="">
                    <p>O mágico de Oz</p>
                    <p class="preco">R$ 20,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="Malevola" data-price="R$ 22,00">
                    <img src="malevola.png" alt="">
                    <p>Malevola</p>
                    <p class="preco">R$ 22,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="Biblia Infantil" data-price="R$ 18,00">
                    <img src="biblia_infantil.png" alt="">
                    <p>Biblia Infantil</p>
                    <p class="preco">R$ 18,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="O Pequeno Príncipe" data-price="R$ 28,00">
                    <img src="pequeno_principe.png" alt="">
                    <p>O Pequeno Príncipe</p>
                    <p class="preco">R$ 28,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="O menino maluquinho" data-price="R$ 18,00">
                    <img src="o_menino_maluquinho.png" alt="">
                    <p>O menino maluquinho</p>
                    <p class="preco">R$ 18,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="O pássaro sem cor" data-price="R$ 26,00">
                    <img src="O_pássaro_sem_cor.png" alt="">
                    <p>O pássaro sem cor</p>
                    <p class="preco">R$ 26,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="Marcelo, Marmelo, Martelo" data-price="R$ 24,00">
                    <img src="marcelo-marmelo-martelo.png" alt="">
                    <p>Marcelo, Marmelo, Martelo</p>
                    <p class="preco">R$ 24,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="aventura">
        <div class="aventura">
            <h3>Aventura</h3>
            <div class="categoria-items">
                <div class="item" data-title="Além dos sonhos" data-price="30.00">
                    <img src="alem_dos_sonhos.png" alt="Além dos sonhos">
                    <p>Além dos sonhos</p>
                    <p class="preco">R$ 30,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn" href=>Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="Conjurador - A inquisição" data-price="32.00">
                    <img src="Conjurador_a_inquisiçaõ.png" alt="">
                    <p>Conjurador - A inquisição</p>
                    <p class="preco">R$ 32,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="A maldição do tigre" data-price="28.00">
                    <img src="tigre.png" alt="">
                    <p>A maldição do tigre</p>
                    <p class="preco">R$ 28,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="As crônicas de Nárnia" data-price="35.00">
                    <img src="as_cronicas_de_narnia.png" alt="">
                    <p>As crônicas de Nárnia</p>
                    <p class="preco">R$ 35,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="Alice no país das maravilhas" data-price="27.00">
                    <img src="Alice_no_país_das_maravilhas.png" alt="">
                    <p>Alice no país das maravilhas</p>
                    <p class="preco">R$ 27,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="Spirit Run" data-price="29.00">
                    <img src="spirit-run.png" alt="">
                    <p>Spirit Run</p>
                    <p class="preco">R$ 29,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="Aventura no Egito" data-price="31.00">
                    <img src="aventura-no-egito.png" alt="">
                    <p>Aventura no Egito</p>
                    <p class="preco">R$ 31,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fantasia">
        <div class="fantasia">
            <h3>Fantasia</h3>
            <div class="categoria-items">
                <div class="item" data-title="A Ponte para Terabítia" data-price="25.00">
                    <img src="ponte_para_terabítia.png" alt="">
                    <p>A Ponte para Terabítia</p>
                    <p class="preco">R$ 25,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="Prince of Thorns" data-price="40.00">
                    <img src="prince.png" alt="">
                    <p>Prince of Thorns</p>
                    <p class="preco">R$ 40,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="Harry Potter e o Cálice de Fogo" data-price="45.00">
                    <img src="hp.png" alt="">
                    <p>Harry Potter e o Cálice de Fogo</p>
                    <p class="preco">R$ 45,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="Hobbit" data-price="38.00">
                    <img src="hobbit.png" alt="">
                    <p>Hobbit</p>
                    <p class="preco">R$ 38,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="O Feiticeiro de Terramar" data-price="32.00">
                    <img src="O-feiticeiro-de-terramar.png" alt="">
                    <p>O Feiticeiro de Terramar</p>
                    <p class="preco">R$ 32,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="O nome do vento" data-price="35.00">
                    <img src="O-nome-do-vento.png" alt="">
                    <p>O nome do vento</p>
                    <p class="preco">R$ 35,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="O Senhor dos Aneis" data-price="50.00">
                    <img src="O-senhor-dos-Aneis.png" alt="">
                    <p>O senhor dos anéis</p>
                    <p class="preco">R$ 50,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="terror">
        <div class="terror">
            <h3>Terror</h3>
            <div class="categoria-items">
                <div class="item" data-title="O Exorcista" data-price="42.00">
                    <img src="o_exorcista.png" alt="">
                    <p>O Exorcista</p>
                    <p class="preco">R$ 42,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="A estrada da noite" data-price="35.00">
                    <img src="estrada_da_noite.png" alt="">
                    <p>A estrada da noite</p>
                    <p class="preco">R$ 35,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="Estou atrás de vocé" data-price="30.00">
                    <img src="estou_atras_de_você.png" alt="">
                    <p>Estou atrás de você</p>
                    <p class="preco">R$ 30,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item"  data-title="Terrores Noturnos" data-price="28.00">
                    <img src="terrores_noturnos.png" alt="">
                    <p>Terrores Noturnos</p>
                    <p class="preco">R$ 28,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="Dança da escuridão" data-price="33.00">
                    <img src="dança-da-escuridão.png" alt="">
                    <p>Dança da escuridão</p>
                    <p class="preco">R$ 33,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="Terror em Amityville" data-price="38.00">
                    <img src="terror-em-amityville.png" alt="">
                    <p>Terror em Amityville</p>
                    <p class="preco">R$ 38,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
                <div class="item" data-title="O Ritual" data-price="40.00">
                    <img src="o_ritual.png" alt="">
                    <p>O Ritual</p>
                    <p class="preco">R$ 40,00</p>
                    <div class="btn-container">
                        <a href="pagamento.php">
                            <button class="btn buy-btn">Comprar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="misterio">
    <div class="misterio">
        <h3>Mistério</h3>
        <div class="categoria-items">
            <div class="item" data-title="Sherlok Homes - O Signo dos Quatro" data-price="45.00">
                <img src="sherlok_homes.png" alt="">
                <p>Sherlok Homes - O Signo dos Quatro</p>
                <p class="preco">R$ 45,00</p>
                <div class="btn-container">
                    <a href="pagamento.php">
                        <button class="btn buy-btn">Comprar</button>
                    </a>
                </div>
            </div>
            <div class="item" data-title="A Garota do Lago" data-price="40.00">
                <img src="a_garota_do_lago.png" alt="">
                <p>A Garota do Lago</p>
                <p class="preco">R$ 40,00</p>
                <div class="btn-container">
                    <a href="pagamento.php">
                        <button class="btn buy-btn">Comprar</button>
                    </a>
                </div>
            </div>
            <div class="item" data-title="Uma Questão de Segundos" data-price="38.00">
                <img src="uma_questão_de_segundos.png" alt="">
                <p>Uma Questão de Segundos</p>
                <p class="preco">R$ 38,00</p>
                <div class="btn-container">
                    <a href="pagamento.php">
                        <button class="btn buy-btn">Comprar</button>
                    </a>
                </div>
            </div>
            <div class="item" data-title="Mistério em Chalk Hill" data-price="42.00">
                <img src="mistério_em_chalk_hill.png" alt="">
                <p>Mistério em Chalk Hill</p>
                <p class="preco">R$ 42,00</p>
                <div class="btn-container">
                    <a href="pagamento.php">
                        <button class="btn buy-btn">Comprar</button>
                    </a>
                </div>
            </div>
            <div class="item" data-title="Python sem Mistério" data-price="36.00">
                <img src="python_sem_m.png" alt="">
                <p>Python sem Mistério</p>
                <p class="preco">R$ 36,00</p>
                <div class="btn-container">
                    <a href="pagamento.php">
                        <button class="btn buy-btn">Comprar</button>
                    </a>    
                </div>
            </div>
            <div class="item" data-title="Um Estúdio Vermelho" data-price="37.00">
                <img src="um_estudio_vermelho.png" alt="">
                <p>Um Estúdio Vermelho</p>
                <p class="preco">R$ 37,00</p>
                <div class="btn-container">
                    <a href="pagamento.php">
                        <button class="btn buy-btn">Comprar</button>
                    </a>
                </div>
            </div>
            <div class="item" data-title="Olhos que Comiam Carne" data-price="39.00">
                <img src="olhos_que_comiam_carne.png" alt="">
                <p>Olhos que Comiam Carne</p>
                <p class="preco">R$ 39,00</p>
                <div class="btn-container">
                    <a href="pagamento.php">
                        <button class="btn buy-btn">Comprar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="sobre-nos">
        <div class="sobre-nos-content">
            <h2>Sobre Nós</h2>
            <p>A Livraria Virtual é um espaço dedicado aos amantes da leitura. Aqui você encontra os melhores livros de diversos gêneros, desde os clássicos até as últimas novidades do mercado editorial. Nosso compromisso é proporcionar uma experiência de compra fácil e prazerosa, com produtos de qualidade e um atendimento excelente.</p>
            <p>Nosso objetivo é fomentar a cultura literária e oferecer aos nossos clientes a oportunidade de explorar novos mundos através dos livros. Acreditamos que a leitura é um dos maiores prazeres da vida, e queremos ajudar você a encontrar sua próxima leitura favorita!</p>
        </div>
    </section>
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
