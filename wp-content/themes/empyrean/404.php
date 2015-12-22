<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="main-container <?php post_class(); ?>">         
	    <div class="main clearfix wrapper">
	    	<div class="main-top-gap"></div>
	     	<div class="content-block">
	         	<div class="content-block-details">                    
	             	<h3 class="title" style="text-align: center;width: 100%;margin: 0;padding: 0;margin-bottom: 20px;"><?php pll_e("Page Not Found") ?></h3>                       
	             	<div class="center">  
	             		<?php pll_e("It looks like nothing was found at this location.");?>	                 	
	             	</div>
		         </div>
		     </div>		    
	    </div>
    </div>

<?php get_footer(); ?>
