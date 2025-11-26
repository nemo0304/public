<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header sticky-top">


        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid position-relative">

                <button class="navbar-toggler border-0 z-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand d-flex align-items-center gap-3 mx-auto ms-lg-0 me-lg-auto z-1" href="<?php echo esc_url( home_url( '/' ) );?>">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/logo_sopka.png" alt="Logo Sopka" width="60" height="auto" class="d-inline-block align-text-top d-none d-lg-block">

                    <span class="text-nazev-taboru fw-bold fs-4 text-black">
                        <?php bloginfo( 'name' ); ?>
                    </span>
                </a>

                <a class="d-lg-none position-absolute end-0 top-50 translate-middle-y me-3 z-2" href="<?php echo esc_url( home_url( '/' ) );?>">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/logo_sopka.png" alt="Logo Sopka" width="50" height="auto">
                </a>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'navigace',
                                'container'      => false,
                                'menu_class' => 'navbar-nav align-items-center',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth' => 2,
                                'fallback_cb' => '__return_false',
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                    ?>

                </div>

            </div>
        </nav>                             
    </header>
    