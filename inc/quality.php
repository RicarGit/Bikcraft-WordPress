<?php $sobre = get_page_by_title('sobre'); ?>

<section class="quality container">
	<h2 class="subtitle"><?php the_field('quality_title', $sobre); ?></h2>
	<img src="<?php the_field('bikcraft_logo', $sobre); ?>" alt="Bikcraft">
	<ul class="quality-list">
		<?php if (have_rows('quality_item', $sobre)) : while (have_rows('quality_item', $sobre)) : the_row(); ?>
			<li class="grid-1-3">
				<h3><?php the_sub_field('quality_item_title', $sobre); ?></h3>
				<p><?php the_sub_field('quality_item_desc', $sobre); ?></p>
			</li>
		<?php endwhile;	else : endif; ?>
	</ul>
	<?php if (!is_page('sobre')) { ?>
		<div class="call">
			<p><?php the_field('quality_call', $sobre); ?></p>
			<a href="sobre/" class="btn btn-black">Sobre</a>
		</div>
	<?php } ?>
</section>