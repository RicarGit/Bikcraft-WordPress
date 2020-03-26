<?php
// Template Name: Contact
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php include(TEMPLATEPATH . "/inc/introduction.php"); ?>

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
						<li><a href="http://facebook.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/redes-sociais/facebook.svg" alt="Facebook"></a></li>
						<li><a href="http://instagram.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/redes-sociais/instagram.svg" alt="Instagram"></a>
						</li>
						<li><a href="http://twitter.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/redes-sociais/twitter.svg" alt="Twitter"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section data-anime="1600" class="container contact-map fadeInUp">
		<a class="grid-16" href="https://www.google.com.br/maps" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/endereco-bikcraft.jpg" alt=""></a>
	</section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>