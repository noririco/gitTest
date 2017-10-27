<?php
function a() {
  wp_enqueue_script( 'angular',get_template_directory_uri() );
}

add_action( 'wp_enqueue_scripts', $function_to_add, $priority = 10, $accepted_args = 1 )
 ?>
