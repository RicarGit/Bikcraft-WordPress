<?php
// Template Name: Single Products
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section class="container item-product">
		<div data-anime="1200" class="grid-11 fadeInLeft">
			<img src="<?php the_field('product_photo_1'); ?>" alt="Bikcraft <?php the_title(); ?>">
			<h2><?php the_title(); ?></h2>
		</div>
		<div data-anime="1200" class="grid-5 product-icon fadeInRight">
			<img src="<?php the_field('product_icon'); ?>" alt="Bikcraft <?php the_title(); ?>">
		</div>
		<div data-anime="1600" class="grid-8 fadeInUp">
			<img src="<?php the_field('product_photo_2'); ?>" alt="Bikcraft <?php the_title(); ?>">
		</div>
		<div data-anime="1600" class="grid-8 product-info fadeInDown">
			<?php the_content(); ?>
		</div>
	</section>

	<section class="orcamento" id="orcamento">
		<div data-anime="2000" class="container fadeInDown">
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
			<?php include(TEMPLATEPATH . "/inc/products-orcamento.php"); ?>
		</div>
	</section>

<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>