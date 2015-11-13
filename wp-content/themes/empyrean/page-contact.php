<?php /* Template Name: Contact*/ ?>

<?php get_header(); ?>
	<div class="main-container <?php post_class(); ?>">         
	    <div class="main clearfix wrapper">
		    <?php
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			?>
	    </div>
    </div>
<?php get_footer(); ?>
