<?php 
/*
* Template Name: Přihláška
*/
get_header();

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