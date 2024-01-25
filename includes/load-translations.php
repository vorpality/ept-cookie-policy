<?php 
function ept_cookie_load_php_translations() {
  
  load_plugin_textdomain(
    'e-potis',
    false,
    "ept-cookie/languages"
  );
  
}

function ept_cookie_load_block_translations(){
  $blocks = [
    'ept-cookie-banner-editor-script',
  ];

  foreach($blocks as $block){
    wp_set_script_translations(
      $block,
      'e-potis',
      EPT_COOKIES_DIR . "languages"
    );
  }
}