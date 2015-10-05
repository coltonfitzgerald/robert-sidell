<?php
/*
	Template Name: Articles Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="radio-header">
			<div id="bgvid">
				<video autoplay loop muted poster="<?php echo get_site_url(); ?>/wp-content/themes/robert-sidell/img/radio-header.jpg">
    				<source src="<?php echo get_site_url(); ?>/wp-content/themes/robert-sidell/img/radio-header.mp4" type="video/mp4">
				</video>
			</div>
				<div class="overlay">
					<div class="radio-wrap">
						<h1 class="page-title">Success and the Law<br/>Radio Show</h1>
						<p>Every Sunday at 6pm on 840AM</p>
						<a href="http://betaplayer.radio.com/player/kxnt-newsradio" class="button live-link">Listen now</a>
					</div>
				</div>
			</div>
			<div class="broadcast-listings">
				<h2>Previous Broadcasts</h2>
				<div class="single-broadcast">
				<?php $args = array( 'post_type' => 'broadcast' ); $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="broadcast-wrap">
					<div class="broadcast-info">
						<h3 class="show-name"><?php echo the_title(); ?></h3>
						<p class="show-date">Show Date: <?php the_field("broadcast_date"); ?></p>
						<?php if(get_field("broadcast_guests")) : ?>
							<p class="show-guests">Guests: <?php the_field("broadcast_guests"); ?></p>
						<?php endif; ?>
					</div>
					<div class="audio-file">
						<audio controls>
		    				<source src="<?php the_field("broadcast_audio"); ?>" type="audio/mp3">
		  				</audio>
	  				</div>
	  				</div>
	  				<div class="broadcast-text"><?php the_content(); ?></div>
				<?php endwhile; ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
