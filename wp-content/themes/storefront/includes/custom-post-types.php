<?php
add_action( 'init', 'cp_change_post_object' );
add_action( 'init', 'create_post_type' );
add_action( 'init', 'create_tax' );
/*
|-----------------------------------------------------------------------------------
| Add new post type
|-----------------------------------------------------------------------------------
|
*/
function create_post_type(){

	
	
	
}

/*
|-----------------------------------------------------------------------------------
| Add new category
|-----------------------------------------------------------------------------------
|
*/
function create_tax(){

	// register_taxonomy('location', 'branches', array(
	// 	'label' =>__('location'),
    //     'rewrite'      => array('slug' => 'location'),
	// 	'hierarchical' => true,
	// 	'show_in_rest'=> true,
	// ));
	
	
}

/*
|-----------------------------------------------------------------------------------
| Change dashboard Posts to Articles
|-----------------------------------------------------------------------------------
|
*/
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Articles';
        $labels->singular_name = 'Articles';
        $labels->add_new = 'Add Articles';
        $labels->add_new_item = 'Add Articles';
        $labels->edit_item = 'Edit Articles';
        $labels->new_item = 'Articles';
        $labels->view_item = 'View Articles';
        $labels->search_items = 'Search Articles';
        $labels->not_found = 'No Articles found';
        $labels->not_found_in_trash = 'No Articles found in Trash';
        $labels->all_items = 'All Articles';
        $labels->menu_name = 'Articles';
        $labels->name_admin_bar = 'Articles';
}
