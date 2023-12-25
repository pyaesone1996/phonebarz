<?php

if (function_exists('acf_register_block')) {

    acf_register_block(
        array(
            'name'                => 'home_shop_by_brand',
            'title'               => __('Block | home_shop_by_brand'),
            'description'       => __('A home_shop_by_brand ACF block.'),
            'render_callback'     => 'home_shop_by_brand',
            'mode' => 'edit',

        ),
    );
}
function home_shop_by_brand()
{
    $title  = get_field('title');
    $brands = get_field('brands');
  
?>
    <!--  logo section -->
    <section class="shop-brand">
        <div class="container">
            <div class="bg-title">
                <h2 class="title"><?php echo $title; ?></h2>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-4">

                <?php if (!empty($brands)) :
                    foreach ($brands as $brand) :
                ?>
                        <div class="col">
                            <div class="brand-wrap">
                                <a href=""><img src="<?php echo $brand['brand_image'] ?>" alt="" class="brand-img img-fluid"></a>
                                <h6 class="brand-name"><a href="#"><?php echo $brand['brand_name'] ?></a></h6>
                            </div>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>

        </div>
    </section>

<?php } ?>