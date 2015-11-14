<?php /* Template Name: Design Forum*/ ?>

<?php get_header(); ?>
	<div class="main-container <?php post_class(); ?>">         
	    <div class="main clearfix wrapper">
	    	<div class="main-top-gap"></div>
	        <div class="content-block">
	           <div class="overlay"></div>                   
	           <div class="content-block-details">
	               <h3 class="title right"><?php pll_e("International Students' Design Forum") ?></h3>
	               <div class="clear"></div>
	               <div class="img-wrapper">
	                   <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/objective.png" alt="Our Mission">
	               </div>                       
	               <div class="content">
	                   <?php pll_e("The objectives of this design forum is to help build students' confidence in design. <br> We will help them in seeing the physical world in a new realm in order to be more design conscious in problem solving.<br> They will learn through the macro and micro views of components, hence enlarging their perspective in perception in their design concept. </p> <p class='center'> <strong> - When one cannot see beyond the dimensions of life, nothing profitable can be created. - <br> Eric's Haywood Chang's quote </strong> </p> <p> Upon registering with us, students from any design faculty may submit their work for design critics or for discussion.<br> In returned, we will post up these works (after having approval from individual student) for sharing so that more can learn and benefit from it.") ?>
	               </div>
	           </div>
	        </div>
	        <div class="content-block design-form">
	           <div class="overlay"></div>                   
	           <div class="content-block-details">
	               <h3 class="title right"><?php pll_e("International Design Student Contact") ?></h3>
	               <div class="clear"></div>
	               <div class="img-wrapper">
	                   <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/contact.png" alt="Contact">
	               </div>             
	               <div class="content">
	                   <p>
	                    <?php pll_e("We would like to know you better, kindly help fill in the as below and all information will be confidential.") ?>
	                   </p>
	                   <div class="contact-form">
	                      	<p class="note"><?php pll_e("* All information will be kept confidential and will not be used by any third party.") ?></p>
							<?php echo do_shortcode('[contact-form-7 id="245" title="Design Forum Contact"]') ?>
	                    </div>                           
	               </div>
	           </div>
	        </div>		    
	    </div>
    </div>
<?php get_footer(); ?>
