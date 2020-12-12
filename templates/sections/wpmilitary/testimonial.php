<section id="testimonials" class="testimonials">

	<div class="section-padding parallax-setting parallaxie parallax2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2 class="gradient-purple">A Words From Our Users</h2>
						<h3>What People Think About Our Products</h3>
					</div>
				</div>
			</div>

			<div class="testimonial-images">
				<div class="owl-thumbs owl-dots d-lg-block d-none">
					<?php for ( $i = 1; $i < 9; $i ++ ) { ?>
						<div class="owl-dot animated-wrap active">
							<img src="<?php echo get_theme_file_uri( "assets/images/wp-radio/testimonial/{$i}.png" ); ?>" alt="" class="animated-element">
						</div>
					<?php } ?>
				</div>
			</div>

			<?php
			$testimonials = [
				'1.png' => [
					'name'    => 'Isaac More',
					'title'   => 'Blogger',
					'website' => [ 'iBroadband', 'www.ibroadband.co.za' ],
					'review'  => 'This is the kind of a plugin I\'ve been looking for, for years. Finally found a very useful plugin when you want to stream live radio for all countries, or to just add the countries you want. This is the package worth upgrading, I don\'t regret it - WP Radio is the best decision you\'ll ever make. My website looks awesome with a theme of my choice.',
				],
				'2.png' => [
					'name'    => 'Renel Gilles',
					'title'   => 'Founder - CEO',
					'website' => [ 'I Am Caribbean', 'https://www.iamcaribbean.com' ],
					'review'  => 'It keeps getting better. We just love this WP-Radio. The best Wordpress radio directory plugin ever!',
				],
				'3.png'  => [
					'name'    => 'Joseph Robert Kozubek',
					'title'   => 'Owner',
					'website' => [ 'AR Services sp. z o.o.', 'https://radioparrot.com' ],
					'review'  => 'Such good cooperation. Instant support. I have already forgotten about such good cooperation in the world. Instant support. The company responded absolutely expressly. I have to admit that the time difference was not an obstacle. Impression that you cooperate with a large corporation. I consider the plug to be good with a light code, a great advantage. I recommend programmers.',
				],
				'4.png'  => [
					'name'    => 'Moe Fesh',
					'title'   => 'Owner',
					'website' => [ '8B Consultancy Corp.', 'https://eeerocket.com' ],
					'review'  => 'The main reason we like WP Radio is about its simplicity. It is exactly as simple as a radio could be. The way we install, use and search for stations, and the way we get support. all are easy, fast and high quality. WP Radio helps us to have an alive work station. Users could enjoy working when they are updated with the latest news, musics and public discussions.',
				],
				'5.png'  => [
					'name'    => 'Venetiou',
					'title'   => '',
					'website' => [ '', '' ],
					'review'  => 'WP Radio plugin met all my expectations. Everything works perfectly. I also want to say a special thank you to the support service. They solve the problems that have arisen very quickly and professionally (even on a weekend).',
				],
				'6.png'  => [
					'name'    => 'Tieandhoodieshow',
					'title'   => '',
					'website' => [ '', '' ],
					'review'  => 'At first the station that we need is not working, I thought I should have refund. Good to see, I saw skype id in email and I contact prince there. He assisted me very well even though he is busy and yeah the station that we need works!! Thanks A lot!!',
				],
				'7.png'  => [
					'name'    => '',
					'title'   => '',
					'website' => [ '', '' ],
					'review'  => 'It is an excellent plugin, easy to use and to program.',
				],
				'8.png'  => [
					'name'    => 'JoshWho',
					'title'   => 'Founder - CEO',
					'website' => [ 'JoshWho', 'https://www.joshwhotv.com/' ],
					'review'  => 'I have tried a few different radio plugins and this one is by far the best out there. So many functionalities and even comes with stations you can import right off of the bat.

Thank you for making such a decent radio script. You saved me so much headache of work with this. I was going to manually make one of these and this 100% solved what I was needing.

Thank you again and looking forward to any future ideas.',
				]
			];
			?>

			<div class="row align-items-center position-relative">
				<div class="col-md-12">
					<div class="owl-carousel owl-theme testimonial-items hide-cursor mx-auto">

						<?php
						foreach ( $testimonials as $key => $testimonial ) { ?>
							<div class="testimonial-item">
								<p class="color-black testimonial-para mb-15px"><?php echo $testimonial['review']; ?></p>

								<div class="testimonial-post">
									<a href="javascript:void(0)" class="post">
										<img src="<?php echo get_theme_file_uri( "assets/images/wp-radio/testimonial/{$key}" ); ?>"/>
									</a>

									<div class="text-content">
										<h5 class="color-black text-capitalize"><?php echo $testimonial['name']; ?></h5>

										<?php if ( ! empty( $testimonial['website'][1] ) ) { ?>
											<p class="color-grey">
												<?php echo $testimonial['title'] ?>,
												<a href="<?php echo $testimonial['website'][1]; ?>" target="_blank"><?php echo $testimonial['website'][0]; ?></a>
											</p>
										<?php } ?>

										<div class="rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
								</div>
							</div>
						<?php }
						?>

					</div>
				</div>
			</div>
		</div>
	</div>

</section>
