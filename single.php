<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

<?php
	/*
	 * Uses the Featured Image as a hero image
	 */
	$hidden  = get_field('featured-image');

		if( in_array('hide-image', $hidden) == false ) {

		clasHeroImage();
		}
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" aria-label="Main content">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer();
