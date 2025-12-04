<?php 
/*
* Template Name: Přihláška
*/
get_header();

$hero_url = get_the_post_thumbnail_url(null, 'hero');
    if(!$hero_url){
    $hero_url = get_template_directory_uri() . '/assets/images/default-hero.jpg';
    } 
    ?>
<div class="hero-obrazek" style ="--hero-img: url('<?php echo esc_url($hero_url);?>');"></div>
<?php

$rezim = get_option('ts_prihlaska_nastaveni_rezim', 'uzavrena');
?>
<main class="obsah-stranky">
    <div class="content">
        <?php
        if ($rezim === 'uzavrena') {
            get_template_part('template-parts/prihlaska-zavreno');
        } else {
            get_template_part('template-parts/prihlaska-otevreno', null, ['rezim' => $rezim]);
        }
        ?>
    </div>
</main>

<?php get_footer(); ?>