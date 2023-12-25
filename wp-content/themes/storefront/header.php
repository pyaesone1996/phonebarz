<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>


<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="The Calm Tech Myanmar Web Design Development and Digital Marketing We provides high quality website design, e-commerce solution and software development,we also do  sharing about programming knowledges on the calm tech website and we will the your best web design and developemnt services in myanmar" />
	<meta name="keywords" content="thecalmtech myanmar web design development and digital marketing we provides high quality website design, e-commerce solution and software development,we also do sharing about programming knowledge on our website and we will be the best web design and developemnt services in myanmar" />
	<meta name="author" content="The Calm Tech">
	<meta name="document-classification" content="Business Website, Knowledge Sharing Website">

	<link href="<?php echo get_template_directory_uri() . '/assets/images/favicon.png' ?>" rel="icon">
	<link href="<?php echo get_template_directory_uri() . '/assets/img/touch-icon.png' ?>" rel="apple-touch-icon">

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!--Google font-->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

	<!-- Icons -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/vendors/font-awesome.css' ?>">

	<!--Slick slider css-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/vendors/slick.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/vendors/slick-theme.css' ?>">

	<!-- Animate icon -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/vendors/animate.css' ?>">

	<!-- Themify icon -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/vendors/themify-icons.css' ?>">

	<!-- Bootstrap css -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/vendors/bootstrap.css' ?>">

	<!-- Theme css -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/css/style.css' ?>">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
	<?php wp_head(); ?>
</head>

<?php
$site_info = get_field('general_setting', 'option');
if ($site_info['logo']) {
	$logo = $site_info['logo'];
} else {
	$logo = ASSET_URL . 'images/logo.png';
}
?>

