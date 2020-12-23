<?php

/**
 * Template Name: Docs
 */

get_header(); ?>

	<section id="docs" class="docs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2 class="gradient-purple">Documentation</h2>
					</div>
				</div>

				<?php
				$taxonomy = 'docs_category';

				$doc_cats = get_terms( [
					'taxonomy' => $taxonomy,
				] );


				if ( ! empty( $doc_cats ) ) {
					foreach ( $doc_cats as $doc_cat ) { ?>
						<div class="col-md-4">
							<div class="doc-category-box">
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
													<?php echo get_the_title( $post ); ?></a>
											</div>

										<?php } ?>
									</div>
								<?php }

								?>
							</div>
						</div>
					<?php }
				}

				?>
			</div>
		</div>
	</section>

<?php
get_footer();
