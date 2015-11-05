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
               <h3 class="title right"><?php echo $_SESSION['forumdesign_contact_label']; ?></h3>
               <div class="clear"></div>
               <div class="img-wrapper">
                   <img src="img/contact.png" alt="Contact">
               </div>             
               <div class="content">
                   <p>
                    <?php echo $_SESSION['forumdesign_contact_info']; ?>
                   </p>
                   <div class="contact-form">
                      <div class="inputs">
                        <div class="form-control">
                            <input class="control" type="text" placeholder="<?php echo $_SESSION['lblFullName']; ?>" />
                          </div>
                          <div class="form-control">
                            <input class="control" type="email" placeholder="<?php echo $_SESSION['lblEmail']; ?>" />
                          </div>
                          <div class="form-control">
                            <input class="control" type="text" placeholder="<?php echo $_SESSION['lblSchool']; ?>" />
                          </div>
                          <div class="form-control">
                            <input class="control" type="text" placeholder="<?php echo $_SESSION['lblFaculty']; ?>" />
                          </div>
                          <div class="form-control">
                            <input class="control" type="text" placeholder="<?php echo $_SESSION['lblYearStarted']; ?>" />
                          </div>
                          <div class="form-control">
                            <textarea class="control" placeholder="<?php echo $_SESSION['lblAspiration']; ?>"></textarea>
                          </div>
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