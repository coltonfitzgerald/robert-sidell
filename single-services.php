<?php
/*
	Template Name: Service Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<div class="single-article">
				<h2 class="post-title"><?php echo the_title(); ?></h2>
				<p><?php echo the_content(); ?></p>
			</div>
		<?php endwhile; // End of the loop. ?>
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
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
