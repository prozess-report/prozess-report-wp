<?php get_header(); ?>


	<div class="row">
	   	<div class="large-12 columns">

	   		<dl class="sub-nav">
				<dt> Prozesse:</dt>
	 			<dd><a href="#">Yüksel Y. klagt ÖBB</a></dd>
	 			<dd><a href="#">Yüksel Y. klagt ÖBB</a></dd>
	 			<dd><a href="#">Yüksel Y. klagt ÖBB</a></dd>
			</dl>
		</div>
    </div>	

    <div class="row">
   		<div class="large-12 columns panel prozess-slider">

   			<div>
   			<?php $myQuery = new WP_Query('showposts=5&cat=16');
			while ($myQuery->have_posts()) : $myQuery->the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; wp_reset_query(); ?>	
			</div>

   		</div>

    </div>

    <div class="row">
    	<div class="large-12 columns">
			<h2>Aktuell</h2>
    	</div>


    	<?php
		$myQuery = new WP_Query('showposts=3&cat=1');
		while ($myQuery->have_posts()) : $myQuery->the_post(); ?>
			<article class="large-4 columns">
			    
				<?php the_content(); ?>
				<p><?php echo the_time('j. F Y'); ?></p>

			</article>

		<?php endwhile; wp_reset_query(); ?>

    </div>


    <div class="row">
	    <div class="large-8 columns">

			<?php if ( ! dynamic_sidebar( 'front-description' ) ): ?>
			<h3>Widget Setup</h3>
			<p>Please add widgets to the page widget to have them display here</p>
			<?php endif; ?>	

	    </div>
	    	
   		<div class="large-4 columns">

			<?php if ( ! dynamic_sidebar( 'front-calendar' ) ): ?>
			<h3>Widget Setup</h3>
			<p>Please add widgets to the page widget to have them display here</p>
			<?php endif; ?>

   		</div>

    </div>


<?php get_footer(); ?>