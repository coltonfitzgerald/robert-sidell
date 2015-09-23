<?php
/*
	Template Name: Home Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="home-header">
				<h1>SIDELL</h1>
				<h2>LAW OFFICES</h2>
			</div>
			<div class="home-section about">
				<p class="section-name">SIDELL LAW OFFICES</p>
				<h3>Personal Injury Lawyer</h3>
				<p class="about-info">Unfortunately, accidents occur nearly every day in the Las Vegas, North Las Vegas, and Henderson areas. These unexpected events can happen in an instant, and can leave the victims severely injured. Fortunately for those victims, Robert Sidell is available to help in bringing accident claims.</p>
			</div>
			<div class="home-section services">
				<p class="section-name">SERVICES</p>
				<div class="service-list">
				<?php $args = array( 'post_type' => 'services', 'posts_per_page' => 4 ); $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="service">
						<h3><?php echo the_title(); ?></h3>
						<p><?php echo the_content(); ?></p>
					</div>
				<?php endwhile; ?>
				</div>
				<a href="<?php echo get_site_url(); ?>/services/" title="link to services page" class="button service-link">View all Services</a>
			</div>
			<div class="home-section contact-links">
				<a href="<?php echo get_site_url(); ?>/consultation/" title="link to home page" class="button consultation-link">Request a Free Consultation</a>
				<p>OR</p>
				<a href="tel:+17023843847" title="link to office number" class="button phone-link">Call 702-384-3847</a>
			</div>
			<div class="home-section articles">
				<p class="section-name">ARTICLES</p>
				<div class="article-list">
				<?php $i = 1; if (have_posts()) : while ( have_posts() && $i < 3 ) : the_post(); ?>
					<div class="article">
						<h3><?php echo the_title(); ?></h3>
						<p class="article-date"><?php echo get_the_date(); ?>
						<p><?php echo the_excerpt(); ?></p>
					</div>
				<?php $i++; endwhile; ?>
				<?php endif; ?>
				</div>
				<a href="<?php echo get_site_url(); ?>/articles/" title="link to articles page" class="button service-link">View all Articles</a>
			</div>
			<div class="home-section radio-show">
				<p class="section-name">RADIO SHOW</p>
				<div class="radio-wrap">
					<img src="<?php echo get_site_url(); ?>/wp-content/themes/robert-sidell/img/radio.png" alt="radio show logo" />
					<div class="radio-info">
						<p>Tune to 100.5 KXNT Las Vegas to listen to Success and the Law with me, Robert Sidell</p>
						<a href="#" title="link to radio page" class="button radio-link">View Show Recordings</a>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
