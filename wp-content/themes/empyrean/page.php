<?php get_header(); ?>
	<div class="main-container">         
	    <div class="main clearfix">
	    <?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			get_template_part( 'content', 'page' );
		// End the loop.
		endwhile;
		?>
	    </div>
    </div>
<?php get_footer(); ?>
