<?php include 'language.php'; ?>

<?php $page = 'designforum'; ?>
<?php $page_title = $_SESSION['design_forum']; ?>
<?php include 'header.php'; ?>

<div class="main-container"> 
    <div class="main clearfix wrapper">
        <div class="main-top-gap"></div>
        <div class="content-block">
           <div class="overlay"></div>                   
           <div class="content-block-details">
               <h3 class="title right"><?php echo $_SESSION['forumdesign_objective_label']; ?></h3>
               <div class="clear"></div>
               <div class="img-wrapper">
                   <img src="img/objective.png" alt="Our Mission">
               </div>                       
               <div class="content">
                   <?php echo $_SESSION['forumdesign_objective_content']; ?>
               </div>
           </div>
       </div>
       <div class="content-block design-form">
           <div class="overlay"></div>                   
           <div class="content-block-details">
               <h3 class="title right">International Design Student Contact</h3>
               <div class="clear"></div>
               <div class="img-wrapper">
                   <img src="img/eidt.png" alt="Our Mission">
               </div>             
               <div class="content">
                   <p>
                    We would like to know you better, kindly help fill in the as below and all information will be confidential.
                   </p>
                   <div class="contact-form">
                      <div class="inputs">
                        <div class="form-control">
                            <input class="control" type="text" placeholder="FULL NAME" />
                          </div>
                          <div class="form-control">
                            <input class="control" type="email" placeholder="EMAIL" />
                          </div>
                          <div class="form-control">
                            <input class="control" type="text" placeholder="SCHOOL" />
                          </div>
                          <div class="form-control">
                            <input class="control" type="text" placeholder="FACULTY" />
                          </div>
                          <div class="form-control">
                            <input class="control" type="text" placeholder="YEAR STARTED" />
                          </div>
                          <div class="form-control">
                            <textarea class="control" placeholder="WHAT's YOUR CURRENT/FUTURE ASPIRATION"></textarea>
                          </div>
                      </div>
                      <div class="actions center">
                        <button class="btn btn-primary">Send</button>
                      </div>
                    </div>                           
               </div>
           </div>
       </div>                
    </div> <!-- #main -->
</div> <!-- #main-container -->

<?php include 'components.php'; ?>
<?php include 'footer.php'; ?>