<body <?php body_class(); ?>>

	<header class="header-style-5">
		<div class="mobile-fix-option"></div>
		<div class="top-header top-header-dark">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="header-contact">
							<ul>
								<li>Welcome Phone Bar</li>
								<li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 09 431 50845</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 text-end">
						<ul class="header-dropdown">
							<li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
							</li>
							<li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
								My Account
								<ul class="onhover-show-div">
									<li><a href="login.html">Login</a></li>
									<li><a href="register.html">register</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="main-menu">
						<div class="menu-left">
							<div class="navbar d-none">
								<a href="javascript:void(0)">
									<div class="bar-style" id="toggle-sidebar-res"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
									</div>
								</a>
							</div>
							<div class="brand-logo">
								<?php if ($logo) { ?>
									<a href="/" title="<?php bloginfo('name'); ?>">
										<img src="<?php echo $logo; ?>" class="logo-img img-fluid blur-up lazyloaded" alt="<?php bloginfo('name'); ?>">
									</a>
								<?php } ?>
							</div>
						</div>
						<div>
							<?php dynamic_sidebar('main-sidebar-widget-area'); ?>
						</div>
						<div class="menu-right pull-right">
							<nav class="text-start">
								<div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
							</nav>
							<div>
								<div class="icon-nav">
									<ul>
										<li class="onhover-div d-xl-none d-inline-block mobile-search">
											<div><img src="../assets/images/icon/search.png" onclick="openSearch()" class="img-fluid blur-up lazyload" alt=""> <i class="ti-search" onclick="openSearch()"></i></div>
											<div id="search-overlay" class="search-overlay">
												<div> <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
													<div class="overlay-content">
														<div class="container">
															<div class="row">
																<div class="col-xl-12">
																	<form>
																		<div class="form-group">
																			<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product">
																		</div>
																		<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>

										<li class="onhover-div mobile-cart">
											<div><img src="/wp-content/uploads/2023/06/cart.png" class="img-fluid blur-up lazyload" alt=""> <i class="ti-shopping-cart"></i></div>
											<span class="cart_qty_cls"><?php echo get_cart_count() > 0 ? get_cart_count() : ''; ?></span>
											<ul class="show-div shopping-cart">
												<div class="shopping-data">
													<?php echo get_cart_data(); ?>
												</div>
												<li>
													<div class="buttons">
														<a href="javascript:void(0);" class="view-cart">view cart</a>
														<a href="javascript:void(0);" class="checkout">checkout</a>
													</div>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-part bottom-light">
			<div class="container">
				<div class="row">
					<div class="col-xl-3">
						<div class="category-menu d-none d-xl-block h-100">
							<div id="toggle-sidebar" class="toggle-sidebar">
								<i class="fa fa-bars sidebar-bar"></i>
								<h5 class="mb-0">shop by category</h5>
							</div>
						</div>
						<div class="sidenav fixed-sidebar marketplace-sidebar">
							<nav>
								<div>
									<div class="sidebar-back text-start d-xl-none d-block"><i class="fa fa-angle-left pe-2" aria-hidden="true"></i> Back</div>
								</div>
								<ul id="sub-menu" class="sm pixelstrap sm-vertical">
									<?php
									$taxo_name = "product_cat";
									$parent_terms = get_terms($taxo_name, array('parent' => 0, 'orderby' => 'slug', 'hide_empty' => false));
									foreach ($parent_terms as $p_term) {
										$main_terms = get_terms($taxo_name, array('parent' => $p_term->term_id, 'orderby' => 'slug', 'hide_empty' => false));
									?>
										<li class="nav-item">
											<a href="<?php echo get_term_link($p_term->slug, $taxo_name) ?>" class="nav-link dropdown-toggle" data-container="body" data-toggle="tooltip" popover-append-to-body="true" data-placement="bottom" title="Tooltip on right"><?php echo $p_term->name; ?></a>
											<?php if ($main_terms) { ?>
												<ul class="dropdown-menu">
													<?php
													foreach ($main_terms as $m_term) {
														$sub_terms = get_terms($taxo_name, array('parent' => $m_term->term_id, 'orderby' => 'slug', 'hide_empty' => false));
													?>
														<li class="nav-item">
															<a href="<?php echo get_term_link($m_term->slug, $taxo_name) ?>" class="nav-link dropdown-toggle"><?php echo $m_term->name ?></a>
															<?php
															if ($sub_terms) {
															?>
																<ul class="dropdown-menu">
																	<?php foreach ($sub_terms as $s_term) { ?>
																		<li class="nav-item">
																			<a href="<?php echo get_term_link($s_term->slug, $taxo_name); ?>"><?php echo $s_term->name ?></a>
																		</li>
																	<?php } ?>
																</ul>
															<?php } ?>
														</li>
													<?php } ?>
												</ul>
											<?php } ?>
										</li>
									<?php } ?>
								</ul>
								</li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="col-xl-9">
						<div class="main-nav-center">
							<nav class="text-start">
								<?php
								// $main_menu = array(
								// 	'container' => '',
								// 	'menu' => 'Main Menu',
								// 	'items_wrap' => '<ul id="main-menu" class="sm pixelstrap sm-horizontal">%3$s</ul>',
								// 	'walker' => new Custom_Menu_Walker(),
								// );

								wp_nav_menu($main_menu);
								?>
								<ul id="main-menu" class="sm pixelstrap sm-horizontal">
									<li>
										<div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
									</li>
									<li><a href="/">Home</a></li>
									<li>
										<a href="/about-us/">About</a>
									</li>
									<li class="mega" id="hover-cls">
										<a href="#">Product <div class="lable-nav">new</div></a>
										<ul class="mega-menu full-mega-menu">
											<li>
												<div class="container">
													<div class="row">
														<div class="col mega-box">
															<div class="link-section">
																<div class="menu-title">
																	<h5>Phone</h5>
																</div>
																<div class="menu-content">
																	<ul>
																		<li><a target="_blank" href="invoice-1.html">Iphone
																				1</a></li>
																		<li><a target="_blank" href="invoice-2.html">Samsung
																				2</a></li>
																		<li><a target="_blank" href="invoice-3.html">LG
																				3</a></li>
																		<li><a target="_blank" href="invoice-4.html">Lenovo
																				4</a></li>
																		<li><a target="_blank" href="invoice-5.html">Mi
																				5</a></li>
																	</ul>
																</div>
															</div>
														</div>

														<div class="col mega-box">
															<div class="link-section">
																<div class="menu-title">
																	<h5>Laptops</h5>
																</div>
																<div class="menu-content">
																	<ul>
																		<li><a target="_blank" href="../email-template/welcome.html">Apple</a>
																		</li>
																		<li><a target="_blank" href="../email-template/new-product-announcement.html">Dell</a>
																		</li>
																		<li><a target="_blank" href="../email-template/abandonment-email.html">Lenovo</a>
																		</li>
																		<li><a target="_blank" href="../email-template/offer.html">HP</a>
																		</li>
																		<li><a target="_blank" href="../email-template/offer-2.html">Asus</a></li>
																		<li><a target="_blank" href="../email-template/product-review.html">Acer</a>
																		</li>
																		<li><a target="_blank" href="../email-template/featured-products.html">MSI</a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="col mega-box">
															<div class="link-section">
																<div class="menu-title">
																	<h5>Earphone</h5>
																</div>
																<div class="menu-content">
																	<ul>
																		<li><a target="_blank" href="../email-template/black-friday.html">JBL</a></li>
																		<li><a target="_blank" href="../email-template/christmas.html">SONY</a>
																		</li>
																		<li><a target="_blank" href="../email-template/cyber-monday.html">Remax</a>
																		</li>
																		<li><a target="_blank" href="../email-template/flash-sale.html">Lenovo</a></li>
																		<li><a target="_blank" href="../email-template/email-order-success.html">Hawei</a></li>
																		<li><a target="_blank" href="../email-template/email-order-success-two.html">Samsung</a></li>
																	</ul>
																</div>
															</div>
														</div>

														<div class="col mega-box">
															<div class="link-section">
																<div class="menu-title">
																	<h5>Smart Watch</h5>
																</div>
																<div class="menu-content">
																	<ul>
																		<li><a href="index.html">Apple<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
																		<li><a href="fashion-4.html">Amazfit</a>
																		</li>
																		<li><a href="bicycle.html">Samsung</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>

														<div class="col mega-box">
															<div class="link-section">
																<div class="menu-title">
																	<h5>Powerbank</h5>
																</div>
																<div class="menu-content">
																	<ul>
																		<li><a href="index.html">Remax</a></li>
																		<li><a href="christmas.html">Samsung</a>
																		</li>
																		<li><a href="furniture-3.html">Hawei</a></li>
																		<li><a href="fashion-4.html">Apple</a></li>
																		<li><a href="marketplace-demo-3.html">Lenovo</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>

														<div class="col mega-box">
															<div class="link-section">
																<div class="menu-title">
																	<h5>Speaker</h5>
																</div>
																<div class="menu-content">
																	<ul>
																		<li><a href="nursery.html">JBL</a></li>
																		<li><a href="vegetables.html">Remax
																				<i class="fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
																		<li><a href="bags.html">Sony</a></li>
																		<li><a href="shoes.html">Samsung</a>
																		</li>
																		<li><a href="watch.html">Apple</a></li>
																		<li><a href="tools.html">Lenovo</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">shop</a>
										<ul>
											<li><a href="category-page(vegetables).html">tab style<span class="new-tag">new</span></a></li>
											<li><a href="category-page(top-filter).html">top filter</a></li>
											<li><a href="category-page(modern).html">modern</a></li>
											<li><a href="category-page.html">left sidebar</a></li>
											<li><a href="category-page(right).html">right sidebar</a></li>
											<li><a href="category-page(no-sidebar).html">no sidebar</a></li>
											<li><a href="category-page(sidebar-popup).html">sidebar popup</a>
											</li>
											<li><a href="category-page(metro).html">metro</a></li>
											<li><a href="category-page(full-width).html">full width</a></li>
											<li><a href="category-page(infinite-scroll).html">infinite
													scroll</a></li>
											<li><a href=category-page(3-grid).html>three grid</a></li>
											<li><a href="category-page(6-grid).html">six grid</a></li>
											<li><a href="category-page(list-view).html">list view</a></li>
										</ul>
									</li>

									<li class="mega" id="hover-cls">
										<a href="#">accessories</a>
										<ul class="mega-menu full-mega-menu">
											<li>
												<div class="container">
													<div class="row">
														<div class="col mega-box">
															<div class="link-section">
																<div class="menu-title">
																	<h5>Adapter</h5>
																</div>
																<div class="menu-content">
																	<ul>
																		<li><a target="_blank" href="invoice-1.html">Iphone
																				1</a></li>
																		<li><a target="_blank" href="invoice-2.html">Samsung
																				2</a></li>
																		<li><a target="_blank" href="invoice-3.html">LG
																				3</a></li>
																		<li><a target="_blank" href="invoice-4.html">Lenovo
																				4</a></li>
																		<li><a target="_blank" href="invoice-5.html">Mi
																				5</a></li>
																	</ul>
																</div>
															</div>
														</div>

														<div class="col mega-box">
															<div class="link-section">
																<div class="menu-title">
																	<h5>Cable</h5>
																</div>
																<div class="menu-content">
																	<ul>
																		<li><a target="_blank" href="../email-template/welcome.html">Apple</a>
																		</li>
																		<li><a target="_blank" href="../email-template/new-product-announcement.html">Dell</a>
																		</li>
																		<li><a target="_blank" href="../email-template/abandonment-email.html">Lenovo</a>
																		</li>
																		<li><a target="_blank" href="../email-template/offer.html">HP</a>
																		</li>
																		<li><a target="_blank" href="../email-template/offer-2.html">Asus</a></li>
																		<li><a target="_blank" href="../email-template/product-review.html">Acer</a>
																		</li>
																		<li><a target="_blank" href="../email-template/featured-products.html">MSI</a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="col mega-box">
															<div class="link-section">
																<div class="menu-title">
																	<h5>Cover</h5>
																</div>
																<div class="menu-content">
																	<ul>
																		<li><a target="_blank" href="../email-template/black-friday.html">JBL</a></li>
																		<li><a target="_blank" href="../email-template/christmas.html">SONY</a>
																		</li>
																		<li><a target="_blank" href="../email-template/cyber-monday.html">Remax</a>
																		</li>
																		<li><a target="_blank" href="../email-template/flash-sale.html">Lenovo</a></li>
																		<li><a target="_blank" href="../email-template/email-order-success.html">Hawei</a></li>
																		<li><a target="_blank" href="../email-template/email-order-success-two.html">Samsung</a></li>
																	</ul>
																</div>
															</div>
														</div>

														<div class="col mega-box">
															<div class="link-section">
																<div class="menu-title">
																	<h5>Powerbank</h5>
																</div>
																<div class="menu-content">
																	<ul>
																		<li><a href="index.html">Apple<i class="ms-2 fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
																		<li><a href="fashion-4.html">Amazfit</a>
																		</li>
																		<li><a href="bicycle.html">Samsung</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>

														<div class="col mega-box">
															<div class="link-section">
																<div class="menu-title">
																	<h5>Audio Cable</h5>
																</div>
																<div class="menu-content">
																	<ul>
																		<li><a href="nursery.html">JBL</a></li>
																		<li><a href="vegetables.html">Remax
																				<i class="fa fa-bolt icon-trend" aria-hidden="true"></i></a></li>
																		<li><a href="bags.html">Sony</a></li>
																		<li><a href="shoes.html">Samsung</a>
																		</li>
																		<li><a href="watch.html">Apple</a></li>
																		<li><a href="tools.html">Lenovo</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li><a href="/articles/">Article</a>
									</li>
								</ul> 
							</nav>
						</div>

						<!-- <div class="main-nav-center">
							<nav class="text-start">
								<?php
								wp_nav_menu([
									'menu' => 'Main Menu',
									'menu_id' => '',
									'depth' => 3,
									'container' => '',
									'container_class' => '',
									'container_id' => '',
									'menu_class' => 'sm pixelstrap sm-horizontal',
									'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
									'walker' => new WP_Bootstrap_Navwalker(),
								]);
								?>
							</nav>
						</div> -->
					</div>
				</div>
			</div>
		</div>

	</header>