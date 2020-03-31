<?php $contact = get_page_by_title('contato'); ?>

<ul>
    <?php if (have_rows('social-medias', $contact)) : while (have_rows('social-medias', $contact)) : the_row(); ?>
            <li><a href="<?php the_sub_field('social_link'); ?>" target="_blank"><img src="<?php the_sub_field('social_image'); ?>" alt="<?php the_sub_field('social_name'); ?>"></a></li>
    <?php endwhile;
    else : endif; ?>
</ul>