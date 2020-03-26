<?php
// Template Name: Sobre
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php include(TEMPLATEPATH . "/inc/introduction.php"); ?>

	<section class="about-mission container">
		<div class="grid-10">
			<h2 data-anime="1200" class="internal-subtitle fadeInLeft">História, Missão e Visão</h2>
			<p data-anime="1200" class="fadeInLeft">No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na
				formulação da gestão inovadora da qual fazemos parte da qual fazemos parte.</p>
			<p data-anime="1200" class="fadeInLeft">No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na
				formulação da gestão inovadora da qual fazemos parte da qual fazemos parte.</p>
		</div>
		<div class="grid-6">
			<h2 data-anime="1200" class="internal-subtitle fadeInRight">Valores</h2>
			<ul data-anime="1200" class="fadeInRight">
				<li>- Qualidade no processo com</li>
				<li>- Foco no cliente sem perder a</li>
				<li>- Divisão, preservando a</li>
				<li>- Natureza com sustentabilidade</li>
			</ul>
		</div>
		<div data-anime="1600" class="grid-16 equip-photo fadeInUp">
			<img src="<?php echo get_template_directory_uri(); ?>/img/equipe-bikcraft.jpg" alt="Equipe Bikcraft">
		</div>
	</section>

	<?php include(TEMPLATEPATH . "/inc/quality.php"); ?>

<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>