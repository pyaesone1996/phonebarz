<?php 
/* 
 Template Name: Checkout
 */

get_header(); 
?>
<?php get_template_part('partials/inner-banner'); ?>
<div class="pt20 pb50 payment-tpl-wrap">
	<div class="container">
		<div id="primary" class="content-area cart-content">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) :
					the_post();

					do_action( 'storefront_page_before' );

					get_template_part( 'content', 'page' );

					/**
					 * Functions hooked in to storefront_page_after action
					 *
					 * @hooked storefront_display_comments - 10
					 */
					do_action( 'storefront_page_after' );

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<?php get_footer(); ?>