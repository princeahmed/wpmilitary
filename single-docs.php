<?php

get_header();

global $post;
?>
	<div id="site_main">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="doc-category-box">
						<?php
						$taxonomy = 'docs_category';

						$doc_cats = wp_get_object_terms( $post->ID, $taxonomy );
						if ( ! is_wp_error( $doc_cats ) || ! empty( $doc_cats ) ) {
							$doc_cat = $doc_cats[0];
							?>
							<h4 class="doc-category-title"><?php echo $doc_cat->name; ?></h4>

							<?php
							$posts = get_posts( [
								'post_type' => 'docs',
								'tax_query' => [
									'relation' => 'AND',
									[
										'taxonomy' => $taxonomy,
										'field'    => 'term_id',
										'terms'    => $doc_cat->term_id,
									],

								],
							] );

							if ( ! empty( $posts ) ) { ?>
								<div class="doc-category-posts">

									<?php foreach ( $posts as $post ) { ?>
										<div class="doc-category-post">
											<a href="<?php echo get_the_permalink( $post ); ?>">
												<span class="fa fa-file-text-o"></span>
												<?php echo get_the_title( $post ); ?>
											</a>
										</div>

									<?php } ?>
								</div>
							<?php }

						}

						?>
					</div>
				</div>

				<div class="col-md-9">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post(); ?>
						<div class="section-title text-center">
							<h2 class="gradient-purple"><?php the_title(); ?></h2>
						</div>
						<?php
						the_content();

					endwhile; // End of the loop.

					?>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer();
