<?php
/*
	Template Name: Services Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="services-page">
				<h1 class="page-title">Services</h2>
				<?php $args = array( 'post_type' => 'services' ); $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="service">
						<a href="<?php echo get_permalink(); ?>" title="link to service"><h3><?php echo the_title(); ?></h3></a>
						<p><?php echo the_excerpt(); ?></p>
					</div>
				<?php endwhile; ?>
			</div>

				<?php wp_reset_postdata(); ?>

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
						<div class="phone-column">
							<p class="phone-name">24hr Tape Info:</p>
							<p class="phone-number"><a href="tel:+17028807888" title="main phone link">702.880.7888</a></p>
						</div>
					</div>
					<p class="section-name">EMAIL</p>
					<p><a href="mailto:robert@robertsidell.com">robert@robertsidell.com</a></p>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
