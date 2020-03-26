<?php
// Template Name: Products
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php include(TEMPLATEPATH . "/inc/introduction.php"); ?>

	<section class="container item-product">
		<div data-anime="1200" class="grid-11 fadeInLeft">
			<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft Passeio">
			<h2>Passeio</h2>
		</div>
		<div data-anime="1200" class="grid-5 product-icon fadeInRight">
			<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/passeio.svg" alt="Bikcraft Passeio">
		</div>
		<div data-anime="1600" class="grid-8 fadeInUp">
			<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/bikcraft-passeio-2.jpg" alt="Bikcraft Passeio">
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
			<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/bikcraft-esporte-1.jpg" alt="Bikcraft Esporte">
			<h2>Esporte</h2>
		</div>
		<div data-anime="2000" class="grid-5 product-icon fadeInRight">
			<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/esporte.svg" alt="Bikcraft Esporte">
		</div>
		<div data-anime="2400" class="grid-8 fadeInDown">
			<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/bikcraft-esporte-2.jpg" alt="Bikcraft Passeio">
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
			<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/bikcraft-retro-1.jpg" alt="Bikcraft Retrô">
			<h2>Retrô</h2>
		</div>
		<div data-anime="2800" class="grid-5 product-icon fadeInLeft">
			<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/retro.svg" alt="Bikcraft Retrô">
		</div>
		<div data-anime="3200" class="grid-8">
			<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/bikcraft-retro-2.jpg" alt="Bikcraft Retrô">
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

	<section class="orcamento" id="orcamento">
		<div data-anime="3600" class="container fadeInDown">
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

<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>