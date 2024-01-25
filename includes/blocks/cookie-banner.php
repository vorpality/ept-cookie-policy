<?php

function ept_cookie_banner_render_cb($atts) {

if (isset($_COOKIE['policy'])){
  return '';
}
ob_start();
  ?>
  <div class="wp-block-ept-cookie-banner">
  <div class="content">
    <p> <?php _e('We use cookies to provide the best possible user experience. Cookies are used to remember your address when you connect to the website and remember the language you want the language to be in when you connect.', 'e-potis');
    ?></p>
    <button id = "accept-cookies"><?php _e('Accept Cookies', 'e-potis');?></button>
    <button id = "reject-cookies"> <?php _e('Reject Cookies', 'e-potis');?></button>
  </div>
</div>
  <?php
 $output = ob_get_contents();
  ob_end_clean();
  
  return $output;
}