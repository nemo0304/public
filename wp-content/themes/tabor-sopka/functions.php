<?php

function tabor_sopka_enqueue_styles() {
  // Načtení fontu Nunito z Google Fonts
  wp_enqueue_style(
    'nunito-font',
    'https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap',
    false
  );

  // Načtení hlavního CSS souboru
  wp_enqueue_style(
    'main-style',
    get_template_directory_uri() . '/assets/css/main.css',
    array('nunito-font')
  );
}
add_action('wp_enqueue_scripts', 'tabor_sopka_enqueue_styles');


?>
