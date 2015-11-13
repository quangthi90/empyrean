<?php /* Template Name: About Us*/ ?>

<?php get_header(); ?>
	<div class="main-container">         
	    <div class="main clearfix wrapper">
		    <?php
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			?>
	    </div>
    </div>
<?php get_footer(); ?>
