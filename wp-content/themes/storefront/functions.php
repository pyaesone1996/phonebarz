<?php

/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme('storefront');
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if (!isset($content_width)) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version'    => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';
require 'inc/wordpress-shims.php';

if (class_exists('Jetpack')) {
	$storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if (storefront_is_woocommerce_activated()) {
	$storefront->woocommerce            = require 'inc/woocommerce/class-storefront-woocommerce.php';
	$storefront->woocommerce_customizer = require 'inc/woocommerce/class-storefront-woocommerce-customizer.php';

	require 'inc/woocommerce/class-storefront-woocommerce-adjacent-products.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
	require 'inc/woocommerce/storefront-woocommerce-functions.php';
}

if (is_admin()) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';

	require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if (version_compare(get_bloginfo('version'), '4.7.3', '>=') && (is_admin() || is_customize_preview())) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';
	require 'inc/nux/class-storefront-nux-starter-content.php';
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */


/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	require_once get_template_directory() . '/custom-menu-walker.php';
}
add_action('after_setup_theme', 'register_navwalker');

function get_taged()
{

	if ('post' === get_post_type()) {
		$tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'thecalmtech'));
		if ($tags_list) {
			printf('<span class="tags-links">' . esc_html__('Tagged %1$s', 'thecalmtech') . '</span>', $tags_list); // phpcs:ignore WordPress.Security.
		}
	}
}

function pagination_bar()
{
	global $wp_query;

	if ($wp_query->max_num_pages <= 1) return;

	$big = 999999999;

	$pages = paginate_links(array(
		'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages,
		'type'  => 'array',
		'prev_text' => __('<i class="icofont-rounded-left"></i>'),
		'next_text' => __('<i class="icofont-rounded-right"></i>'),
	));
	if (is_array($pages)) {
		$page = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
		echo '<ul class="justify-content-center">';
		foreach ($pages as $page) {
			echo "<li>$page</li>";
		}
		echo '</ul>';
	}
}

function get_excerpt()
{
	$excerpt = get_the_excerpt();
	$excerpt = substr($excerpt, 0, 260);
	$result = substr($excerpt, 0, strrpos($excerpt, ' '));
	echo $result;
}

#comment function 
function pressfore_modify_comment_output($comment, $depth, $args)
{
	$tag = ('div' === $args['style']) ? 'div' : 'li';
?>
	<<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($args['has_children']) ? '' : 'parent', $comment); ?>>
		<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
			<footer class="comment-meta">
				<div class="comment-author vcard d-flex justify-content-between align-items-center">

					<div class="">
						<?php if (0 != $args['avatar_size']) echo get_avatar($comment, $args['avatar_size']); ?>
						<?php
						/* translators: %s: comment author link */
						printf(
							__('%s <span class="says">says:</span>'),
							sprintf('<b class="fn">%s</b>', get_comment_author_link($comment))
						);
						?>
						<a href="<?php echo esc_url(get_comment_link($comment, $args)); ?>">
							<time datetime="<?php comment_time('c'); ?>">
								<?php
								printf(_x('%s ago', '%s = human-readable time difference', 'your-text-domain'), human_time_diff(get_comment_time('U'), current_time('timestamp')));
								?>
							</time>
						</a>
					</div>
					<div class="">
						<?php edit_comment_link(__('[ Edit ]'), '<span class="edit-link">', '</span>'); ?>
					</div>

				</div><!-- .comment-author -->

				<div class="comment-metadata">


				</div><!-- .comment-metadata -->

				<?php if ('0' == $comment->comment_approved) : ?>
					<p class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.'); ?></p>
				<?php endif; ?>
			</footer><!-- .comment-meta -->

			<div class="comment-content">
				<?php comment_text(); ?>
			</div><!-- .comment-content -->

		</article><!-- .comment-body -->
	<?php
}
/*
|-------------------------------------------------------------------------------------------------------------------------------
| Contact Information
|-------------------------------------------------------------------------------------------------------------------------------
| Phone, 
| Email, 
| Website Url
|-------------------------------------------------------------------------------------------------------------------------------
|
*/
function contact_link($input_info = null, $attribute_name = null)
{
	$explode_info = explode(',', $input_info);
	$explode_count = count($explode_info);
	$oup_key = 1;

	foreach ($explode_info as $output_data) {
		$output_link = "<a href='" . $attribute_name . ":" . trim($output_data) . "'>";
		$output_link .= trim($output_data);
		$output_link .= "</a>";
		$output_link .= ($oup_key < $explode_count) ? ', ' : '';
		echo $output_link;
		$oup_key++;
	}
}
/*
|-------------------------------------------------------------------------------------------------------------------------------
|   Map_via_acf
|-------------------------------------------------------------------------------------------------------------------------------
*/
function my_acf_init()
{
	acf_update_setting('google_api_key', 'AIzaSyC44n4EJxputPRoWzorOaszqW-dFoVN8UE');
}
add_action('acf/init', 'my_acf_init');


