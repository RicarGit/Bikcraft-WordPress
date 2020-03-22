<?php
// Template Name: Portfolio
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="introducao-interna interna-portfolio">
			<div class="container">
				<h1 data-anime="400" class="fadeInDown">Portfólio</h1>
				<p data-anime="800" class="fadeInDown">Conheça os projetos que amamos mostrar</p>
			</div>
		</section>

		<section data-anime="1200" class="container fadeInRight" data-slide="quote">
			<blockquote class="quote-clients">
				<p>"Pedalar sempre foi a minha paixão, o que o pessoal da Bikcraft fez
					foi intensificar o meu amor por esta atividade. Recomendo à todos que amo."</p>
				<cite>Barbara Moss</cite>
			</blockquote>
			<blockquote class="quote-clients">
				<p>"Nada melhor do que dar um rolê com a minha Bikcraft na orla.
					Essa é a minha companheira mais fiel, nunca me traiu e está sempre
					a minha disposição."</p>
				<cite>Jhony Rato</cite>
			</blockquote>
			<blockquote class="quote-clients">
				<p>"Aqueles que ainda não possuem um Bikcraft, não sabem o que estão perdendo.
					A precisão é absurda e a velocidade transcendental."</p>
				<cite>Bernardo</cite>
			</blockquote>
		</section>

		<section class="portfolio">
			<?php include(TEMPLATEPATH . "/inc/portfolio-clients.php"); ?>
		</section>

<?php endwhile;
else : endif; ?>

<?php get_footer(); ?>