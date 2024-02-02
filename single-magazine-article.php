<?php
/*
 * Template Name: Magazine Article
 * Template Post Type: post, page, product
 */

get_header(); ?>

	<?php
		/*
		 * Uses the Featured Image as a hero image
		 */
		clasHeroImage();
			?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" aria-label="Main content">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content-magazine-article', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer();
