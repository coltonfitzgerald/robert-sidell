<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Robert-Sidell
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-row">
			<div class="articles-footer">
				<p class="section-name">RECENT ARTICLES</p>
				<?php // Display blog posts on any page @ http://m0n.co/l
					$temp = $wp_query; $wp_query= null;
					$wp_query = new WP_Query(); $wp_query->query('showposts=4');
					while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<a href="<?php echo get_permalink(); ?>">
							<div class="article">
								<h3><?php echo the_title(); ?></h3>
								<p class="article-date"><?php echo get_the_date(); ?>
							</div>
						</a>
				<?php endwhile; ?>
			</div>
			<div class="services-footer">
				<p class="section-name">SERVICES</p>
				<div class="services">
					<?php $args = array( 'post_type' => 'services', 'posts_per_page' => 8 ); $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<a href="<?php echo get_permalink(); ?>?">
					<div class="service">
						<h3><?php echo the_title(); ?></h3>
					</div>
					</a>
				<?php endwhile; ?>
				</div>
			</div>
			<div class="radio-show-footer">
				<p class="section-name">RADIO SHOW</p>
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/robert-sidell/img/radio.png" alt="KXNT 840AM" />
				<p>840AM KXNT Las Vegas</p>
			</div>
		</div>
		<p class="disclaimer">Email or contact does not create an attorney and client relationship until there is a writen, signed container contract</p>
		<div class="social-media">
			<a href="https://www.facebook.com/rbsidell" title="link to facebook page"><div class="icon"><svg fill="white" enable-background="new 0 0 56.693 56.693" height="36px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="36px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"/></svg></div></a>
			<a href="https://www.linkedin.com/in/robertsidell" title="link to linkedin page"><div class="icon"><svg height="36px" fill="white" id="Layer_1" style="enable-background:new 0 0 128 128;" version="1.1" viewBox="0 0 128 128" width="36px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
			<![CDATA[
				.st0{fill-rule:evenodd;clip-rule:evenodd;}
			]]>
			</style><g><rect height="62.915" width="20.914" x="16.452" y="47.708"/><path d="M27.048,17.377c-7.155,0-11.838,4.695-11.838,10.868c0,6.041,4.545,10.877,11.562,10.877h0.141   c7.293,0,11.832-4.836,11.832-10.877C38.607,22.072,34.206,17.377,27.048,17.377z"/><path d="M88.706,46.229c-11.11,0-16.075,6.116-18.853,10.396v0.204h-0.135c0.039-0.064,0.096-0.138,0.135-0.204v-8.917H48.937   c0.279,5.904,0,62.915,0,62.915h20.917V75.486c0-1.884,0.141-3.754,0.693-5.1c1.515-3.761,4.954-7.65,10.734-7.65   c7.569,0,10.597,5.772,10.597,14.227v33.661h20.914V74.545C112.791,55.22,102.473,46.229,88.706,46.229z"/></g></svg></div></a>
			<a href="<?php echo get_site_url(); ?>/rss/" title="link to rss feed"><div class="icon"><svg enable-background="new 0 0 56.693 56.693" height="36px" id="Layer_1" version="1.1" fill="white" viewBox="0 0 56.693 56.693" width="36px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M3.428,31.085c6.19,0,12.009,2.418,16.382,6.816c4.381,4.398,6.793,10.256,6.793,16.492h9.539  c0-18.113-14.676-32.848-32.714-32.848V31.085z M3.443,14.174c22.061,0,40.01,18.047,40.01,40.231h9.539  c0-27.445-22.229-49.77-49.549-49.77V14.174z M16.634,47.741c0,3.648-2.959,6.607-6.607,6.607S3.42,51.39,3.42,47.741  c0-3.65,2.958-6.607,6.606-6.607S16.634,44.091,16.634,47.741z"/></svg></div></a>
			<a href="mailto:robert@robertsidell.com" title="email link"><div class="icon"><svg enable-background="new -0.709 -27.689 141.732 141.732" fill="white" height="36px" id="Livello_1" version="1.1" viewBox="-0.709 -27.689 141.732 141.732" width="36px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Livello_106"><path d="M90.854,43.183l39.834,34.146l-3.627,3.627L86.924,46.552L70.177,60.907L53.626,46.719L13.693,80.951l-3.807-3.807   L49.5,43.182L9.68,9.044l3.627-3.627l56.676,48.587L82.8,43.016l-0.035-0.032h0.073l43.829-37.575l3.811,3.811L90.854,43.183z    M140.314,80.96V5.411c0-2.988-2.416-5.411-5.396-5.411c-0.021,0-0.041,0.003-0.062,0.004C134.835,0.003,134.814,0,134.793,0   c-0.333,0-0.655,0.035-0.975,0.098V0.018H11.158V0.01H5.564C5.508,0.007,5.453,0,5.396,0C5.376,0,5.355,0.003,5.334,0.004   C5.312,0.003,5.293,0,5.271,0C2.359,0,0,2.366,0,5.284c0,0.021,0.003,0.042,0.003,0.063C0.003,5.368,0,5.39,0,5.411V80.96   c0,2.979,2.416,5.396,5.396,5.396h129.521C137.898,86.355,140.314,83.939,140.314,80.96"/></g><g id="Livello_1_1_"/></svg></div></a>
		</div>
		<div class="contact-links">
			<a href="<?php echo get_site_url(); ?>/free-consultation/" class="button consultation-link">Request a Free Consultation</a>
			<a href="tel:+17023843847" class="button phone-link">Call 702-384-3847</a>
		</div>
		<p class="copyright">&copy; <?php echo Date('Y'); ?> Sidell Law Offices | Built by <a href="https://cherrypopdesigns.com">Cherry Pop Designs</a> | All Rights Reserved.</p>
		<div class="footer-menu"><?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?></div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
