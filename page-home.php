<?php
// Template Name: Home
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="introducao">
			<div class="container">
				<h1 data-anime="400" class="fadeInDown"><?php the_field('intro_title'); ?></h1>
				<blockquote data-anime="800" class="quote-externo fadeInDown">
					<p><?php the_field('intro_quote'); ?></p>
					<cite><?php the_field('intro_cite'); ?></cite>
				</blockquote>
				<a data-anime="1200" href="products/#orcamento" class="btn">Orçamento</a>
			</div>
		</section>

		<section class="products container">
			<h2 data-anime="1600" class="subtitle fadeInDown">Produtos</h2>
			<ul data-anime="2000" class="products-list fadeInDown">
				<li class="grid-1-3">
					<div class="products-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/passeio.svg" alt="Bikcraft Passeio">
					</div>
					<h3>Passeio</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
				</li>
				<li class="grid-1-3">
					<div class="products-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/esporte.svg" alt="Bikcraft Esporte">
					</div>
					<h3>Esporte</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
				</li>
				<li class="grid-1-3">
					<div class="products-icon">
						<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/retro.svg" alt="Bikcraft Retrô">
					</div>
					<h3>Retro</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação.</p>
				</li>
			</ul>
			<div data-anime="2400" class="call">
				<p><?php the_field('call_products'); ?></p>
				<a href="products/" class="btn btn-black">Produtos</a>
			</div>
		</section>
		<!-- Fecha Produtos -->
		<section class="portfolio">
			<div class="container">
				<h2 data-anime="2800" class="subtitle fadeInDown">Portfólio</h2>
				<ul data-anime="3200" class="portfolio-list fadeInDown">
					<?php include(TEMPLATEPATH . "/inc/portfolio-clients.php"); ?>
				</ul>
				<div data-anime="3600" class="call">
					<p><?php the_field('call_portfolio'); ?></p>
					<a href="portfolio/" class="btn">Portfólio</a>
				</div>
			</div>
		</section>
		<!-- Fecha Qualidade -->
		<?php include(TEMPLATEPATH . "/inc/quality.php"); ?>

<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>