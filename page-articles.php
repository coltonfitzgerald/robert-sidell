<?php
/*
	Template Name: Articles Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="articles-page">
				<h1 class="page-title">Articles</h2>
				<?php // Display blog posts on any page @ http://m0n.co/l
					$temp = $wp_query; $wp_query= null;
					$wp_query = new WP_Query(); $wp_query->query('showposts=7' . '&paged='.$paged);
					while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<div class="article">
							<h3><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
							<p class="article-date"><?php echo get_the_date(); ?>
							<p><?php echo the_excerpt(); ?></p>
							<a href="<?php echo get_permalink(); ?>" class="article-link button" title="link to post">Read More</a>
						</div>
						<?php endwhile; ?>

						<?php if ($paged > 1) { ?>

							<nav id="nav-posts">
								<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
								<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
							</nav>

						<?php } else { ?>

							<nav id="nav-posts">
								<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
							</nav>

						</div>

					<?php } ?>

					<?php wp_reset_postdata(); ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
