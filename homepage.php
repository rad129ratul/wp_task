<?php
/**
 * Template Name: Homepage
 *
 * The template used for displaying the site's static front page.
 * Assign this template to a Page (Page Attributes) and set that
 * Page as the static front page under Settings > Reading.
 *
 * @package CT_Custom
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			the_content();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();