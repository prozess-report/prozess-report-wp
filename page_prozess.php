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

              <?php $terminid = get_post_meta($post->ID, live_stream_id, true);

              if ( $terminid[0] ):
                  ?><h3>Termine</h3><?php
                  echo do_shortcode('');

              endif;
              ?>

           		</div>

              <div class="medium-4 columns">

                <?php $livestreamid = get_post_meta($post->ID, live_stream_id, true);

                if ( $livestreamid[0] ):

                  echo do_shortcode('[livestream streamid="'.$livestreamid.'" feedcount=5 credit=0]');

                endif;

            endwhile; ?>


      </div>

    </div>

<?php get_footer(); ?>
