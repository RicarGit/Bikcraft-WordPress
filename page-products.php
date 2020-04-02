<?php
// Template Name: Products
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php include(TEMPLATEPATH . "/inc/introduction.php"); ?>

		<?php
		$args = array(
			'post_type' => 'produtos',
			'order' => 'ASC'
		);
		$the_query = new WP_Query($args);
		?>

		<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

				<section class="container item-product">
					<a href="<?php the_permalink(); ?>">
						<div data-anime="1200" class="grid-11 fadeInLeft">
							<img src="<?php the_field('product_photo_1'); ?>" alt="Bikcraft <?php the_title(); ?>">
							<h2><?php the_title(); ?></h2>
						</div>
						<div data-anime="1200" class="grid-5 product-icon fadeInRight">
							<img src="<?php the_field('product_icon'); ?>" alt="Bikcraft <?php the_title(); ?>">
						</div>
					</a>
				</section>

		<?php endwhile;	else: endif; ?>
		<?php wp_reset_query(); wp_reset_postdata(); ?>
		
		<?php include(TEMPLATEPATH . "/inc/products-orcamento.php"); ?>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>