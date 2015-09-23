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

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
