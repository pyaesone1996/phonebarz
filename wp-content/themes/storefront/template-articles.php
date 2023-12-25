<?php 
// Template Name: Articles Page 
get_header(); 
get_template_part('includes/inner-banner'); 
?>
<section class="articles-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php
                    // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $article_args = array(
                            'post_type' => 'post',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            // 'paged' => $paged
                        );
                        $articles = get_posts($article_args);       
                        if ($articles) {
                        foreach ( $articles as $article ) {
                            $id = $article->ID;
                            // $total_pages = $article->max_num_pages;
                            $article_title = $article->post_title;
                            $article_info = $article->post_content;
                            $article_link = get_permalink($id);
                            $article_excerpt = $article->post_excerpt;
                            $thumb = get_post_thumbnail_id($id);
                            $article_images = wp_get_attachment_image_src($thumb, 'full');
                            $article_img = aq_resize( $article_images[0] ,376,250,true,true,true);    
                            $article_date = get_the_date( 'F j, Y', $article->ID );  
                            $category_detail = get_the_category($article->ID);//$post->ID    
                    ?>    
                    <div class="card mb-4">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <a href="<?php echo $article_link; ?>"><img src="<?php echo $article_img; ?>" class="img-fluid article-img rounded-start" alt="<?php echo $article_title; ?>"></a>
                                <?php foreach($category_detail as $cd){
                                ?>
                                    <a href="<?php echo get_category_link($cd->term_id); ?>"> <span class="articles-type"><?php echo $cd->cat_name; ?></span></a>
                                <?php } ?>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <span class="date"><?php echo $article_date ; ?></span>
                                    <h5 class="card-title"><a href="<?php echo $article_link; ?>"><?php echo $article_title; ?><a></h5>
                                    <p class="card-text"><?php echo $article_excerpt; ?></p> 
                                    <div class="btn-wrap">
                                        <a href="<?php echo $article_link; ?>" class="btn btn-solid" title="">Read More</a>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>   
                <?php } } ?>
            </div>
            <div class="col-lg-4">
                <?php get_sidebar(); ?>               
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>