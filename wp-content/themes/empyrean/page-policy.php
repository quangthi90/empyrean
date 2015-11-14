<?php /* Template Name: Policy*/ ?>

<?php get_header(); ?>
	<div class="main-container <?php post_class(); ?>">         
	    <div class="main clearfix wrapper">
	    	<div class="main-top-gap"></div>
	     	<div class="content-block">
	         	<div class="overlay"></div>                   
	         	<div class="content-block-details">                    
	             	<h3 class="title right"><?php pll_e("Policy") ?></h3>                       
	             	<div class="clear"></div>
	             	<div class="img-wrapper">
	                 	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/policy.png" alt="Policy">
	             	</div>                       
	             	<div class="content">  
	             		<?php
	             		pll_e("Policy content is being updated ...");			
						?>	                 	
	             	</div>
		         </div>
		     </div>		    
	    </div>
    </div>
<?php get_footer(); ?>
