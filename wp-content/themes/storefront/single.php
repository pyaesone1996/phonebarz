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
$thumb = get_post_thumbnail_id($post->ID);
$news_images = wp_get_attachment_image_src($thumb, 'full');
$edit_image = aq_resize($news_images[0], 820, 367, true, true, true);
?>

<section class="article-detail section-top-wrap">
	<div class="container">
		<div class="row"> 
			<div class="col-lg-8">
				<main id="primary" class="site-main">
				<img src="<?php echo $edit_image; ?>" alt="<?php echo $news_title; ?>" class="news-img w-100">
				<?php if ($post->post_title) { ?>
                        <h2 class="post-main-title my-5"><?php echo $post->post_title; ?></h2>
                    <?php } ?>
                    <?php if ($post->post_content) { ?>
                        <article class="main-article">
                            <?php echo apply_filters('the_content', $post->post_content); ?>
                        </article>
                    <?php } ?>
				</main><!-- #main -->
			</div>
			<div class="col-lg-4"><?php get_sidebar(); ?></div>
		</div>
	</div>
</section>
<?php
get_footer();
