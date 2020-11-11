<?php
get_header();

?>
<div class="col-md-12">
	<h1 class="text-dark">Hello I love You!</h1>
</div>
<?php

if ( have_posts() ) {

	while ( have_posts() ) {

		the_post();

		the_title();

		the_content();

	}
}

get_footer();
