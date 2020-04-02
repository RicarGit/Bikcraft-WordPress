<?php $contact = get_page_by_title('contato'); ?>

<style>
    .break {
        background: url("<?php the_field('break_bg', $contact); ?>") no-repeat center;
        background-size: cover;
    }
</style>

<section class="break">
    <blockquote class="quote-externo container">
        <?php the_field('footer_phrase', $contact); ?>
        <cite><?php the_field('footer_author', $contact); ?></cite>
    </blockquote>
</section>

<footer>
    <div class="footer">
        <div class="container">
            <div class="grid-8 footer-history">
                <h3>Nossa História</h3>
                <?php the_field('history_resume', $contact); ?>
            </div>
            <div class="grid-4 footer-contact">
                <h3>Contato</h3>
                <ul>
                    <li>- <?php the_field('telephone', $contact); ?></li>
                    <li>- <?php the_field('email', $contact); ?></li>
                    <li>- <?php the_field('address_1', $contact); ?></li>
                </ul>
            </div>
            <div class="grid-4 footer-social">
                <h3>Redes Sociais</h3>
                <?php include(TEMPLATEPATH . "/inc/social-medias.php"); ?>
            </div>
        </div>
    </div>
    <div class="copy">
        <div class="container">
            <p class="grid-16"><?php bloginfo('name'); ?> <?php echo date('Y'); ?> - Alguns direitos reservados.</p>
        </div>
    </div>
</footer>

<!-- Inicio WordPress Footer -->
<?php wp_footer(); ?>
<!-- Final WordPress Footer -->

</body>

</html>