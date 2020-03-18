<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Bikcraft - Contato - 21 9999-9999</title>
		<meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft.
				Possuímos modelos Passeio, Retrô e Esporte.">
		
		<meta property="og:title" content="Bikcraft - Contato - 21 9999-9999">
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
						<li><a href="products.html">Produtos</a></li>
						<li><a href="portfolio.html">Portfólio</a></li>
						<li><a href="contact.html" class="menu-active">Contato</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<section class="introducao-interna internal-contact">
			<div class="container">
				<h1 data-anime="400" class="fadeInDown">Contato</h1>
				<p data-anime="800" class="fadeInDown">Tire suas dúvidas com a gente</p>
			</div>
		</section>

		<section class="contact">
			<div class="container">
				<form data-anime="1200" id="form-contact" method="POST" action="./enviar-sendgrid.php" class="form grid-8 fadeInLeft formphp">
					<label for="name">Nome</label>
					<input type="text" id="name" name="nome" required>
					<label for="email">Email</label>
					<input type="email" id="email" name="email" required>
					<label for="telephone">Telefone</label>
					<input type="text" id="telephone" name="telefone">
					<label for="mensagem">Mensagem</label>
					<textarea id="mensagem" name="mensagem" required></textarea>
					<button id="enviar" type="submit" class="btn btn-black">Enviar</button>
				</form>
				<div data-anime="1200" class="contact-dados grid-8 fadeInRight">
					<h3>Dados</h3>
					<span>+55 21 93223 3232</span>
					<span class="dados-email">Rua Ali Perto - Botafogo</span>
					<span>Rio de Janeiro - RJ - Brasil</span>
					<span class="dados-email">orcamento@bikcraft.com</span>
					<h3>Redes Sociais</h3>
					<div class="contact-social">
						<ul>
							<li><a href="http://facebook.com" target="_blank"><img src="img/redes-sociais/facebook.svg" alt="Facebook"></a></li>
							<li><a href="http://instagram.com" target="_blank"><img src="img/redes-sociais/instagram.svg" alt="Instagram"></a>
							</li>
							<li><a href="http://twitter.com" target="_blank"><img src="img/redes-sociais/twitter.svg" alt="Twitter"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section data-anime="1600" class="container contact-map fadeInUp">
				<a class="grid-16" href="https://www.google.com.br/maps" target="_blank"><img src="img/endereco-bikcraft.jpg" alt=""></a>
		</section>

		<section class="break">
			<blockquote data-anime="2000" class="quote-externo container fadeInDown">
				<p>"O verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana."</p>
				<cite>WILLIAM MORRIS</cite>
			</blockquote>
		</section>
		<footer>
			<div class="footer">
				<div data-anime="2400" class="container fadeInDown">
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