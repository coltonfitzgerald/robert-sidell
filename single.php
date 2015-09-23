<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Robert-Sidell
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<div class="single-article">
			<a href="<?php echo get_site_url(); ?>/articles/" title="link back to articles page" class="link-back button">Go Back</a>
				<h2 class="post-title"><?php echo the_title(); ?></h2>
				<p class="article-date"><?php echo get_the_date(); ?>
				<p><?php echo the_content(); ?></p>
			</div>
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
