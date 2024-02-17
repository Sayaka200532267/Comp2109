<!doctype html>
<html lang="<?php echo language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo esc_url( home_url('wp-content/themes/Assignment One/assets/css/styles.css')); ?>">
</head>
<body <?php body_class(); ?>>
<header>
    <div>
        <!-- Implement a logo -->
        <a href="<?php echo esc_url( home_url() ); ?>">
            <img style="width: 100px;" src="<?php echo esc_url( home_url( 'wp-content/uploads/2024/02/logo.png' ) ); ?>" alt="header logo">
        </a>
    </div>
    <!-- Create a Nav -->
    <nav>
        <?php
        wp_nav_menu( array(
            'menu'           => 'main',
            'theme_location' => '',
            'depth'          => 2,
            'fallback_cb'    => false
        ));
        ?>
    </nav>
</header>
