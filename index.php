<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Bikcraft - Bicicletas Personalizadas</title>
	<meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft.
		Possuímos modelos Passeio, Retrô e Esporte.">

	<meta property="og:title" content="Bikcraft - Bicicletas Personalizadas">
	<meta property="og:type" content="website">
	<meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft.
		Possuímos modelos Passeio, Retrô e Esporte.">
	<meta property="og:url" content="">
	<meta property="og:image" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<script>
		document.documentElement.classList.add("js");
	</script>
</head>

<body>
	<header class="header">
		<div class="container">
			<div>
				<a href="index.html" class="grid-4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bikcraft.svg" alt="logo">
				</a>
			</div>
			<nav class="header-menu grid-12">
				<ul>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="products.php">Produtos</a></li>
					<li><a href="portfolio.php">Portfólio</a></li>
					<li><a href="contact.php">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="introducao">
		<div class="container">
			<h1 data-anime="400" class="fadeInDown">Bicicletas Feitas a Mão</h1>
			<blockquote data-anime="800" class="quote-externo fadeInDown">
				<p>"Não tenha nada em sua casa que você não considere útil ou acredita ser bonito"</p>
				<cite>WILLIAM MORRIS</cite>
			</blockquote>
			<a data-anime="1200" href="products.html" class="btn">Orçamento</a>
		</div>
	</section>

	<section class="products container">
		<h2 data-anime="1600" class="subtitle fadeInDown">Produtos</h2>
		<ul data-anime="2000" class="products-list fadeInDown">
			<li class="grid-1-3">
				<div class="products-icon">
					<img src="img/produtos/passeio.svg" alt="Bikcraft Passeio">
				</div>
				<h3>Passeio</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
			</li>
			<li class="grid-1-3">
				<div class="products-icon">
					<img src="img/produtos/esporte.svg" alt="Bikcraft Esporte">
				</div>
				<h3>Esporte</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
			</li>
			<li class="grid-1-3">
				<div class="products-icon">
					<img src="img/produtos/retro.svg" alt="Bikcraft Retrô">
				</div>
				<h3>Retro</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
			</li>
		</ul>
		<div data-anime="2400" class="call">
			<p>Clique aqui e veja os detalhes dos produtos</p>
			<a href="produtos.html" class="btn btn-black">Produtos</a>
		</div>
	</section>
	<!-- Fecha Produtos -->
	<section class="portfolio">
		<div class="container">
			<h2 data-anime="2800" class="subtitle fadeInDown">Portfólio</h2>
			<ul data-anime="3200" class="portfolio-list fadeInDown">
				<li class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retro"></li>
				<li class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
				<li class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
			</ul>
			<div data-anime="3600" class="call">
				<p>Conheça mais o nosso portfólio</p>
				<a href="portfolio.php" class="btn">Portfólio</a>
			</div>
		</div>
	</section>
	<!-- Fecha Qualidade -->
	<section class="quality container">
		<h2 class="subtitle">Qualidade</h2>
		<img src="img/bikcraft-qualidade.svg" alt="Bikcraft">
		<ul class="quality-list">
			<li class="grid-1-3">
				<h3>Durabilidade</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
			</li>
			<li class="grid-1-3">
				<h3>Design</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
			</li>
			<li class="grid-1-3">
				<h3>Sustentabilidade</h3>
				<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
			</li>
		</ul>
		<div class="call">
			<p>Conheça mais o nosso portfólio</p>
			<a href="portfolio.php" class="btn btn-black">Portfólio</a>
		</div>
	</section>
	<section class="break">
		<blockquote class="quote-externo container">
			<p>"O verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana."</p>
			<cite>WILLIAM MORRIS</cite>
		</blockquote>
	</section>
	<footer>
		<div class="footer">
			<div class="container">
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
	<script src="./js/script.js"></script>

</body>

</html>