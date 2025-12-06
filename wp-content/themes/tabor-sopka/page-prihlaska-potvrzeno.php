<?php get_header();?>

<main class="obsah-stranky">
    <h1>přihláška uložena</h1>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            
             ?>
            <div class="content"><?php the_content();?></div>
            <?php
        endwhile;

    else:
        _e('Chyba: Stránka nenalezena.', 'tabor-sopka');
    endif;
    ?>
</main>

<?php get_footer(); ?>