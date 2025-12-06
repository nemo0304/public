<?php

//načtení sekce nastevení přihlášky
require_once get_template_directory() . '/inc/prihlaska-nastaveni.php';

//načtení sekce controller přihlášky
require_once get_template_directory() . '/inc/prihlaska-controller.php';

//nastavení šablony
function tabor_sopka_setup_theme(){
     // náhledové obrázky
     add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'tabor_sopka_setup_theme');

// načítání stylů šablony
function tabor_sopka_enqueue_assets(){

    // načtení Nunito fontu
     wp_enqueue_style('nunito-font', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap', array(), null);

      // načtení bootstrap css
      wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/scss/custom.css', array('nunito-font'), filemtime(get_template_directory() . '/assets/scss/custom.css' ), 'all');

      // načtení bootstrap js
      wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.3.8', true);

      //načtení bootstrap icons
      wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(),'1.11.3');
  }

add_action('wp_enqueue_scripts', 'tabor_sopka_enqueue_assets');


// inicializace Menus ve Wordpressu
function tabor_sopka_register_nav_menu(){
    register_nav_menus(
      array(
        'navigace' => __('navigace', 'tabor-sopka'),
      )
    );
}
add_action('after_setup_theme', 'tabor_sopka_register_nav_menu');

//úprava možností gutenbergu
function tabor_sopka_gutenberg(){
  remove_theme_support('core-block-patterns');

// převzato z https://www.wppagebuilders.com/disable-openverse-wordpress/
  add_filter(
    'block_editor_settings_all',
    function( $settings ) {
      $settings['enableOpenverseMediaCategory'] = false;

      return $settings;
    },
    10
  );
}
add_action('after_setup_theme', 'tabor_sopka_gutenberg');

// registrace bootstrap-5-navwalker.php
require_once get_template_directory() . '/bootstrap-5-navwalker.php';

//načtení prihlaska.js
function ts_enqueue_prihlaska_js(){
    if(is_page_template('page-prihlaska.php')){
        wp_enqueue_script('prihlaska-js', get_template_directory_uri() . '/assets/js/prihlaska.js', ['bootstrap-js'], null, true);
    }
}
add_action('wp_enqueue_scripts', 'ts_enqueue_prihlaska_js');

//vytvoření custom post type pro přihlášky
function ts_register_prihlaska_cpt(){
    $labels = array(
        'name' => 'Přihlášky',
        'singular_name' => 'Přihláška',
        'menu_name' => 'Přihlášky',
        'add_new' => 'Přidat novou',
        'add_new_item' => 'Přidat novou přihlášku',
        'new_item' => 'Nová přihláška',
        'edit_item' => 'Upravit přihlášku',
        'view_item' => 'Zobrazit přihlášku',
        'all_items' => 'Všechny přihlášky',
        'search_items' => 'Hledat přihlášky',
        'not_found' => 'Žádné přihlášky nenalezeny.',
        'not_found_in_trash' => 'Žádné přihlášky v koši.',
    );

    $args = array(
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-forms', 
        'menu_position' => 21,
        'supports' => ['title'],
    );

    register_post_type('prihlaska', $args);
}
add_action('init', 'ts_register_prihlaska_cpt');

function ts_prihlaska_add_meta_box(){
    add_meta_box(
        'ts_prihlaska_details',
        'Detaily přihlášky',
        'ts_prihlaska_render_meta_box',
        'prihlaska',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'ts_prihlaska_add_meta_box');

function ts_prihlaska_render_meta_box($post){
    $data = get_post_meta($post->ID);
    
    $map = [
        'z1_jmeno'       => 'Zástupce 1 - jméno',
        'z1_bydliste'    => 'Zástupce 1 - bydliště',
        'z1_email'       => 'Zástupce 1 - e-mail',
        'z1_telefon'     => 'Zástupce 1 - telefon',
        'z2_jmeno'       => 'Zástupce 2 - jméno',
        'z2_bydliste'    => 'Zástupce 2 - bydliště',
        'z2_email'       => 'Zástupce 2 - e-mail',
        'z2_telefon'     => 'Zástupce 2 - telefon',
        'dite_jmeno'     => 'Dítě - jméno',
        'dite_prijmeni'  => 'Dítě - příjmení',
        'dite_bydliste'  => 'Dítě - bydliště',
        'dite_narozeni'  => 'Dítě - datum narození',
        'dite_trida'     => 'Dítě - vychází ze třídy',
        'dite_doplneni'  => 'Doplňující informace o dítěti',
        'oddil_jmeno1'   => 'Oddíl - kamarád 1',
        'oddil_jmeno2'   => 'Oddíl - kamarád 2',
        'doprava_tam'    => 'Doprava na tábor',
        'doprava_zpet'   => 'Doprava z tábora',
        'fakturace'      => 'Fakturace - ano/ne',
        'fakturace_ico'  => 'Fakturace - IČO',
        'fakturace_doplneni' => 'Fakturace - doplňující údaje',
    ];
    echo '<table class="form-table">';
    foreach($map as $key => $label){
        $value = isset($data[$key][0]) ? $data[$key][0] : '';
        if($key === 'fakturace'){
            $value = $value ? 'Ano' : 'Ne';
        }
        echo '<tr><th>' . esc_html($label) . '</th><td>' . esc_html($value) . '</td></tr>';
    }
    echo '</table>';
}
?>
