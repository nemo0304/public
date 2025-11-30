<?php get_header();

$hero_url = get_the_post_thumbnail_url(null, 'hero');
    if(!$hero_url){
    $hero_url = get_template_directory_uri() . '/assets/images/default-hero.jpg';
    } 
    ?>
<div class="hero-obrazek" style ="--hero-img: url('<?php echo esc_url($hero_url);?>');"></div>

<main class="obsah-stranky">
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