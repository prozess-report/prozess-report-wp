<?php get_header(); ?>


	<div class="row">
	   	<div class="large-12 columns sub-nav-panel">

  			<?php front_page_submenu(); ?>

		</div>
    </div>

    <div class="row">
   		<div class="large-8 columns main-news-panel">
	   		
			<h2>Aktuell</h2>

   			<?php $myQuery = new WP_Query('showposts=1&cat=1');
			while ($myQuery->have_posts()) : $myQuery->the_post(); ?>
			<div>
				<?php the_content(); ?>
			</div>
			<?php endwhile; wp_reset_query(); ?>

   		</div>
   		
   		<div class="large-4 columns">

			<?php if ( ! dynamic_sidebar( 'front-calendar' ) ): ?>
			<h3>Widget Setup</h3>
			<p>Please add widgets to the page widget to have them display here</p>
			<?php endif; ?>

   		</div>

    </div>

    <div class="row">

    	<?php
		$myQuery = new WP_Query('showposts=2&cat=1');
		while ($myQuery->have_posts()) : $myQuery->the_post(); ?>
			<article class="large-4 columns">

				<?php the_content(); ?>
				<p><?php echo the_time('j. F Y'); ?></p>

			</article>

		<?php endwhile; wp_reset_query(); ?>


	    <div class="large-4 columns">

			<?php if ( ! dynamic_sidebar( 'front-description' ) ): ?>
			<h3>Widget Setup</h3>
			<p>Please add widgets to the page widget to have them display here</p>
			<?php endif; ?>

	    </div>

    </div>


<?php get_footer(); ?>
