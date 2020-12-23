<?php

get_header();
?>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();


					the_content();

					// If comments are open or there is at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile; // End of the loop.

				?>
			</div>

			<div class="col-md-4">

			</div>
		</div>
	</div>
<?php
get_footer();
