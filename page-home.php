<?php
// Template Name: Home
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php
		$image_id = get_field('background_home');
		$background_medium = wp_get_attachment_image_src($image_id, 'medium');
		$background_large = wp_get_attachment_image_src($image_id, 'large');
		?>

		<style type="text/css">
			.introducao {
				background: url("<?php echo $background_large[0] ?>") no-repeat center;
				background-size: cover;
			}

			/* Estilo para Smartphone */
			@media only screen and (max-width: 787px) {
				.introducao {
					background: url("<?php echo $background_medium[0] ?>") no-repeat center;
				}
			}
		</style>

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
				<?php
				$args = array(
					'post_type' => 'produtos',
					'order' => 'ASC'
				);
				$the_query = new WP_Query($args);
				?>

				<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

						<li class="grid-1-3">
							<a href="<?php the_permalink(); ?>">
								<div class="products-icon">
									<img src="<?php the_field('product_icon'); ?>" alt="Bikcraft Passeio">
								</div>
								<h3><?php the_title(); ?></h3>
								<p><?php the_field('product_resume'); ?></p>
							</a>
						</li>
				<?php endwhile;
				else : endif; ?>
				<?php wp_reset_query();
				wp_reset_postdata(); ?>
			</ul>
			<div data-anime="2400" class="call">
				<p><?php the_field('call_products'); ?></p>
				<a href="products/" class="btn btn-black">Produtos</a>
			</div>
		</section>
		<!-- Fecha Produtos -->
		<section class="portfolio">
			<h2 data-anime="2800" class="subtitle fadeInDown">Portfólio</h2>
			<ul data-anime="3200" class="fadeInDown container" data-slide="portfolio">
				<?php include(TEMPLATEPATH . "/inc/portfolio-clients.php"); ?>
			</ul>
			<div data-anime="3600" class="call">
				<p><?php the_field('call_portfolio'); ?></p>
				<a href="portfolio/" class="btn">Portfólio</a>
			</div>
		</section>
		<!-- Fecha Qualidade -->
		<?php include(TEMPLATEPATH . "/inc/quality.php"); ?>

<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>