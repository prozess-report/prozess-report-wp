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
							<input type="submit" href="#" class="postfix small button expand" value="Abonnieren">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="footer-top">
		<div class="row">
			<div class="large-4 columns">
				<h3>Kontakt</h3>
				<p>Verein prozess.report<br>Lindengasse 56/18-19<br>c/o Impact HUB Vienna<br>AT-1070 Vienna</p>
				<p><a href="mailto:prozessreport@systemli.org">prozessreport@systemli.org</a><br><a href="http://www.prozess.report/wp-content/uploads/C0B64C14.asc">GPG key</a></p>
			</div>
			<div class="large-4 columns">
				<h3>Anonymer Briefkasten</h3>
				<p>Du kannst uns völlig anonym und verschlüsselt Informationen zukommen lassen, die hilfreich für die Berichterstattung von Prozessen sind. Weder wir noch andere können dich dabei zurückverfolgen.</p>
			</div>
			<div class="large-4 columns">
				<h3>Spenden</h3>
				<p>Du kannst uns völlig anonym und verschlüsselt Informationen zukommen lassen, die hilfreich für die Berichterstattung von Prozessen sind. Weder wir noch andere können dich dabei zurückverfolgen.</p>
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
                    'menu'        => 'nav-bottom-bar',
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
