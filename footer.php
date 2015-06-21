    <div id="newsletter">
		<div class="row">
			<div class="medium-6 columns">
				<h3>Newsletter</h3>
				<p>Abonniere unseren monatlichen Newsletter mit Zusammenfassungen über die aktuellen Prozesse.</p>
			</div>
			<div class="medium-6 columns">
				<form action="" method="post" id="subForm">
					<div class="row collapse margintop-20px">
						<div class="small-8 medium-8 columns">
							<input id="fieldEmail" name="cm-xlitlu-xlitlu" type="text" placeholder="du@beispiel.at">
						</div>
						<div class="small-4 medium-4 columns">
							<input type="submit" href="#" class="postfix medium button expand" value="Abonnieren">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="footer-top">
		<div class="row">
			<div class="large-4 columns">
				<?php  dynamic_sidebar( 'footer-left' ); ?>
			</div>
			<div class="large-4 columns">
				<?php  dynamic_sidebar( 'footer-center' ); ?>
			</div>
			<div class="large-4 columns">
				<?php  dynamic_sidebar( 'footer-right' ); ?>
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

			<nav role="navigation">
				<section>
              <?php
                    $args = array(
                      'theme_location'        => 'footer-nav',
                      'menu_class'  => 'inline-list',
                      'container'   => 'false',
                      'walker' => new My_Sub_Menu()
                    );
                    wp_nav_menu( $args );
              ?>

          </section>
        </nav>

			</div>
		</div>
      </footer>
    </div> <!-- /container -->

    <?php wp_footer(); ?>

  </body>
</html>
