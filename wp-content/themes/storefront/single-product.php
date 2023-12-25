<?php


get_header();
get_template_part('includes/inner-banner');
?>

<?php
global $product;
if (!defined('ABSPATH')) {
    exit;
}


// Start the loop to display the single product content
while (have_posts()) : the_post();
    $attachment_ids = $product->get_gallery_image_ids();
    $related_ids = wc_get_related_products($product->get_id());
?>

    <!-- section start -->
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-slick">
                            <div>
                                <?php echo $product->get_image(); ?>
                            </div>
                            <?php
                            if (!empty($attachment_ids)) {
                                foreach ($attachment_ids as $attachment_id) { ?>
                                    <div><img src="<?php echo wp_get_attachment_url($attachment_id); ?>" alt="" class="img-fluid blur-up lazyload image_zoom_cls-0">
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-nav">
                                    <?php
                                    if (!empty($attachment_ids)) {
                                        foreach ($attachment_ids as $attachment_id) { ?>

                                            <div><img src="<?php echo wp_get_attachment_url($attachment_id); ?>" alt="" class="img-fluid blur-up lazyload"></div>
                                    <?php
                                        }
                                    }
                                    ?>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 rtl-text">
                        <div class="product-right">
                            <h2><?php the_title(); ?></h2>
                            <h3 class="price-detail"><?php woocommerce_template_single_price(); ?></h3>
                            <ul class="color-variant">
                                <li class="bg-light0 active"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                            <div class="product-info">
                                <?php echo apply_filters('woocommerce_product_description', $post->post_excerpt); ?>
                            </div>

                            <?php echo woocommerce_template_single_add_to_cart(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->
<?php
// End the loop
endwhile;
?>


<!-- product-tab starts -->
<section class="tab-product m-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-selected="true"><i class="icofont icofont-ui-home"></i>Details</a>
                        <div class="material-border"></div>
                    </li>
                </ul>
                <div class="tab-content nav-material" id="top-tabContent">
                    <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                        <div class="product-tab-discription">
                            <div class="part">
                                <p> <?php echo apply_filters('woocommerce_product_description_tab_content', $post->post_content); ?></p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-tab ends -->


<!-- product section start -->
<section class="section-b-space ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col-12 product-related">
                <h2>related products</h2>
            </div>
        </div>
        <div class="row search-product">

            <?php
            if ($related_ids) {
                $args = array(
                    'post_type' => 'product',
                    'post__in' => $related_ids,
                );

                $related_query = new WP_Query($args);

                while ($related_query->have_posts()) {
                    $related_query->the_post();
                    $product_id = get_the_ID();
            ?>

                    <div class="col-xl-2 col-md-4 col-6">
                        <div class="product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="<?php echo get_permalink(get_the_ID()); ?>">
                                        <img src="<?php echo get_the_post_thumbnail_url($product_id, 'full'); ?>" class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="<?php echo get_permalink(get_the_ID()); ?>"><img src="<?php echo get_the_post_thumbnail_url($product_id, 'full'); ?>" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                </div>
                            </div>

                            <a href="<?php echo get_permalink(get_the_ID()); ?>">
                                <h6><?php echo get_the_title(); ?></h6>
                            </a>
                            <h4><?php echo get_post_meta($product_id, '_price', true); ?></h4>

                        </div>
                    </div>
            <?php

                }

                wp_reset_postdata();
            }
            ?>




        </div>
    </div>
</section>
<!-- product section end -->
<?php
get_footer('shop');
