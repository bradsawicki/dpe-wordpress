<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i|Montserrat:600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <header class="header">
      <div class="container">

        <div class="logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.svg" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>"></a>
        </div>

        <div class="main-nav">
          <?php wp_nav_menu( array('menu'=>'1', 'container'=>'') ); ?>
        </div>

        <div class="sperry-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-sperry.svg" alt="">
        </div>

      </div>
    </header>

    <main class="main" role="main">
