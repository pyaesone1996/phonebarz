<?php

/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */
$product_cat     = get_queried_object();
$desktop_image   = get_field('product_category_page_desktop_image', $product_cat);
$mobile_image    = get_field('product_category_page_mobile_image', $product_cat);
$product_lists   = get_field('product_category_page_product_lists', $product_cat);
$product_tags    = get_field('product_category_page_product_tags', $product_cat);
$product_tag_ids = wp_list_pluck($product_tags, 'term_id');

$args = array(
   'post_type'      => 'product',
   'posts_per_page' => -1,
   'post_status'    => 'publish',
   !empty($product_lists) ? 'post__in' : 'tax_query' => !empty($product_lists) ? $product_lists : array(
       array(
         'taxonomy' => 'product_tag',
         'field'    => 'term_id',
         'terms'    => $product_tag_ids,
         'operator' => 'IN',
       ),
   ),
);
$products_query = new WP_Query($args);

get_header(); ?>
<div>
   <section class="c__filterlist v_carousel u__fullwidth">
      <div>
         <div class="s_top">
            <div class="s_topImage">
               <figure>
                  <?php if(isset($desktop_image)) : ?>
                     <img src="<?php echo $desktop_image; ?>" alt="">
                  <?php endif; ?>
               </figure>
            </div>
            <article class="swiper">
               <div class="swiper-wrapper">
                  <?php
                  $main_menu = array(
                     'container' => '',
                     'menu' => 'Main Menu',
                     'items_wrap' => '%3$s',
                     'walker' => new Custom_Menu_Walker(),
                  );
                  wp_nav_menu($main_menu);
                  ?>
               </div>
            </article>
         </div>
         <div class="s_productlisting">
            <div class="s_productwrap">
               <h2><span class="<?php echo "s_". mb_strtolower(get_the_title()) ; ?>"></span><?php echo get_the_title(); ?></h2>
               <div class="s_listwrap">
                  <ul class="s_productinfo">
                     <?php
                     if ($products_query->have_posts()) {
                        while ($products_query->have_posts()) {
                           $products_query->the_post();
                           $product = wc_get_product(get_the_ID());
                     ?>

                           <li class="s_product">
                              <a href="<?php echo get_permalink(get_the_ID()); ?>">
                                 <figure>
                                    <?php echo $product->get_image(); ?>
                                 </figure>
                                 <div class="s_info">
                                    <h3><?php echo category_name($product->get_id()); ?></h3>
                                    <p><?php echo esc_html(get_the_title($product_id)) ?></p>
                                    <p class="s_price"><?php echo wc_price($product->get_price()); ?></p>
                                 </div>
                              </a>
                           </li>

                     <?php } 
                     } else{ ?>
                           <li class="s_product" style="text-align:left;">
                              No product found!
                           </li>
                     <?php } ?>

                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>

<?php get_footer(); ?>