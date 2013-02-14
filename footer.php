<?php
/**
 * The template for displaying page bottom.
 *
 * Global file that displays footers and the bottom
 * <body> portion of a website.
 *
 */
?>

  <?php // Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.1.min.js"><\/script>')</script>
  <script src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>

  <?php // Change UA-XXXXX-X to be your site's ID ?>
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

  <?php wp_footer(); ?>
</body>
</html>
