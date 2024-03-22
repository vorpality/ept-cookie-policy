<?php

function ept_cookie_locationeer_render_cb($atts) {

if (isset($_COOKIE['location'])){
  return '';
}
ob_start();
  ?>
  <div class="wp-block-ept-cookie-locationeer">
    <div class="content">
      <p> <?php _e('Enter your location for personalized results, if you choose to skip this results may not be accurate.', 'e-potis');
      ?></p>
      <form id = "location-form">
        <input type = "text" id = "user-address"></input>
        <input type = "submit" id = "submit-location"></input>
      </form>
      <button id = "skip-location"> <?php _e('Skip location.', 'e-potis');?></button>
    </div>
  </div>
  <?php
 $output = ob_get_contents();
  ob_end_clean();
  
  return $output;
}