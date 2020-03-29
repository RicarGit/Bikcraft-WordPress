<?php $portfolio = get_page_by_title('portfolio'); ?>

<div data-anime="1600" class="container fadeInLeft" data-slide="portfolio">
    <ul class="portfolio-list">
        <?php if (have_rows('portfolio_item', $portfolio)) : while (have_rows('portfolio_item', $portfolio)) : the_row(); ?>
                <li class="grid-8"><img src="<?php the_sub_field('portfolio_image1', $portfolio); ?>" alt="<?php the_sub_field('portfolio_image_desc1') ?>"></li>
                <li class="grid-8"><img src="<?php the_sub_field('portfolio_image2', $portfolio); ?>" alt="<?php the_sub_field('portfolio_image_desc2') ?>"></li>
                <li class="grid-16"><img src="<?php the_sub_field('portfolio_image3', $portfolio); ?>" alt="<?php the_sub_field('portfolio_image_desc3') ?>"></li>
        <?php endwhile;
        else : endif; ?>
    </ul>
</div>

<?php if (!is_page('portfolio')) { ?>
    <div data-anime="3600" class="call">
        <p><?php the_field('call_portfolio'); ?></p>
        <a href="portfolio/" class="btn">Portfólio</a>
    </div>
<?php } ?>