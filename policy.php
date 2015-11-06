<?php include 'language.php'; ?>

<?php $page = 'policy'; ?>
<?php $page_title = $_SESSION['policy']; ?>
<?php include 'header.php'; ?>

<div class="main-container">       
  <div class="main clearfix wrapper">
      <div class="main-top-gap"></div>
     <div class="content-block">
         <div class="overlay"></div>                   
         <div class="content-block-details">                    
             <h3 class="title right"><?php echo $_SESSION['policy']; ?></h3>                       
             <div class="clear"></div>
             <div class="img-wrapper">
                 <img src="img/policy.png" alt="Policy">
             </div>                       
             <div class="content">                
                 <?php echo $_SESSION['lblPolicyContent']; ?>
             </div>
         </div>
     </div>
  </div> <!-- #main -->
</div> <!-- #main-container -->

<?php include 'components.php'; ?>
<?php include 'footer.php'; ?>