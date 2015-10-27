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
				<a href="http://www.yelp.com/biz/robert-sidell-injury-attorney-las-vegas">
					<img src="<?php echo get_site_url(); ?>/wp-content/themes/robert-sidell/img/love-us-on-yelp.png" alt="Yelp" height="300" width="300">
				</a>

			</div>
		</div>
		<p class="disclaimer">Email or contact does not create an attorney and client relationship until there is a writen, signed container contract</p>
		<div class="social-media">
			<a href="https://www.facebook.com/rbsidell" title="link to facebook page">
				<div class="icon">
					<svg fill="white" enable-background="new 0 0 56.693 56.693" height="36px" version="1.1" viewBox="0 0 56.693 56.693" width="36px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<path d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"/>
					</svg>
				</div>
			</a>
			<a href="https://www.linkedin.com/in/robertsidell" title="link to linkedin page">
				<div class="icon">
					<svg height="36px" fill="white" style="enable-background:new 0 0 128 128;" version="1.1" viewBox="0 0 128 128" width="36px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<g>
							<rect height="62.915" width="20.914" x="16.452" y="47.708"/>
							<path d="M27.048,17.377c-7.155,0-11.838,4.695-11.838,10.868c0,6.041,4.545,10.877,11.562,10.877h0.141   c7.293,0,11.832-4.836,11.832-10.877C38.607,22.072,34.206,17.377,27.048,17.377z"/>
							<path d="M88.706,46.229c-11.11,0-16.075,6.116-18.853,10.396v0.204h-0.135c0.039-0.064,0.096-0.138,0.135-0.204v-8.917H48.937   c0.279,5.904,0,62.915,0,62.915h20.917V75.486c0-1.884,0.141-3.754,0.693-5.1c1.515-3.761,4.954-7.65,10.734-7.65   c7.569,0,10.597,5.772,10.597,14.227v33.661h20.914V74.545C112.791,55.22,102.473,46.229,88.706,46.229z"/>
						</g>
					</svg>
				</div>
			</a>
			<a href="<?php echo get_site_url(); ?>/rss/" title="link to rss feed"><div class="icon"><svg enable-background="new 0 0 56.693 56.693" height="36px" id="Layer_1" version="1.1" fill="white" viewBox="0 0 56.693 56.693" width="36px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M3.428,31.085c6.19,0,12.009,2.418,16.382,6.816c4.381,4.398,6.793,10.256,6.793,16.492h9.539  c0-18.113-14.676-32.848-32.714-32.848V31.085z M3.443,14.174c22.061,0,40.01,18.047,40.01,40.231h9.539  c0-27.445-22.229-49.77-49.549-49.77V14.174z M16.634,47.741c0,3.648-2.959,6.607-6.607,6.607S3.42,51.39,3.42,47.741  c0-3.65,2.958-6.607,6.606-6.607S16.634,44.091,16.634,47.741z"/></svg></div></a>
			<a href="http://www.yelp.com/biz/robert-sidell-injury-attorney-las-vegas">
				<div class="icon">
					<svg viewBox="0 0 56.69 56.69" fill="white" xmlns="http://www.w3.org/2000/svg" width="36px" enable-background="new 0 0 56.69 56.69"><g id="XMLID_2_"><path class="st0" d="M10.205 37.307c.38.724 1.054 1.171 1.795 1.197l.118.004c.406 0 1.03-.193 7.773-2.359 2.335-.746 2.966-.947 3.154-1.01.974-.249 1.647-1.138 1.714-2.266.062-1.15-.558-2.171-1.53-2.534-1.498-.61-2.026-.826-2.238-.901l.003-.007c-8.034-3.315-8.073-3.315-8.535-3.321-.75-.035-1.434.355-1.881 1.059-.844 1.357-1.168 5.336-.894 7.99.109.974.284 1.695.521 2.147z" id="XMLID_7_"/><path class="st0" d="M27.086 37.197c-1.073-.414-2.232-.141-2.878.668l-1.427 1.692-.135.159c-5.623 6.599-5.643 6.657-5.794 7.095-.108.292-.145.593-.112.884.04.423.225.845.537 1.221 1.246 1.481 6.643 3.534 9.041 3.534.181 0 .346-.011.49-.036.825-.15 1.426-.623 1.697-1.345.149-.436.161-.472.183-8.23l.019-3.313c.064-1.011-.572-1.925-1.621-2.329z" id="XMLID_6_"/><path class="st0" d="M27.6 5.771l-.009-.042c-.207-.755-.801-1.307-1.631-1.514-2.211-.549-10.29 1.723-11.849 3.332-.567.59-.797 1.358-.584 2.139.234.481 9.027 14.318 10.026 15.89.888 1.438 1.844 2.162 2.85 2.162.224 0 .45-.035.678-.108 1.256-.386 1.842-1.62 1.743-3.667-.139-3.197-1.1-17.477-1.223-18.191z" id="XMLID_5_"/><path class="st0" d="M33.113 31.671c-.616-.154-1.188-.56-1.581-1.163-.613-.94-.594-2.05.05-2.83.087-.112 1.965-2.671 1.965-2.671 4.509-6.167 4.602-6.29 4.988-6.542.632-.427 1.402-.461 2.16-.094 1.836.895 5.43 6.198 5.656 8.345l.004.035-.001.083c.05.808-.266 1.503-.891 1.928-.387.251-.466.302-8.865 2.337 0 0-2.365.728-3.484.572z" id="XMLID_4_"/><path class="st0" d="M45.857 38.723c-.361-.269-.391-.291-7.776-2.719-1.19-.392-3.007-.993-3.141-1.044-.942-.361-2.006-.037-2.711.83-.728.887-.824 2.079-.247 2.958l1.256 2.044c4.395 7.139 4.584 7.41 4.958 7.702.363.284.784.428 1.233.428.291 0 .595-.06.901-.183 1.929-.77 5.978-5.914 6.279-7.981.113-.822-.157-1.56-.752-2.035z" id="XMLID_3_"/></g></svg>
				</div>
			</a>
			<a href="https://plus.google.com/109047712075826111143/">
				<div class="icon">
					<svg height="56.693" fill="white" width="36px" viewBox="0 0 56.693 56.693" width="56.693" xmlns="http://www.w3.org/2000/svg"><path d="M52.218 25.852h-7.512v-7.51c0-.573-.465-1.039-1.037-1.039h-2.139c-.576 0-1.041.466-1.041 1.039v7.51h-7.512c-.572 0-1.039.467-1.039 1.041v2.139c0 .574.467 1.039 1.039 1.039h7.512v7.514c0 .574.465 1.039 1.041 1.039h2.139c.572 0 1.037-.465 1.037-1.039v-7.515h7.512c.572 0 1.039-.465 1.039-1.039v-2.139c0-.574-.467-1.04-1.039-1.04zM26.974 32.438c-1.58-1.119-3.016-2.76-3.041-3.264 0-.918.082-1.357 2.141-2.961 2.662-2.084 4.128-4.824 4.128-7.719 0-2.625-.802-4.957-2.167-6.595h1.059c.219 0 .434-.068.609-.196l2.955-2.141c.367-.263.521-.732.381-1.161-.141-.428-.537-.72-.988-.72h-13.216c-1.446 0-2.915.255-4.357.751-4.816 1.661-8.184 5.765-8.184 9.978 0 5.969 4.624 10.493 10.805 10.635-.121.473-.182.939-.182 1.396 0 .92.233 1.791.713 2.633h-.17c-5.892 0-11.21 2.891-13.229 7.193-.526 1.119-.794 2.25-.794 3.367 0 1.086.279 2.131.826 3.113 1.269 2.27 3.994 4.031 7.677 4.961 1.901.48 3.944.725 6.065.725 1.906 0 3.723-.246 5.403-.732 5.238-1.521 8.625-5.377 8.625-9.828-.001-4.271-1.374-6.828-5.059-9.435zm-16.691 9.777c0-3.107 3.947-5.832 8.446-5.832h.121c.979.012 1.934.156 2.834.432l.893.611c2.084 1.42 3.461 2.357 3.844 3.861.09.379.135.758.135 1.125 0 3.869-2.885 5.83-8.578 5.83-4.315 0-7.695-2.646-7.695-6.027zm4.094-29.357c.703-.803 1.624-1.227 2.658-1.227l.117.002c2.921.086 5.716 3.341 6.23 7.256.289 2.192-.199 4.253-1.301 5.509-.705.805-1.613 1.229-2.689 1.229h-.049c-2.861-.088-5.716-3.467-6.227-7.377-.287-2.186.173-4.151 1.261-5.392z"/></svg>
				</div>
			</a>
		</div>
		<div class="contact-links">
			<a href="<?php echo get_site_url(); ?>/free-consultation/" class="button consultation-link">Request a Free Consultation</a>
			<a href="tel:+17023843847" class="button phone-link">Call 702-384-3847</a>
		</div>
		<div class="email-links">
			<a href="mailto:info@sidelllawoffices.com">info@sidelllawoffices.com</a>
		</div>
		<p class="copyright">&copy; <?php echo Date('Y'); ?> Sidell Law Offices | Built by <a href="https://cherrypopdesigns.com">Cherry Pop Designs</a> | All Rights Reserved.</p>
		<div class="footer-menu"><?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?></div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
