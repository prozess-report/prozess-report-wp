<?php get_header(); ?>

		<div class="row">
	   	<div class="large-12 columns sub-nav-panel">

  			<?php front_page_submenu(); ?>

			</div>
    </div>

    <div class="row">
   		<div class="large-8 columns main-news-panel">

			<h2>AKTUELL</h2>

   			<?php $myQuery = new WP_Query('showposts=1&cat=1');
			while ($myQuery->have_posts()) : $myQuery->the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<span><?php echo the_time('j. F Y'); ?></span>
				<?php the_content(); ?>


			<?php endwhile; wp_reset_query(); ?>

   		</div>

   		<div class="large-4 columns">

			<?php if ( ! dynamic_sidebar( 'front-calendar' ) ): ?>
			<h3>Widget Setup</h3>
			<p>Please add widgets to the page widget to have them display here</p>
			<?php endif; ?>

   		</div>

   		<div class="medium-4 columns front-widget">

			<?php if ( ! dynamic_sidebar( 'front-calendar' ) ): ?>
			<h3>Widget Setup</h3>
			<p>Please add widgets to the page widget to have them display here</p>
			<?php endif; ?>

   		</div>
    </div>

    <div class="row">

    		<?php	$myQuery = new WP_Query('showposts=2&cat=1&offset=1');
						while ($myQuery->have_posts()) : $myQuery->the_post(); ?>
						<article class="large-4 columns news-panel">

							<h3><?php the_title(); ?></h3>
							<span><?php echo the_time('j. F Y'); ?></span>
							<?php the_content(); ?>

						</article>

					<?php endwhile; wp_reset_query(); ?>


	    <div class="medium-4 columns front-widget">

			<?php if ( ! dynamic_sidebar( 'front-description' ) ): ?>
			<h3>Widget Setup</h3>
			<p>Please add widgets to the page widget to have them display here</p>
			<?php endif; ?>

	    </div>
    </div>


<?php get_footer(); ?>