/** to change the position of meta **/
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

/**
 *add SKU
 */

add_action('woocommerce_single_product_summary', 'bbloomer_show_sku_again_single_product', 6);

function bbloomer_show_sku_again_single_product()
{
	global $product;
	?>
		<div class="product_meta">
			<?php if (wc_product_sku_enabled() && ($product->get_sku() || $product->is_type('variable'))) : ?>
				<span class="sku_wrapper"><?php esc_html_e('SKU:', 'woocommerce'); ?> <span class="sku"><?php echo ($sku = $product->get_sku()) ? $sku : esc_html__('N/A', 'woocommerce'); ?></span></span>
			<?php endif; ?>
		</div>
	<?php
}

/**
 * category
 */

add_action('woocommerce_single_product_summary', 'bbloomer_show_cats_again_single_product', 2);

function bbloomer_show_cats_again_single_product()
{
	global $product;
	?>
		<div class="product_meta">
			<?php echo wc_get_product_category_list($product->get_id(), ', ', '<span class="posted_in">' . _n('Category:', 'Categories:', count($product->get_category_ids()), 'woocommerce') . ' ', '</span>'); ?>
		</div>
	<?php
}
/** woocommerce: change position of add-to-cart on single product **/
add_action('wp', 'change_position_add_to_cart');
function change_position_add_to_cart()
{
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
	add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 35);
}
/**
 * Disable postcode/zipcode requirement
 */

add_filter('woocommerce_default_address_fields', 'optional_default_address_fields');
function optional_default_address_fields($address_fields)
{
	$address_fields['postcode']['required'] = false;
	return $address_fields;
}

function get_cart_count()
{
	if (class_exists('WooCommerce')) {
		return count(WC()->cart->get_cart());
	}
}

function get_cart_data()
{
	$woocommerce = WC();
	$cart_contents = $woocommerce->cart->get_cart();
	$cart_html = '';

	foreach ($cart_contents as $cart_item_key => $cart_item) {
		$product = $cart_item['data'];
		$product_title = $product->get_title();
		$product_price = wc_price($product->get_price());
		$product_quantity = $cart_item['quantity'];

		$cart_item_html = '
        <li>
			<div class="media">
            <a href="#">
                ' . $product->get_image() . '
            </a>
            <div class="media-body">
				<a href="#">
                <h4>' . $product_title . '</h4>
				</a>
                <h4>
                    <span>' . $product_quantity . 'X' . $product_price . '</span>
                </h4>
				<div class="close-circle"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></div>
            </div>
			<div>
        </li><br>';

		$cart_html .= $cart_item_html;
	}

	return  $cart_html;
}

function add_product_to_cart()
{

	$product_id = absint($_POST['product_id']);
	$quantity = absint($_POST['quantity']);
	WC()->cart->add_to_cart($product_id, $quantity);
	$updated_cart_html = get_cart_data();
	$updated_count = get_cart_count();
	$response = array(
		'updated_cart_html' => $updated_cart_html,
		'updated_count' => $updated_count
	);

	wp_send_json($response);
}

add_action('wp_ajax_add_product_to_cart', 'add_product_to_cart');
add_action('wp_ajax_nopriv_add_product_to_cart', 'add_product_to_cart');


add_filter('woocommerce_currencies', 'add_my_currency');
function add_my_currency($currencies)
{
	$currencies['Ks'] = __('Myanmar Kyats', 'woocommerce');
	return $currencies;
}

add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
function add_my_currency_symbol($currency_symbol, $currency)
{
	switch ($currency) {
		case 'Ks':
			$currency_symbol = 'Ks ';
			break;
	}
	return $currency_symbol;
}




/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function custom_widgets_init()
{
	register_sidebar(
		[
			'name' => esc_html__('Sidebar', 'thecalmtech'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'thecalmtech'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		]
	);

	register_sidebar(array(
		'name' => __('Main - Sidebar'),
		'id' => 'main-sidebar-widget-area',
		'description' => 'Widgets in this area will be shown on the right sidebar of default page',
		'before_widget' => '<aside class="widget">',
		'after_widget' => '</aside>',
		'before_title' => '',
		'after_title' => '',
	));

	register_sidebar(array(
		'name' => __('Shop - Sidebar'),
		'id' => 'shop-sidebar-widget-area',
		'description' => 'Widgets in this area will be shown on the right sidebar of default page',
		'before_widget' => '<aside class="widget">',
		'after_widget' => '</aside>',
		'before_title' => '',
		'after_title' => '',
	));
}
add_action('widgets_init', 'custom_widgets_init');


define('TEMPLATE_URL', get_stylesheet_directory_uri());
define('ASSET_URL', TEMPLATE_URL . '/assets/');

// if (!defined('WP_CLI')) {
// 	define('WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
// 	define('WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
// }
require(ABSPATH . '/wp-content/themes/storefront/acf/block-home.php');
