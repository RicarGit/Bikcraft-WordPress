<?php
// Template Name: Sobre
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php include(TEMPLATEPATH . "/inc/introduction.php"); ?>

		<section class="about-mission container">
			<div class="grid-10">
				<h2 data-anime="1200" class="internal-subtitle fadeInLeft">História, Missão e Visão</h2>
				<div data-anime="1200" class="fadeInLeft"><?php the_field('mission'); ?></div>
			</div>
			<div class="grid-6">
				<h2 data-anime="1200" class="internal-subtitle fadeInRight">Valores</h2>
				<div data-anime="1200" class="fadeInRight">
					<?php the_field('valor'); ?>
				</div>
			</div>
			<div data-anime="1600" class="grid-16 equip-photo fadeInUp">
				<img src="<?php the_field('image_team'); ?>" alt="Equipe Bikcraft">
			</div>
		</section>

		<?php include(TEMPLATEPATH . "/inc/quality.php"); ?>

<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>