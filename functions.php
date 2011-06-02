<?php

/*
 *  functions.php
 *  -------------------
 *  Custom functions used in this theme. Several commonly used
 *  functions are included - uncomment what you want to use
 *
 */


function theme_init() {

  // Register Custom Site Navigation
  // See http://goo.gl/Rbkrd for syntax and options
  register_nav_menus( array( 'top_left'  => 'Top Left',
                             'top_right' => 'Top Right' ) );

}

add_action( 'after_setup_theme', 'theme_init' );


?>
