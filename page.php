<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * To create custom page templates follow the directions
 * here: http://goo.gl/ePFkE.
 */

get_header();

?>

  <?php
  /* Run the loop to output the page.
   * If you want to overload this in a child theme then include a file
   * called loop-page.php and that will be used instead.
   */
  get_template_part( 'loop', 'page' );
  ?>

<?php get_footer(); ?>