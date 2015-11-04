<?php include 'language.php'; ?>

<?php $page = 'aboutus'; ?>
<?php $page_title = $_SESSION['about_us']; ?>
<?php include 'header.php'; ?>

<div class="main-container">       
  <div class="main clearfix wrapper">
      <div class="main-top-gap"></div>
      <a name="mission"></a>
      <div class="content-block">
         <div class="overlay"></div>                   
         <div class="content-block-details">
             <h3 class="title right"><?php echo $_SESSION['our_mission']; ?></h3>                       
             <div class="clear"></div>
             <div class="img-wrapper">
                 <img src="img/about/vision.png" alt="Our Mission">
             </div>                       
             <div class="content">
                 <?php echo $_SESSION['mission_content']; ?>
             </div>
         </div>
     </div>
     <a name="story"></a>
     <div class="content-block">
         <div class="overlay"></div>                   
         <div class="content-block-details">
             <h3 class="title right"><?php echo $_SESSION['our_story']; ?></h3>                       
             <div class="clear"></div>
             <div class="img-wrapper">
                 <img src="img/about/company.png" alt="Our story">
             </div>                       
             <div class="content">
                <?php echo $_SESSION['story_content']; ?>
             </div>
         </div>
     </div>
  </div> <!-- #main -->
</div> <!-- #main-container -->

<?php include 'components.php'; ?>
<?php include 'footer.php'; ?>