<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="profile" href="http://gmpg.org/xfn/11">

        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <?php wp_head(); ?>

    </head>

    <body <?php body_class('no-js'); ?> >

  <header>

      <div class="container">

          <div class="logo"><?php the_custom_logo(); ?></div>

            <nav class="primary-navigation">

              <?php wp_nav_menu( array( 'theme_location' => 'header',  ) );  ?>

            </nav>

      </div>

  </header>