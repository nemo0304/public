<?php

/**načítání stylů šablony */
function tabor_sopka_enqueue_assets(){



    /* načtení Nunito fontu */
     wp_enqueue_style('nunito-font', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap', array(), null);

      /* načtení bootstrap css */
      wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/scss/custom.css', array('nunito-font'), '1.0.0', 'all');

      /* načtení bootstrap js */
      wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.3.8', true);

  }

add_action('wp_enqueue_scripts', 'tabor_sopka_enqueue_assets');

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

/* načtení editor.js */
function tabor_sopka_gutenberg_scripts(){
    wp_enqueue_script('editor-js', get_template_directory_uri() . '/assets/js/editor.js', array('wp-blocks', 'wp-dom-ready', 'wp-edit-post'), filemtime( get_template_directory() . '/assets/js/editor.js'), true);
}
add_action('enqueue_block_editor_assets', 'tabor_sopka_gutenberg_scripts');
?>
