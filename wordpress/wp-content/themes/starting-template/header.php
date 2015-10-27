<!DOCTYPE html>
<html>

<head>
  
  <meta charset="utf-8">
  <title><?php wp_title() ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_bloginfo( 'template_url' ); ?>/assets/css/styles.css" >
  
  <?php wp_head(); ?> 

</head>

<body>

  <header>

    <h1><?php echo get_bloginfo( 'name' ); ?></h1>
    <?php
    $main_menu = array(
      'theme_location' => 'main-menu',
      'conatiner' => '',
      'items-wrap' => 'ul>%3$s</ul>'
      );
      ?>
    <nav><?php wp_nav_menu($main_menu); ?></nav>
  </header> 
