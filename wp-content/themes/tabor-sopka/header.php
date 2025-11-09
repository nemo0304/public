<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="navigace-header">
        <div class="header-container">

            <div class="nazev-proklik">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <span class="text-nazev-taboru"><?php bloginfo( 'name' ); ?></span>
                </a>
            </div>

            <nav id="site-navigation" class="navigace-menu">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'navigace',
                            'container'      => false,
                            'menu_class' => 'main-menu-ul'
                        )
                    );
                ?>
            </nav>

            <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false">
                <span class="hamburger-icon"></span>
            </button>
        </div>
    </header>
    