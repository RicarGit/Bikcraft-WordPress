<?php $portfolio = get_page_by_title('portfolio'); ?>

<?php if (have_rows('portfolio_item', $portfolio)) : while (have_rows('portfolio_item', $portfolio)) : the_row(); ?>
        <ul class="portfolio-list">
            <li class="grid-8"><img src="<?php the_sub_field('portfolio_image1', $portfolio); ?>" alt="<?php the_sub_field('portfolio_image_desc1', $portfolio) ?>"></li>
            <li class="grid-8"><img src="<?php the_sub_field('portfolio_image2', $portfolio); ?>" alt="<?php the_sub_field('portfolio_image_desc2', $portfolio) ?>"></li>
            <li class="grid-16"><img src="<?php the_sub_field('portfolio_image3', $portfolio); ?>" alt="<?php the_sub_field('portfolio_image_desc3', $portfolio) ?>"></li>
        </ul>
<?php endwhile; else : endif; ?>