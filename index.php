<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link       https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package    WordPress
 * @subpackage Twenty_Twenty_One
 * @since      Twenty Twenty-One 1.0
 */

get_header();

?>
	<div id="main" class="pt-5 mb-5">
		<div class="container">
			<div class="col-md-8">
				<?php
				if ( have_posts() ) {

					// Load posts loop.
					while ( have_posts() ) {
						the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<?php if ( is_singular() ) : ?>
									<?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
								<?php else : ?>
									<?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">',
										esc_url( get_permalink() ) ), '</a></h2>' ); ?>
								<?php endif; ?>

								<?php wpmilitary_post_thumbnail(); ?>
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php
								the_content( sprintf( /* translators: %s: Name of current post. */ esc_html__( 'Continue reading %s',
									'twentytwentyone' ), the_title( '<span class="screen-reader-text">', '</span>', false ) ) );

								wp_link_pages( array(
									'before'                                      => '<nav class="page-links" aria-label="'
									                                                 . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
									'after'                                       => '</nav>',
									/* translators: %: Page number. */ 'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
								) );

								?>
							</div><!-- .entry-content -->

						</article><!-- #post-<?php the_ID(); ?> -->
					<?php }

					// Previous/next page navigation.
					twenty_twenty_one_the_posts_navigation();

				} else {

					// If no content, include the "No posts found" template.
					get_template_part( 'template-parts/content/content-none' );

				}

				?>
			</div>

			<div class="col-md-4">

			</div>

		</div>
	</div>
<?php
get_footer();
