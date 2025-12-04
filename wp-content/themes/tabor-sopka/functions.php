<?php

//načtení sekce nastevení přihlášky
require_once get_template_directory() . '/inc/prihlaska-nastaveni.php';

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
?>