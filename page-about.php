<?php
/*
	Template Name: Articles Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="about-page">
				<div class="about-post">
				<?php while (have_posts()) : the_post();/* Start loop */ ?>
		        <?php the_content(); ?>
				<?php endwhile; /* End loop */ ?>
				</div>
				<div class="about-banner">
					<div class="overlay">
						<div class="book-wrap">
							<div class="the-gateway">
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/robert-sidell/img/the-gateway.jpg" alt="the gateway book cover" />
							</div>
							<div class="banner-text">
								<p class="quote">"I am reading 'The Gateway' book written by you and reflecting on it page by page, another 'baby' step forward in trying to reclaim that easive normalcy post-trauma"</p>
								<p>John Ford</p>
								<a href="#" class="button">Learn More about "The Gateway"</a>
							</div>
						</div>
					</div>
				</div>
				<div class="consultation">
					<h2>Contact Me</h2>
					<p class="section-name">PHONE</p>
					<div class="phone-row">
						<div class="phone-column">
							<p class="phone-name">Main Phone:</p>
							<p class="phone-number"><a href="tel:+17023843847" title="main phone link">702.384.3847</a></p>
						</div>
						<div class="phone-column">
							<p class="phone-name">Toll Free:</p>
							<p class="phone-number"><a href="tel:+18883843847" title="main phone link">1.888.384.3847</a></p>
						</div>
					</div>
					<p class="section-name">EMAIL</p>
					<p><a href="mailto:robert@robertsidell.com">robert@robertsidell.com</a></p>
					<div class="contact-form">
						<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
