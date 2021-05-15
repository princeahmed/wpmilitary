<?php

if ( ! function_exists( 'wpmilitary_post_thumbnail' ) ) {
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 *
	 * @return void
	 * @since Twenty Twenty-One 1.0
	 *
	 */
	function wpmilitary_post_thumbnail() { ?>

		<?php if ( is_singular() ) : ?>

			<figure class="post-thumbnail">
				<?php
				// Lazy-loading attributes should be skipped for thumbnails since they are immediately in the viewport.
				the_post_thumbnail( 'post-thumbnail', array( 'loading' => false ) );
				?>
				<?php if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
					<figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption( get_post_thumbnail_id() ) ); ?></figcaption>
				<?php endif; ?>
			</figure><!-- .post-thumbnail -->

		<?php else : ?>

			<figure class="post-thumbnail">
				<a class="post-thumbnail-inner alignwide" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
					<?php the_post_thumbnail( 'post-thumbnail' ); ?>
				</a>
				<?php if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
					<figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption( get_post_thumbnail_id() ) ); ?></figcaption>
				<?php endif; ?>
			</figure>

		<?php endif; ?>
		<?php
	}
}

if ( ! function_exists( 'wpmilitary_the_posts_navigation' ) ) {
	/**
	 * Print the next and previous posts navigation.
	 *
	 * @return void
	 * @since Twenty Twenty-One 1.0
	 *
	 */
	function twenty_twenty_one_the_posts_navigation() {
		the_posts_pagination( array(
				'before_page_number' => esc_html__( 'Page', 'twentytwentyone' ) . ' ',
				'mid_size'           => 0,
				'prev_text'          => sprintf( '%s <span class="nav-prev-text">%s</span>', is_rtl() ? "->" : '<-',
					wp_kses( __( 'Newer <span class="nav-short">posts</span>', 'twentytwentyone' ), array(
							'span' => array(
								'class' => array(),
							),
						) ) ),
				'next_text'          => sprintf( '<span class="nav-next-text">%s</span> %s',
					wp_kses( __( 'Older <span class="nav-short">posts</span>', 'twentytwentyone' ), array(
							'span' => array(
								'class' => array(),
							),
						) ), is_rtl() ? '<-' : '->' ),
			) );
	}
}

