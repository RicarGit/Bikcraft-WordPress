<?php
// Template Name: Portfolio
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php include(TEMPLATEPATH . "/inc/introduction.php"); ?>

		<section data-anime="1200" class="container fadeInRight" data-slide="quote">
			<?php if (have_rows('quote_portfolio')) : while (have_rows('quote_portfolio')) : the_row(); ?>
					<blockquote class="quote-clients">
						<?php the_sub_field('quote'); ?>
						<cite><?php the_sub_field('quote_name'); ?></cite>
					</blockquote>
			<?php endwhile;
			else : endif; ?>
		</section>

		<section class="portfolio">
			<div data-anime="1600" class="container fadeInLeft" data-slide="portfolio">
				<?php include(TEMPLATEPATH . "/inc/portfolio-clients.php"); ?>
			</div>
		</section>

<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>