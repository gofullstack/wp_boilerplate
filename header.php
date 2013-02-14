<?php
/**
 * The template for displaying page top.
 *
 * Global file that displays headers, <head> and the top
 * <body> portion of a website.
 *
 */
?>
<!doctype html>

<!--[if lt IE 7]> <html <?php body_class('no-js ie6 oldie'); ?> lang="en"> <![endif]-->
<!--[if IE 7]>    <html <?php body_class('no-js ie7 oldie'); ?> lang="en"> <![endif]-->
<!--[if IE 8]>    <html <?php body_class('no-js ie8 oldie'); ?> lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php body_class('no-js'); ?> lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">

  <title><?php wp_title('&mdash;', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <script src="<?php bloginfo('template_directory'); ?>/js/libs/modernizr-2.6.2.min.js"></script>

  <?php wp_head(); ?>
</head>

<body>
