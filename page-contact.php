<?php
/*
	Template Name: Contact Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h2 class="page-title contact-title">Contact Me</h2>
			<div class="maps">
				<div class="map-wrap">
					<div class="map-aside">
						<div class="section">
							<p class="section-name">LOCATION</p>
							<strong><p class="bolded-title">Main Office:</p></strong>
							<p>3415 W. Charleston</p>
							<p>Las Vegas, NV 89102</p>
						</div>
						<div class="section">
							<p class="section-name">PHONE</p>
							<strong><p class="bolded-title">Main Phone:</p></strong>
							<p><a href="tel:+17023843847" title="main office phone">702.384.3847</a></p>
							<p><a href="tel:+18883843847" title="toll free phone">1.888.384.3847</a></p>
						</div>
						<div class="section">
							<p class="section-name">EMAIL</p>
							<p><a href="mailto:robert@robertsidell.com" title="email link">robert@robertsidell.com</a></p>
						</div>
					</div>
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3221.323625019762!2d-115.18791870000001!3d36.158678699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8c3e03a4d2d2d%3A0xdd964b6f425788b1!2s3415+W+Charleston+Blvd%2C+Las+Vegas%2C+NV+89102!5e0!3m2!1sen!2sus!4v1443001650270" width="800" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="map-wrap">
					<div class="map-aside">
						<div class="section">
							<p class="section-name">LOCATION</p>
							<strong><p class="bolded-title">Summerlin Office:</p></strong>
							<p>3415 W. Charleston</p>
							<p>Las Vegas, NV 89102</p>
						</div>
						<div class="section">
							<p class="section-name">PHONE</p>
							<strong><p class="bolded-title">Main Phone:</p></strong>
							<p><a href="tel:+17023843847" title="main office phone">702.384.3847</a></p>
							<p><a href="tel:+18883843847" title="toll free phone">1.888.384.3847</a></p>
						</div>
						<div class="section">
							<p class="section-name">EMAIL</p>
							<p><a href="mailto:robert@robertsidell.com" title="email link">robert@robertsidell.com</a></p>
						</div>
					</div>
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3221.2352044611907!2d-115.31692799999999!3d36.1608307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8bfa524b9268f%3A0x81b3848173be86f0!2s10161+W+Park+Run+Dr+%23140%2C+Las+Vegas%2C+NV+89145!5e0!3m2!1sen!2sus!4v1443002134506" width="800" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
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
					<p class="contact-page-form">Feel Free to Message</p>
					<div class="contact-form">
						<?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
					</div>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
