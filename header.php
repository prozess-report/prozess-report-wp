<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>prozess.report</title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

      <div class="contain-to-grid fixed">    

      <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
          <li class="name">
            <h1><a href="<?php bloginfo('url'); ?>">prozess report</a></h1>
          </li>
           <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
          <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>

        <section class="top-bar-section">
          <!-- Right Nav Section -->

            <?php 
                  $args = array(
                    'menu'        => 'nav-top-bar',
                    'menu_class'  => 'right',
                    'container'   => 'false'
                  );
                  wp_nav_menu( $args );
            ?>

        </section>
      </nav>

			</div>
