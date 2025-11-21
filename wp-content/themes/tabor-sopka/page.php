<?php get_header(); ?>

<main class="obsah-stranky">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();

            the_title();

            the_content();
        endwhile;

    else:
        _e('Chyba: Stránka nenalezena.', 'tabor-sopka');
    endif;
    ?>
</main>

<?php get_footer(); ?>