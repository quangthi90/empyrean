<?php /* Template Name: Gallery*/ ?>

<?php get_header(); ?>
	<div class="main-container <?php post_class(); ?>">         
	    <div class="main clearfix wrapper">
	    	<div class="main-top-gap"></div>
		    <?php		    
		    $args = array(
				'numberposts' => -1,
				'post_type'   => FOOGALLERY_CPT_ALBUM,
				'orderby' => 'title',
				'order' => 'asc'
			);
			$albums = get_posts( $args );
			if(!empty($albums)) { 
				foreach ($albums as $key => $post) {
					$album = FooGalleryAlbum::get_by_id($post->ID);
					echo do_shortcode ($album->shortcode());
				}
			} 
			?>
	    </div>
    </div>
<?php get_footer(); ?>
