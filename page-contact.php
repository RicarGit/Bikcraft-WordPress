<?php
// Template Name: Contact
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php include(TEMPLATEPATH . "/inc/introduction.php"); ?>

		<section class="contact">
			<div class="container">
				<form data-anime="1200" id="form-contact" method="POST" action="<?php echo get_template_directory_uri(); ?>/enviar-sendgrid.php" class="form grid-8 fadeInLeft formphp">
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
					<span><?php the_field('telephone'); ?></span>
					<span class="dados-email"><?php the_field('address_1'); ?></span>
					<span><?php the_field('address_2'); ?></span>
					<span class="dados-email"><?php the_field('email'); ?></span>
					<h3>Redes Sociais</h3>
					<div class="contact-social">
						<?php include(TEMPLATEPATH . "/inc/social-medias.php"); ?>
					</div>
				</div>
			</div>
		</section>

		<section data-anime="1600" class="container contact-map fadeInUp">
			<a class="grid-16" href="<?php the_field('map_link'); ?>" target="_blank"><img src="<?php the_field('map_image'); ?>" alt="<?php the_field('map_text'); ?>"></a>
		</section>

<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>