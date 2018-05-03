<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>	
	
	</section>
	
	<footer class="footer">
		<div class="column first">
			<h4>Educational Community Alliance CU</h4>
			<p>3845 Angola Rd., Toledo, OH 43615<br>
				Toll Free: 866.381.2323<br>
				Routing Number: 241282603<br>
				Debit/ATM card: 800.264.5578 / 1.866.842.5208<br>
				Visa Credit card: 800.808.7230</p>
		</div>
		<div class="column">
			<h4>Loans</h4>
			<?php wp_nav_menu( array( 'theme_location' => 'footer-one', 'menu_class' => 'nav-menu' ) ); ?>
		</div>
		<div class="column small">
			<h4>Accounts</h4>
			<?php wp_nav_menu( array( 'theme_location' => 'footer-two', 'menu_class' => 'nav-menu' ) ); ?>
		</div>
		<div class="column">
			<h4>Services</h4>
			<?php wp_nav_menu( array( 'theme_location' => 'footer-three', 'menu_class' => 'nav-menu' ) ); ?>
		</div>
		<div class="column small">
			<h4>Resources</h4>
			<?php wp_nav_menu( array( 'theme_location' => 'footer-four', 'menu_class' => 'nav-menu' ) ); ?>
		</div>
		<div class="column last">
			<h4>Our Story</h4>
			<?php wp_nav_menu( array( 'theme_location' => 'footer-five', 'menu_class' => 'nav-menu' ) ); ?>
		</div>
	</footer><!-- #colophon -->

	<div class="colophon">
		<div class="column">
			<a href="/ncua-insurance-information/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo-ncua.png" class="alignright" alt="Insured by the NCUA"></a>Your savings are federally insured to at least $250,000, and backed by the full faith and credit of the United States Government. 
		</div>
		<div class="column">
			<img src="<?php bloginfo( 'template_url' ); ?>/img/logo-equal-housing.png" class="alignright" alt="Equal Housing Lender Logo">Equal Housing Lender - We do business in accordance with the Federal Fair Housing Law and the Equal Housing Opportunity Act. 
		</div>
		<div class="column links">
			<a href="https://co-opcreditunions.org/locator/" class="alignright"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo-shared.png" class="alignright" alt="COOP Credit Union Locator"></a>
			<a href="https://www.facebook.com/EducaCommunity/" class="alignright"><img src="<?php bloginfo( 'template_url' ); ?>/img/social-facebook.png" class="alignright" alt="Visit us on Facebook."></a>
			<?php wp_nav_menu( array( 'theme_location' => 'footer-notices', 'menu_class' => 'nav-menu' ) ); ?>
		</div>
		<div class="ada-disclaimer">
			Educational Community Alliance Credit Union is committed to providing a website that is accessible to the widest possible audience in accordance with ADA standards and guidelines. We are actively working to increase the accessibility and usability of our website to all people. If you are using a screen reader or other auxiliary aid and are having problems using this website, please contact us at 866.381.2323 for assistance. All products and services available on this website are available at our office as well. 
		</div>
	</div>

</div><!-- #container -->

<?php wp_footer(); ?>
</body>
</html>