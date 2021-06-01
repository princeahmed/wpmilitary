<section id="pricing" class="pricing">
	<div class="container">

			<div class="row">
				<div class="col-md-12">
					<div class="text-center pb-4">
						<h2 class="section-title"><span>Simple</span> Pricing, <span>Unbeatable</span> Value</h2>
						<p class="section-subtitle">Join 1000+ User's Happy Community</p>
					</div>

				</div>
			</div>

			<div class="row">
				<div class="col-md-10 offset-md-1">
					<div class="pricing-tab-menu">
						<div class="nav-wrapper">
							<ul class="nav nav-tabs justify-content-center">
								<li class="nav-item">
									<a class="nav-link active" data-target="annual" href="#">Annual</a></li>
								<li class="nav-item">
									<a class="nav-link" data-target="lifetime" href="#">Lifetime</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="table-wrapper pricing-table annual">
						<div class="inner-table clearfix">
							<ul class="list-unstyled pr-list-text">
								<li>Station Importer</li>
								<li>Radio Stations</li>
								<li>Countries</li>
								<li>Footer Player</li>
								<li>Shortcode Player</li>
								<li>CSV Importer</li>
								<li>Popup Player</li>
								<li>Display Settings</li>
								<li>Player Settings</li>
								<li>Style Settings</li>
								<li>Permalink Settings</li>
								<li>Station Plays Statistics</li>
								<li>Dedicated Support</li>
							</ul>

							<div class="pr-column free">

								<div class="pr-header">
									<div class="price">$0<span>/ Forever</span></div>
									<h4 class="title">Free</h4>
								</div>

								<ul class="list-unstyled pr-body">
									<li><i class="fa fa-check"></i></li>
									<li>1850+</li>
									<li>20</li>
									<li><i class="fa fa-check"></i></li>
									<li><i class="fa fa-check"></i></li>
									<li><i class="fa fa-times"></i></li>
									<li><i class="fa fa-times"></i></li>
									<li><i class="fa fa-times"></i></li>
									<li><i class="fa fa-times"></i></li>
									<li><i class="fa fa-times"></i></li>
									<li><i class="fa fa-times"></i></li>
									<li><i class="fa fa-times"></i></li>
									<li><i class="fa fa-times"></i></li>
								</ul>

								<div class="pr-footer">
									<a href="https://wordpress.org/plugins/wp-radio/" target="_blank" class="theme-btn line-button-two button-orange">
										<i class="fa fa-download"></i> Download Now
									</a>
								</div>

							</div>

							<div class="pr-column">
								<div class="pr-header" style="padding-bottom: 10px">

									<img src="<?php echo get_theme_file_uri('assets/images/wp-radio/50-off.png') ?>" class="img-fluid">

									<div class="annual-price-cross">$120</div>
									<div class="price annual-price">$59.99<span>/ Year</span></div>

									<div class="lifetime-price-cross">$260</div>
									<div class="price lifetime-price">$129.99<span>/ Forever</span></div>

									<h4 class="title">PRO</h4>
								</div>

								<ul class="list-unstyled pr-body">
									<li><i class="fa fa-check"></i></li>
									<li>52000+</li>
									<li>190+</li>
									<li><i class="fa fa-check"></i></li>
									<li><i class="fa fa-check"></i></li>
									<li><i class="fa fa-check"></i></li>
									<li><i class="fa fa-check"></i></li>
									<li><i class="fa fa-check"></i></li>
									<li><i class="fa fa-check"></i></li>
									<li><i class="fa fa-check"></i></li>
									<li><i class="fa fa-check"></i></li>
									<li><i class="fa fa-check"></i></li>
									<li><i class="fa fa-check"></i></li>
								</ul>

								<div class="pr-footer">

									<a href="#" class="purchase theme-btn line-button-two button-orange"><i class="fa fa-send"></i> Buy Now</a>

									<script src="https://checkout.freemius.com/checkout.min.js"></script>
									<script>
										(function ($) {
                                            $(document).ready(function () {
                                                var handler = FS.Checkout.configure({
                                                    plugin_id:  '4227',
                                                    plan_id:    '6865',
                                                    public_key: 'pk_6acab182f004d200ec631d063d6c4',
                                                    image:      'https://your-plugin-site.com/logo-100x100.png'
                                                });

                                                $('.purchase').on('click', function (e) {
                                                    e.preventDefault();

                                                    handler.open({
                                                        name     : 'WP Radio - Worldwide Radio Station Directory',
                                                        licenses : 1,
                                                        // You can consume the response for after purchase logic.
                                                        purchaseCompleted  : function (response) {
                                                            // The logic here will be executed immediately after the purchase confirmation.
                                                            // alert(response.user.email);
                                                        },
                                                        success  : function (response) {
                                                            // The logic here will be executed after the customer closes the checkout, after a successful purchase.
                                                            // alert(response.user.email);
                                                        }
                                                    });
                                                });
                                            });
                                        })(jQuery);
									</script>

								</div>
							</div>

						</div>
					</div>

				</div>
			</div>

	</div>
</section>
