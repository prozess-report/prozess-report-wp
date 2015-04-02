<div class="footer-top">
		<div class="row">
			<div class="large-6 columns">
				<h2>Kontakt</h2>
				<p>Verein Prozess.Report<br>Lindengasse 56/18-19<br>c/o Impact HUB Vienna<br>AT-1070 Vienna</p>
				<p><a href="mailto:prozessreport@systemli.org">prozessreport@systemli.org</a><br><a href="http://www.prozess.report/wp-content/uploads/C0B64C14.asc">GPG key</a></p>
			</div>

			<div class="large-6 columns">
				<div class="small-8 columns">
        		  <input type="text" placeholder="E-Mail">
    		    </div>
  			      <div class="small-4 columns">
    		      <a href="#" class="button postfix">Newsletter abbonieren</a>
  			      </div>
				<hr>
				<a href="" class="button">Spenden</a>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<?php  dynamic_sidebar( 'footer-logos' ); ?>
			</div>
		</div>

	</div>


      <footer>
		<div class="row">
			<div class="large-12 columns">

  			 <?php 
                  $args = array(
                    'menu'        => 'footer-nav',
                    'menu_class'  => 'inline-list',
                    'container'   => 'false'
                  );
                  wp_nav_menu( $args );
            ?>

			</div>
		</div>
      </footer>
    </div> <!-- /container -->

    <?php wp_footer(); ?>

  </body>
</html>
