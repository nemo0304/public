<?php

// načítání stylů šablony
function tabor_sopka_enqueue_assets(){

    // načtení Nunito fontu
     wp_enqueue_style('nunito-font', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap', array(), null);

      // načtení bootstrap css
      wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/scss/custom.css', array('nunito-font'), '1.0.0', 'all');

      // načtení bootstrap js
      wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.3.8', true);

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

// načtení editor.js
function tabor_sopka_gutenberg_scripts(){
    wp_enqueue_script('editor-js', get_template_directory_uri() . '/assets/js/editor.js', array('wp-blocks', 'wp-dom-ready', 'wp-edit-post'), filemtime( get_template_directory() . '/assets/js/editor.js'), true);
}
add_action('enqueue_block_editor_assets', 'tabor_sopka_gutenberg_scripts');

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