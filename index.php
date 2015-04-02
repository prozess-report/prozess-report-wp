<?php get_header(); ?>

      <div class="row">
        <div class="large-12 columns">
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
            <div class="page-header"> 
              <h1><?php the_title(); ?></h1>
            </div>


          <?php the_content(); ?>

        <?php endwhile; else: ?>

          <div class="page-header"> 
              <h1>Oh no!</h1>
            </div>

            <p>Diese Seite konnte leider nicht gefunden werden.</p>

        <?php endif; ?>

        </div>
        </div>

<?php get_footer(); ?>