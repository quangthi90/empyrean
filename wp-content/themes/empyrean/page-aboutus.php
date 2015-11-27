<?php /* Template Name: About Us*/ ?>

<?php get_header(); ?>
	<div class="main-container">         
	    <div class="main clearfix wrapper">
		    <div class="main-top-gap"></div>
			<a name="mission"></a>
			<div class="content-block">				
				<div class="content-block-details">
					<h3 class="title"><?php pll_e("Our Mission") ?></h3>
					<div class="clear"></div>
					<div class="img-wrapper"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about/vision.png" alt="Our Mission" /></div>
					<div class="content">
						<?php pll_e("About Mision") ?>
					</div>
				</div>
			</div>
			<a name="story"></a>
			<div class="content-block">				
				<div class="content-block-details">
					<h3 class="title"><?php pll_e("Our Story") ?></h3>
					<div class="clear"></div>
					<div class="img-wrapper"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/about/company.png" alt="Our story" /></div>
					<div class="content">
						<?php pll_e("About Company") ?>				
					</div>
				</div>
			</div>
	    </div>
    </div>
<?php get_footer(); ?>
