<?php

function tabor_sopka_enqueue_styles(){
    /** načtení Nunito fontu */
      wp_enqueue_style('nunito-font', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap', array(), null);

    /** Načtení main.css **/
      wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array('nunito-font'), '1.0', 'all');
  }

add_action('wp_enqueue_scripts', 'tabor_sopka_enqueue_styles');

function tabor_sopka_register_nav_menu(){
    register_nav_menus(
      array(
        'navigace' => __('navigace', 'tabor-sopka'),
      )
    );
}

add_action('after_setup_theme', 'tabor_sopka_register_nav_menu');
?>
