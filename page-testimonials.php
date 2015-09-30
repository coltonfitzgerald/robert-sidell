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
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
