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
						<a href="<?php echo get_permalink(); ?>" title="link to post">
							<div class="article">
								<h3><?php echo the_title(); ?></h3>
								<p class="article-date"><?php echo get_the_date(); ?>
							</div>
						</a>
				<?php endwhile; ?>
			</div>
			<div class="services-footer">
				<p class="section-name">SERVICES</p>
				<div class="service">
					<?php $args = array( 'post_type' => 'services', 'posts_per_page' => 8, 'orderby'=> 'title', 'order' => 'ASC' ); $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<a href="<?php echo get_permalink(); ?>?" title="link to service">
					<div class="service">
						<h3><?php echo the_title(); ?></h3>
					</div>
					</a>
				<?php endwhile; ?>
				</div>
			</div>
			<div class="radio-show-footer">
				<p class="section-name">RADIO SHOW</p>
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/robert-sidell/img/radio.png" alt="radio show logo" />
				<p>840AM Las Vegas</p>
			</div>
		</div>
		<p class="disclaimer">Email or contact does not create an attorney and client relationship until there is a writen, signed container contract</p>
		<div class="contact-links">
			<a href="<?php echo get_site_url(); ?>/consultation/" title="link to home page" class="button consultation-link">Request a Free Consultation</a>
			<a href="tel:+17023843847" title="link to office number" class="button phone-link">Call 702-384-3847</a>
		</div>
		<p class="copyright">&copy; <?php echo Date('Y'); ?> Sidell Law Offices | Built by <a href="https://cherrypopdesigns.com" title="link to Cherry Pop Designs">Cherry Pop Designs</a> | All Rights Reserved.</p>
		<div class="footer-menu"><?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?></div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
