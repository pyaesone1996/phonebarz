<?php


?>
</div><!-- end main -->

<footer class="dark-footer footer-style-1">
	<section class="section-b-space darken-layout">
		<div class="container">
			<div class="row footer-theme partition-f">
				<div class="col-lg-4 col-md-6 sub-title">

					<div class="footer-contant">
						<div class="footer-title">
							<h4>Keep in touch</h4>
						</div>
						<ul class="contact-list">
							<li><i class="fa fa-map-marker"></i>No.133/A (1st Floor), Seik Kan Thar Street (Lower Block), Kyauktada Township, Yangon, Myanmar, 11181
							</li>
							<li><i class="fa fa-phone"></i>Call Us: 09 431 50845 </li>
							<li><i class="fa fa-envelope"></i>Email Us: <a href="#">phonebar.nz@gmail.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6">
					<div class="sub-title">
						<div class="footer-title">
							<h4>Categories</h4>
						</div>
						<div class="footer-contant">
							<ul>
								<li><a href="#">Power Banks</a></li>
								<li><a href="#">Wireless Earbuds</a></li>
								<li><a href="#">Wired Earphones</a></li>
								<li><a href="#">Smart Watches</a></li>
								<li><a href="#">Phone Cover & Case</a></li>
								<li><a href="#">Audio Accessories</a></li>
								<li><a href="#">View All</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-6">
					<div class="sub-title">
						<div class="footer-title">
							<h4>my account</h4>
						</div>
						<div class="footer-contant">
							<ul>
								<li><a href="#">My Account</a></li>
								<li><a href="#">My Wishlist</a></li>
								<li><a href="#">My Cart</a></li>
								<li><a href="#">Sign In</a></li>
								<li><a href="#">Registration</a></li>
								<li><a href="#">Check out</a></li>
								<li><a href="#">Oder Complete</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="sub-title">
						<div class="footer-title">
							<h4>follow us</h4>
						</div>
						<div class="footer-contant">

							<form class="form-inline">
								<div class="form-group me-sm-3 mb-2">
									<label for="inputPassword2" class="sr-only">Password</label>
									<input type="password" class="form-control" id="inputPassword2" placeholder="Enter Your Email">
								</div>
								<button type="submit" class="btn btn-solid mb-2">subscribe</button>
							</form>
							<div class="footer-social">
								<ul>
									<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="sub-footer dark-subfooter">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-md-6 col-sm-12">
					<div class="footer-end">
						<p><i class="fa fa-copyright" aria-hidden="true"></i> 2023-24 Designed by <a href="https://www.thecalmtech.com/" target="_blank">The Calm Tech</a></p>
					</div>
				</div>
				<div class="col-xl-6 col-md-6 col-sm-12">
					<div class="payment-card-bottom">
						<ul>
							<li>
								<a href="#"><img src="../assets/images/icon/visa.png" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="../assets/images/icon/mastercard.png" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="../assets/images/icon/paypal.png" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="../assets/images/icon/american-express.png" alt=""></a>
							</li>
							<li>
								<a href="#"><img src="../assets/images/icon/discover.png" alt=""></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>



<script src="<?php echo get_template_directory_uri() . '/assets/js/jquery.min.js' ?>"></script>

<!-- slick js-->
<script src="<?php echo get_template_directory_uri() . '/assets/js/slick.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/slick-animation.min.js' ?>"> </script>

<!-- menu js-->
<script src="<?php echo get_template_directory_uri() . '/assets/js/menu.js' ?>"></script>

<!-- lazyload js-->
<script src="<?php echo get_template_directory_uri() . '/assets/js/lazysizes.min.js' ?>"></script>

<!-- feather icon js-->
<script src="<?php echo get_template_directory_uri() . '/assets/js/feather.min.js' ?> "></script>

<!-- Bootstrap Notification js-->
<script src="<?php echo get_template_directory_uri() . '/assets/js/bootstrap-notify.min.js' ?>"></script>

<!-- Theme js-->
<script src="<?php echo get_template_directory_uri() . '/assets/js/script.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/js/custom-slick-animated.js' ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
	$(window).on('load', function() {
		setTimeout(function() {
			$('#exampleModal').modal('show');
		}, 2500);
	});
	feather.replace();

	function openSearch() {
		document.getElementById("search-overlay").style.display = "block";
	}

	function closeSearch() {
		document.getElementById("search-overlay").style.display = "none";
	}

	$(document).ready(function() {

		function AddItemNotify() {
			$.notify({
				icon: 'fa fa-check',
				title: 'Success!',
				message: 'Item Successfully added to your cart'
			}, {
				element: 'body',
				position: null,
				type: "success",
				allow_dismiss: true,
				newest_on_top: false,
				showProgressbar: true,
				placement: {
					from: "top",
					align: "right"
				},
				offset: 20,
				spacing: 10,
				z_index: 1031,
				delay: 5000,
				animate: {
					enter: 'animated fadeInDown',
					exit: 'animated fadeOutUp'
				},
				icon_type: 'class',
				template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
					'<button type="button" aria-hidden="true" class="btn-close" data-notify="dismiss"></button>' +
					'<span data-notify="icon"></span> ' +
					'<span data-notify="title">{1}</span> ' +
					'<span data-notify="message">{2}</span>' +
					'<div class="progress" data-notify="progressbar">' +
					'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
					'</div>' +
					'<a href="{3}" target="{4}" data-notify="url"></a>' +
					'</div>'
			});
		}

		$('form.cart').on('submit', function(e) {
			AddItemNotify();
			e.preventDefault();
			// Get the product ID and quantity
			var product_id = $(this).find($('.add_to_bag')).val();
			var quantity = $(this).find('input[name="quantity"]').val();

			var data = {
				action: 'add_product_to_cart',
				product_id: product_id,
				quantity: quantity
			};

			$.ajax({
				type: 'POST',
				url: '<?php echo admin_url('admin-ajax.php'); ?>',
				data: data,
				beforeSend: function() {
					$('.add_to_bag').prop('disabled', true);
				},
				success: function(response) {
					$('.shopping-data').html(response.updated_cart_html);
					$('.cart_qty_cls').html(response.updated_count);
					$('.add_to_bag').prop('disabled', false);

				}
			});
		});

		$('.buttons .view-cart').on('click', function() {
			window.location.href = '/cart';
		});

		$('.buttons .checkout').on('click', function() {
			window.location.href = '/checkout';
		});
	});
</script>
</body>

</html>
<?php wp_footer(); ?>