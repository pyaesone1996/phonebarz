<div class="blog">
	<div class="sidebar">

		<h3 class="sidebar-title">Search</h3>
		<div class="sidebar-item search-form">
			<form role="search" method="get" action="/">
				<input type="text" name="s">
				<button type="submit"><i class="ti-search"></i></button>
			</form>
		</div><!-- End sidebar search formn-->

		<div class="sidebar-item categories">
			<h3 class="sidebar-title">Categories</h3>
			<?php $categories = get_categories();
			foreach ($categories as $category) {
				$count = $category->category_count;
				echo '<ul class="col-md-4"><li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '<span>(' . $count . ')</span></a></li></ul>';
			} ?>
		</div><!-- End sidebar categories-->



		<div class="blog-sidebar">
			<h3 class="sidebar-title">Recent Articles</h3>
			<?php 
				$args = array(
					'post_type'   => 'post',
					'posts_per_page' => -1,
					'orderby' => 'ASC'
				);
				
				$blogs = get_posts( $args );
				if ($blogs) {
			?>
            <ul>
                <?php foreach ($blogs as $blog) {
					 $id = $blog->ID;
					 $thumb = get_post_thumbnail_id($id);
					 $images = wp_get_attachment_image_src($thumb, 'full');  
                     $edit_image = aq_resize($images[0], 80, 80, true, true,true); ?>
					<li>
                        <div class="recent-articles"> 
                            <div class="media d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="designer-img"><a href="<?php echo get_permalink($blog->ID);?>"><img src="<?php echo $edit_image; ?>" alt="<?php echo $blog->post_title; ?>"></a></div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4><a class="article-link" href="<?php echo get_permalink($blog->ID);?>"><?php echo $blog->post_title; ?></a></h4>
                                </div>
                            </div>
						</div>  
                    </li>
                  
                <?php } ?>
            </ul>
        <?php } ?>
    </div>

		<!-- <h3 class="sidebar-title">Tags</h3>
		<div class="sidebar-item tags">
			<?php
			//$tags = get_tags(array(
				//'hide_empty' => false
			//));
			//echo '<ul>';
			//foreach ($tags as $tag) {
				//echo '<li><a href="' . get_term_link((int) $tag->term_id, $tag->taxonomy) . '">' . $tag->name . '</a></li>';
			//}
			//echo '</ul>';
			?>
		</div>End sidebar tags -->

	</div><!-- End sidebar -->
</div>