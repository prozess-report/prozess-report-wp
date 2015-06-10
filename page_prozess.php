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







   		</div>

      <div class="medium-4 columns">

        <?php

        $livestreamid = get_post_meta($post->ID, live_stream_id, true);

        if ( $livestreamid[0] ) {

        echo do_shortcode('[livestream streamid="'.$livestreamid.'" feedcount=5 credit=0]');

        }

        endwhile; ?>


      </div>

    </div>

<?php get_footer(); ?>
