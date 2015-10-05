<?php
/*
	Template Name: Home Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="home-header parallax-window" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/img/home-header.jpg">
				<h1 class="animated fadeIn">SIDELL<br/>
					<span>LAW OFFICES</span></h1>
				<p class="tag-line animated fadeIn">You can pursue your rights and maintain your integrity</p>
			</div>
			<div class="home-section about">
				<p class="section-name">SIDELL LAW OFFICES</p>
				<h3>Personal Injury Lawyer</h3>
				<p class="about-info">Unfortunately, accidents occur nearly every day in the Las Vegas, North Las Vegas, and Henderson areas. These unexpected events can happen in an instant, and can leave the victims severely injured. Fortunately for those victims, Robert Sidell is available to help in bringing accident claims.</p>
				<p class="no-fee">No fee unless you win</p>
			</div>
			<div class="home-section services">
				<p class="section-name">SERVICES</p>
				<div class="service-list">
					<div class="service">
						<h3><a href="/services/car-accidents/">Car Accidents</a></h3>
						<p>We have years of vital experience in handling car accident cases in the Las Vegas area. Our firm has assisted clients in almost every kind of car accident case. Do not let yourself become the victim in a physical or economic sense. We are here to help.</p>
					</div>
					<div class="service">
						<h3><a href="/services/motorcycle-accidents/">Motorcycle Accidents</a></h3>
						<p>Motorcycles, while fun to ride, can be quite dangerous for those riding them if an accident were to occur. The cost of healing injuries of you or your loved ones shouldn't fall to you, and we can help ensure they don't. Contact us today.</p>
					</div>
					<div class="service">
						<h3><a href="/services/truck-accidents/">Truck Accidents</a></h3>
						<p>Truck accidents can be some of the most fatal roadway incidents in Las Vegas. Large trucks can inflict severe injuries or even death on the inhabitants of the vehicles they collide with. If you'd like to bring a claim after being hit by a truck, contact our Las Vegas attorneys today.</p>
					</div>
					<div class="service">
						<h3><a href="/services/wrongful-death/">Wrongful Death</a></h3>
						<p>Quite possibly the saddest case involves wrongful death to unsuspecting victims. Our Las Vegas attorneys can bring you all the compensation you deserve for the loss of your loved ones, just as we have helped countless others.</p>
					</div>
				</div>
				<a href="<?php echo get_site_url(); ?>/services/" class="button service-link">View all Services</a>
			</div>
			<div class="home-section contact-links">
				<a href="<?php echo get_site_url(); ?>/consultation/" class="button consultation-link">Request a Free Consultation</a>
				<p>OR</p>
				<a href="tel:+17023843847"class="button phone-link">Call 702-384-3847</a>
			</div>
			<div class="home-section articles">
				<p class="section-name">ARTICLES</p>
				<div class="article-list">
				<?php $i = 1; if (have_posts()) : while ( have_posts() && $i < 3 ) : the_post(); ?>
					<div class="article">
						<h3><?php echo the_title(); ?></h3>
						<p class="article-date"><?php echo get_the_date(); ?>
						<p><?php echo the_excerpt(); ?></p>
						<!--<a href="<?php echo get_permalink(); ?>" class="button" title="link to article">Read More</a>-->
					</div>
				<?php $i++; endwhile; ?>
				<?php endif; ?>
				</div>
				<a href="<?php echo get_site_url(); ?>/articles/" class="button service-link">View all Articles</a>
			</div>
			<div class="home-section radio-show">
				<p class="section-name">RADIO SHOW</p>
				<div class="radio-wrap">
					<img src="<?php echo get_site_url(); ?>/wp-content/themes/robert-sidell/img/radio.png" alt="KXNT News/Talk Radio 840AM" />
					<div class="radio-info">
						<p>Tune to 840AM Las Vegas to listen to Success and the Law with me, Robert Sidell</p>
						<a href="<?php echo get_site_url(); ?>/radio-show/" class="button radio-link">View Show Recordings</a>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
