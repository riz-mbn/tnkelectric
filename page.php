<?php get_header() ?>

<div class="page-content">
	<?php
		while ( have_posts() ) : the_post();
			the_content();

		endwhile; // End of the loop.
	?>	
</div>

<?php get_footer() ?>