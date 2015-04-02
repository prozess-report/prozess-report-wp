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
   				<div class="small-6">
   					<h2>Yüksel Y. klagt ÖBB</h2>
	   				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	   				<p><a href="" class="button">Weiterlesen</a></p>
	   			</div>
	   			<div class="small-6">
	   				<p>letzter Ticker-Post:</p>
	   			</div>
   			</div>

   			<div>
	   			<h2>Yüksel Y. klagt ÖBB</h2>
	   			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	   			<p><a href="" class="button">Weiterlesen</a></p>
   			</div>

   			<div>
	   			<h2>Yüksel Y. klagt ÖBB</h2>
	   			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	   			<p><a href="" class="button">Weiterlesen</a></p>
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
			    
		    	<h3><?php the_title(); ?></h3>
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