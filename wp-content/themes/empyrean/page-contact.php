<?php /* Template Name: Contact*/ ?>

<?php get_header(); ?>
	<div class="main-container <?php post_class(); ?>">         
	    <div class="main clearfix wrapper">
	    	<div class="main-top-gap"></div>
		    <div class="office-list">
				<div class="office info-bl">
				  <img class="responsive-img office-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/contact/office_sing.jpg" alt="Singapore office">
				  <div class="office-info hidden">
					<div class="office-info-wrapper">
					  <div class="overlay"></div> 
					  <h3 class="office-name">Singapore office</h3>
					  <div class="office-info-item office-address">111 North Bridge Road #21-01 Peninsula Plaza Singapore 179098 
					  </div>
					  <div class="office-info-item table office-contact">
						<div class="table-row">
						  <div class="table-cell info-label">
							Tel: 
						  </div>
						  <div class="table-cell info-value">
							+65 6389 1789
						  </div>
						</div>
						<div class="table-row">
						  <div class="table-cell info-label">
							Fax: 
						  </div>
						  <div class="table-cell info-value">
							+65 6507 4488
						  </div>
						</div>
						<div class="table-row">
						  <div class="table-cell info-label">
							Email: 
						  </div>
						  <div class="table-cell info-value">
							empyreandesign@yahoo.com
						  </div>
						</div>
					  </div>                                               
					</div>
				  </div>
				</div>
				<div class="office info-tr">
				  <img class="responsive-img office-img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/contact/office_china.jpg" alt="China office">
				  <div class="office-info hidden">
					<div class="office-info-wrapper">
					  <div class="overlay"></div>
					  <h3 class="office-name">China office</h3>
					  <div class="office-info-item office-address">China, Hainan Province, Haikou City, Yusha Road Jingyu Square Block 2 Unit 1403
					  </div>
					  <div class="office-info-item office-contact">
						<div class="table-row">
						  <div class="table-cell info-label">
							Tel/Fax: 
						  </div>
						  <div class="table-cell info-value">
							+86 898 6855683
						  </div>
						</div>
					  </div>                        
					</div>                                         
				  </div>
				</div>
		  	</div>  
		  	<div class="content-block design-form">
				 <div class="overlay"></div>
				   <div class="content-block-details">
					  <h3 class="title"><?php pll_e("Job Opportunity") ?></h3>
					  <div class="img-wrapper">
						 <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/job_opp.png" alt="lblJobOpportunity">
					  </div>             
					  <div class="content">			  
						  <?php pll_e("We are actively recruiting new staff for our business expansion or forming of a new division. You may be an office staff or designer or a project manager. <br/>Interested personal may email to us direct at: <a href='mailto: hr@empyreandesign.com'>hr@empyreandesign.com</a>") ?>
					  </div>
				 </div>
		  	</div> 
		  	<div class="content-block design-form">
			 	<div class="overlay"></div>
			   	<div class="content-block-details">
				    <h3 class="title"><?php pll_e("Client's Enquiry") ?></h3>
				    <div class="img-wrapper">
					   <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/contact.png" alt="lblClientEnquiry">
				    </div>             
				    <div class="content">
					  <div class="contact-form">
					  	<p class="note"><?php pll_e("* All information will be kept confidential and will not be used by any third party.") ?></p>
						<?php formContactForm('contact-us') ?>
					  </div>
				   	</div>
			   	</div>
		  	</div>
	    </div>
    </div>
<?php get_footer(); ?>
