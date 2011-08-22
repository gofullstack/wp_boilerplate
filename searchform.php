<?php
/**
 * The template for displaying the search form.
 *
 * Global file that displays the search form. Different
 * from WordPress's default where this includes
 * placeholder text in the text input field.
 *
 */
?>

<form role="search" method="get" id="search_form" action="<?php echo home_url('/'); ?>">
  <label for="s">Search Terms</label>
  <input type="search" name="s" id="s" placeholder="Search Terms" />
  <input type="submit" value="Go" id="s_button" />
</form>