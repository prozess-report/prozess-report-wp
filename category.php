<?php get_header(); ?>

	    <div class="row">

	    	<div class="large-8 columns">

          <h1><?php wp_title(); ?></h1>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="post">

			    	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<?php the_excerpt(); ?>

			    	<p class="meta">
			    		Von <?php the_author_posts_link(); ?>
			    		am <?php echo the_time('l, F jS, Y'); ?>
			    		<a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
					</p>

				</article>
				<?php endwhile; endif; ?>

	    	</div>

        <div class="large-4 columns">
	    	<?php get_sidebar( 'blog' ); ?>

	     </div>

    </div>

<?php get_footer(); ?>
