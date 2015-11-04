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
               <h3 class="title right">International Students' Design Forum</h3>
               <div class="clear"></div>
               <div class="img-wrapper">
                   <img src="img/objective.png" alt="Our Mission">
               </div>                       
               <div class="content">
                   <p>
                    The objectives of this design forum is to help build students' confidence in design. <br>
                    We will help them in seeing the physical world in a new realm in order to be more design conscious in problem solving.<br>
                    They will learn through the macro and micro views of components, hence enlarging their perspective in perception in their design concept.
                   </p>
                   <p class="center">
                    <strong> -  When one cannot see beyond the dimensions of life, nothing profitable can be created. - <br> Eric's Haywood Chang's quote 
                    </strong>
                   </p>
                   <p>
                      Upon registering with us, students from any design faculty may submit their work for design critics or for discussion.<br>
                      In returned, we will post up these works (after having approval from individual student) for sharing so that more can learn and benefit from it.                              
                   </p>
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