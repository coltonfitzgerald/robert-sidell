<?php
/*
	Template Name: Consultation Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="articles-page">
				<div class="consultation">
					<h2>Request a Free Consultation</h2>
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
						<?php do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
					</div>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
