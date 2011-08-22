<?php
/**
 * The template for displaying the sidebar.
 *
 * Custom & Commonly used functions throughout
 * our projects. Uncomment the functions you need
 * to use.
 *
 */
?>

function theme_init() {

  // Register Custom Site Navigation
  // See http://goo.gl/Rbkrd for syntax and options
  register_nav_menus( array( 'top_left'  => 'Top Left',
                             'top_right' => 'Top Right' ) );

}

add_action( 'after_setup_theme', 'theme_init' );


?>
