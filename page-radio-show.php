<?php
/*
	Template Name: Articles Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="radio-header">
				<div class="overlay">
					<div class="radio-wrap">
						<h1 class="page-title">Radio Show</h1>
						<img src="<?php echo get_site_url(); ?>/wp-content/themes/robert-sidell/img/radio.png" alt="radio logo" />
						<p class="radio-station">840AM Las Vegas</p>
						<p>Tune in to 840AM every Sunday at 6pm to listen LIVE</p>
						<p>or</p>
						<p>Listen to previous recordings below</p>
					</div>
				</div>
			</div>
			<div class="broadcast-listings">
				<div class="single-broadcast">
					<div class="audio-file">
						<audio controls>
		    				<source src="" type="audio/mp3">
		  				</audio> 
	  				</div>
	  				<div class="broadcast-description">
	  					<p></p>
	  				</div>
  				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
