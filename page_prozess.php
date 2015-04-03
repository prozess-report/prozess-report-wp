<?php
/*
Template Name: Prozess Seite mit Livestream Sidebar
*/

get_header(); ?>

    <div class="row">
	    <div class="large-8 columns">

            <?php while ( have_posts() ) : the_post(); ?>
  
              <h2><?php the_title(); ?></h2>
              <?php the_content(); ?>

            <?php endwhile; ?>


   		</div>

    </div>

<?php get_footer(); ?>