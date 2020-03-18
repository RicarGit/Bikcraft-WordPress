<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Bikcraft - Conheça as linhas Passeio, Retrô e Esporte</title>
		<meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft.
				Possuímos modelos Passeio, Retrô e Esporte.">
		
		<meta property="og:title" content="Bikcraft - Conheça as linhas Passeio, Retrô e Esporte">
		<meta property="og:type" content="website">
		<meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft.
				Possuímos modelos Passeio, Retrô e Esporte.">
		<meta property="og:url" content="">
		<meta property="og:image" content="">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

		<link rel="stylesheet" href="css/style.css">
		<script>document.documentElement.classList.add("js");</script>
	</head>
	<body>
		<header class="header">
			<div class="container">
				<div>
				<a href="index.html" class="grid-4">
					<img src="img/bikcraft.svg" alt="logo">
				</a>
				</div>
				<nav class="header-menu grid-12">
					<ul>
						<li><a href="sobre.html">Sobre</a></li>
						<li><a href="products.html" class="menu-active">Produtos</a></li>
						<li><a href="portfolio.html">Portfólio</a></li>
						<li><a href="contact.html">Contato</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<section class="introducao-interna products-internal">
			<div class="container">
				<h1 data-anime="400" class="fadeInDown">Produtos</h1>
				<p data-anime="800" class="fadeInDown">Conheça todos os nossos produtos</p>
			</div>
		</section>

		<section class="container item-product">
			<div data-anime="1200" class="grid-11 fadeInLeft">
				<img src="img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft Passeio">
				<h2>Passeio</h2>
			</div>
			<div data-anime="1200" class="grid-5 product-icon fadeInRight">
				<img src="img/produtos/passeio.svg" alt="Bikcraft Passeio">
			</div>
			<div data-anime="1600" class="grid-8 fadeInUp">
				<img src="img/produtos/bikcraft-passeio-2.jpg" alt="Bikcraft Passeio">
			</div>
			<div data-anime="1600" class="grid-8 product-info fadeInDown">
				<p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na 
					formula da gestão inovadora da qual fazemos parte inovadora da qual fazemos parte.</p>
				<ul>
					<li>Conforto</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>
		<section class="container item-product">
			<div data-anime="2000" class="grid-11 fadeInLeft">
				<img src="img/produtos/bikcraft-esporte-1.jpg" alt="Bikcraft Esporte">
				<h2>Esporte</h2>
			</div>
			<div data-anime="2000" class="grid-5 product-icon fadeInRight">
				<img src="img/produtos/esporte.svg" alt="Bikcraft Esporte">
			</div>
			<div data-anime="2400" class="grid-8 fadeInDown">
				<img src="img/produtos/bikcraft-esporte-2.jpg" alt="Bikcraft Passeio">
			</div>
			<div data-anime="2400" class="grid-8 product-info fadeInUp">
				<p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na
					formula da gestão inovadora da qual fazemos parte inovadora da qual fazemos parte.</p>
				<ul>
					<li>Conforto</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>
		<section class="container item-product">
			<div data-anime="2800" class="grid-11 fadeInRight">
				<img src="img/produtos/bikcraft-retro-1.jpg" alt="Bikcraft Retrô">
				<h2>Retrô</h2>
			</div>
			<div data-anime="2800" class="grid-5 product-icon fadeInLeft">
				<img src="img/produtos/retro.svg" alt="Bikcraft Retrô">
			</div>
			<div data-anime="3200" class="grid-8">
				<img src="img/produtos/bikcraft-retro-2.jpg" alt="Bikcraft Retrô">
			</div>
			<div data-anime="3200" class="grid-8 product-info">
				<p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na
					formula da gestão inovadora da qual fazemos parte inovadora da qual fazemos parte.</p>
				<ul>
					<li>Conforto</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>

		<section class="orcamento">
			<div data-anime="3600"  class="container fadeInDown">
				<h2 class="subtitle">Orçamento</h2>
				<form id="form-orcamento" method="POST" action="./enviar-sendgrid.php" class="form grid-8 formphp">
					<label for="name">Nome</label>
					<input type="text" id="name" name="nome" required>
					<label for="email">Email</label>
					<input type="email" id="email" name="email" required>
					<label for="telephone">Telefone</label>
					<input type="text" id="telephone" name="telefone">
					<label for="mensagem">Mensagem</label>
					<textarea id="mensagem" name="mensagem" required></textarea>
					<button id="enviar" type="submit" class="btn">Enviar</button>
				</form>
				<div class="orcamento-dados grid-8">
					<h3>Dados</h3>
					<span>+55 21 93223 3232</span>
					<span class="dados-email">orcamento@bikcraft.com</span>
					<h3>Monte a sua Bikcraft</h3>
					<p>Escolha as especificações</p>
					<ul>
						<li>- Cores</li>
						<li>- Estilo</li>
						<li>- Medidas</li>
						<li>- Acessórios</li>
						<li>- E Outros</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="break">
			<blockquote data-anime="4000" class="quote-externo container fadeInDown">
				<p>"O verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana."</p>
				<cite>WILLIAM MORRIS</cite>
			</blockquote>
		</section>
		<footer>
			<div class="footer">
				<div data-anime="4400" class="container fadeInDown">
					<div class="grid-8 footer-history">
						<h3>Nossa História</h3>
						<p>O verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana cotidiana.
							Interesse por todos os detalhes da vida cotidiana cotidiana.
						</p>
					</div>
					<div class="grid-4 footer-contact">
						<h3>Contato</h3>
						<ul>
							<li>- 21 23232-4343</li>
							<li>- contato@bikcraft.com</li>
							<li>- Botafogo - RJ</li>
						</ul>
					</div>
					<div class="grid-4 footer-social">
						<h3>Redes Sociais</h3>
						<ul>
							<li><a href="http://facebook.com" target="_blank"><img src="img/redes-sociais/facebook.svg" alt="Facebook Bikcraft"></a></li>
							<li><a href="http://instagram.com" target="_blank"><img src="img/redes-sociais/instagram.svg" alt="Instagram Bikcraft"></a></li>
							<li><a href="http://twitter.com" target="_blank"><img src="img/redes-sociais/twitter.svg" alt="Twitter Bikcraft"></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="container">
					<p class="grid-16">Bikcraft 2019 - Alguns direitos reservados.</p>
				</div>
			</div>
		</footer>

		<script src="./js/simple-anime.js"></script>
		<script src="./js/simple-form.js"></script>
		<script src="./js/script.js"></script>
		
	</body>
</html>