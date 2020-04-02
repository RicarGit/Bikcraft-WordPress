<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?><?php wp_title(' - '); ?></title>
    <meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft.
		Possuímos modelos Passeio, Retrô e Esporte.">

    <meta property="og:title" content="<?php bloginfo('name'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft.
		Possuímos modelos Passeio, Retrô e Esporte.">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">

    <script>
        document.documentElement.classList.add("js");
    </script>

    <!-- Inicio WordPress Header -->
    <?php wp_head(); ?>
    <!-- Final WordPress Header -->
</head>

<body>
    <header class="header">
        <div class="container">
            <div>
                <a href="/wordpress/" class="grid-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bikcraft.svg" alt="logo">
                </a>
            </div>
            <nav class="header-menu grid-12">
                <?php
                $args = array(
                    'menu' => 'principal',
                    'theme_location' => 'menu-principal',
                    'container' => false
                );
                wp_nav_menu($args);
                ?>
            </nav>
        </div>
    </header>