<?php
/*
	Template Name: Testimonials Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="testimonials-page">
				<h1 class="page-title">Testimonials</h1>
				<?php echo do_shortcode("[show-testimonials orderby='menu_order' order='ASC' layout='grid' options='theme:none,info-position:info-above,text-alignment:left,columns:2,rating:on,date:on,quote-content:short,charlimitextra: (...),image-size:ttshowcase_small,image-shape:circle,image-effect:none,image-link:on']"); ?>
				<div class="testimonial-video">
					<video controls>
						<source src="<?php echo get_site_url(); ?>/wp-content/themes/robert-sidell/img/Testimonial-1.mp4" type="video/mp4">
					</video>
				</div>
				<div class="testimonial-video">
					<video controls>
						<source src="<?php echo get_site_url(); ?>/wp-content/themes/robert-sidell/img/Testimonial-2.mp4" type="video/mp4">
					</video>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
