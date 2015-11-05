<?php include 'language.php'; ?>
<?php $page = 'contact'; ?>
<?php $page_title = $_SESSION['contact']; ?>

<?php include 'header.php'; ?>
<div class="main-container">
  <div class="main clearfix wrapper">
      <div class="main-top-gap"></div>
      <div class="office-list">
        <div class="office info-bl">
          <img class="responsive-img office-img" src="img/contact/office_sing.jpg" alt="Singapore office">
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
          <img class="responsive-img office-img" src="img/contact/office_china.jpg" alt="China office">
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
              <h3 class="title right"><?php echo $_SESSION['lblJobOpportunity']; ?></h3>
              <div class="img-wrapper">
                 <img src="img/job_opp.png" alt="<?php echo $_SESSION['lblJobOpportunity']; ?>">
              </div>             
              <div class="content">                  
                  <?php echo $_SESSION['lblJobOpportunityContent']; ?>
              </div>
         </div>
      </div>    
      <div class="content-block design-form">
         <div class="overlay"></div>
           <div class="content-block-details">
               <h3 class="title right"><?php echo $_SESSION['lblClientEnquiry']; ?></h3>
               <div class="img-wrapper">
                   <img src="img/contact.png" alt="<?php echo $_SESSION['lblClientEnquiry']; ?>">
               </div>             
               <div class="content">
                  <div class="contact-form">
                    <div class="inputs">
                      <div class="form-control">
                          <input class="control" type="text" placeholder="<?php echo $_SESSION['lblFullName']; ?>" />
                      </div>
                      <div class="form-control">
                          <input class="control" type="email" placeholder="<?php echo $_SESSION['lblEmail']; ?>" />
                      </div>
                      <div class="form-control">
                          <input class="control" type="text" placeholder="<?php echo $_SESSION['lblContact']; ?>" />
                      </div>
                      <div class="form-control">
                          <textarea class="control" placeholder="<?php echo $_SESSION['lblContent']; ?>"></textarea>
                      </div>
                      <div style="margin-bottom: 25px;"><?php echo $_SESSION['lblFormConfidentialInfo']; ?></div>
                    </div>
                    <div class="actions center">
                      <button class="btn btn-primary"><?php echo $_SESSION['lblSend']; ?></button>
                    </div>
                  </div>
               </div>
           </div>
      </div>
  </div> <!-- #main -->
</div> <!-- #main-container -->

<?php include 'components.php'; ?>
<?php include 'footer.php'; ?>