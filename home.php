<?php include 'language.php'; ?>

<?php $page = 'home'; ?>
<?php $page_title = $_SESSION['home']; ?>
<?php include 'header.php'; ?>

<div class="main-container">         
    <div class="main clearfix">
        <div class="slide-show">
            <div class="item-list">
                <img src="img/slideshow/si01.jpg" alt="">
                <img src="img/slideshow/si02.jpg" alt="">
            </div>                 
        </div>
        <div class="image-list wrapper">
            <div class="item-list">
                <img src="img/slideshow/imglist01.jpg" alt="">
                <img src="img/slideshow/imglist02.jpg" alt="">
                <img src="img/slideshow/imglist03.jpg" alt="">
                <img src="img/slideshow/imglist04.jpg" alt="">
                <img src="img/slideshow/imglist05.jpg" alt="">
                <img src="img/slideshow/imglist06.jpg" alt="">
                <img src="img/slideshow/imglist07.jpg" alt="">
                <img src="img/slideshow/imglist08.jpg" alt="">
            </div>
        </div>
        <div class="news-list wrapper">
            <h2 class="header"><?php echo $_SESSION['about_us']; ?></h2>
            <div class="item-list">
                <div class="news-item">
                    <div class="overlay">     
                    </div>
                    <h4 class="news-title"><?php echo $_SESSION['our_mission']; ?></h4>
                    <div class="news-content">
                        <?php echo $_SESSION['mission_content']; ?>
                    </div>
                    <a href="aboutus.html#mission" class="seemore"></a>
                </div>
                <div class="news-item">
                    <div class="overlay">     
                    </div>
                    <h4 class="news-title"><?php echo $_SESSION['our_story']; ?></h4>
                    <div class="news-content">
                        <?php echo $_SESSION['story_content']; ?>
                    </div>
                    <a href="aboutus.html#story" class="seemore"></a>
                </div>
            </div>
        </div>
    </div> <!-- #main -->
</div> <!-- #main-container -->

<?php include 'components.php'; ?>
<?php include 'footer.php'; ?>