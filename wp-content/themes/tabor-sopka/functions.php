<?php

/**načítání stylů šablony */
function tabor_sopka_enqueue_styles(){
    /** načtení Nunito fontu */
      wp_enqueue_style('nunito-font', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap', array(), null);

    /** Načtení main.css **/
      wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array('nunito-font'), '1.0', 'all');
  }

add_action('wp_enqueue_scripts', 'tabor_sopka_enqueue_styles');

/**inicializace Menus ve Wordpressu */
function tabor_sopka_register_nav_menu(){
    register_nav_menus(
      array(
        'navigace' => __('navigace', 'tabor-sopka'),
      )
    );
}
add_action('after_setup_theme', 'tabor_sopka_register_nav_menu');

/**inicializace Widgets ve Wordpressu */
function tabor_sopka_widgets_init(){
    register_sidebar(
      array(
        'name' => __('Mapa zápatí', 'tabor-sopka'),
        'id' => 'mapa-footer',
        'description' => __('Místo pro vložení mapy', 'tabor-sopka'),
        'before_widget' => '<div class="widget %2$s" id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
      )
    );
}
add_action('widgets_init', 'tabor_sopka_widgets_init');


?>
