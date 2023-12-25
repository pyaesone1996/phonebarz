<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package thecalmtech
 */

get_header();
get_template_part('includes/inner-banner'); 
?>

<section class="article-detail section-top-wrap">
	<div class="container">
		<div class="row"> 
			<div class="col-lg-8">
				<main id="primary" class="site-main">
					<?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content-single', get_post_type());


					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div>
			<div class="col-lg-4"><?php get_sidebar(); ?></div>
		</div>
	</div>
</section>
<?php
get_footer();
