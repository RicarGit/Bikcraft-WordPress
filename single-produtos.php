<?php
// Template Name: Single Products
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section class="container item-product">
		<div data-anime="800" class="grid-11 fadeInLeft">
			<img src="<?php the_field('product_photo_1'); ?>" alt="Bikcraft <?php the_title(); ?>">
			<h2><?php the_title(); ?></h2>
		</div>
		<div data-anime="800" class="grid-5 product-icon fadeInRight">
			<img src="<?php the_field('product_icon'); ?>" alt="Bikcraft <?php the_title(); ?>">
		</div>
		<div data-anime="1200" class="grid-8 fadeInUp">
			<img src="<?php the_field('product_photo_2'); ?>" alt="Bikcraft <?php the_title(); ?>">
		</div>
		<div data-anime="1200" class="grid-8 product-info fadeInDown">
			<?php the_content(); ?>
		</div>
	</section>

	<?php include(TEMPLATEPATH . "/inc/products-orcamento.php"); ?>

<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>