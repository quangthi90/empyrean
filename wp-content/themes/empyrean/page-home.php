<?php /* Template Name: Home*/ ?>

<?php get_header(); ?>
<div class="main-container">         
    <div class="main clearfix">
        <div class="slide-show">        	        
        	<?php echo do_shortcode('[foogallery id="191"]') ?>              
        </div>
        <div class="image-list wrapper">
            <?php echo do_shortcode('[foogallery id="192"]') ?>
        </div>
        <div class="news-list wrapper">
            <h2 class="header"><?php pll_e("About Us") ?></h2>            
            <div class="item-list">
                <div class="news-item">
                    <div class="overlay">     
                    </div>
                    <h4 class="news-title"><?php pll_e("Our Mission") ?></h4>
                    <div class="news-content">
                        <?php pll_e("It is our belief that nothing exists by itself in this world. We co-exist with one another and we are interdependent on one another. This creates greater dimension and contributes colours to the earth. Good designs are not good enough; a great product is one that will be able to sell itself. We believe that the design that sells is the design that is most relevant and appealing to the consumer...") ?>
                    </div>
                    <a href="<?php echo getPageLink('aboutus'); ?>#mission" class="seemore"></a>
                </div>
                <div class="news-item">
                    <div class="overlay">     
                    </div>
                    <h4 class="news-title"><?php pll_e("Our Story") ?></h4>
                    <div class="news-content">
                        <?php pll_e("Empyrean Design was founded in 1992 by Eric Haywood Chang. Having graduated from LaSalle College of the Arts in Singapore; majoring in Interior Designing and minor in Product Designing and Fine Arts, he is a self-taught architect that possesses many years of experience and expertise in the related field. He is passionate about design, arts, and music...") ?>
                    </div>
                    <a href="<?php echo getPageLink('aboutus'); ?>#story" class="seemore"></a>
                </div>
            </div>
        </div>
    </div> <!-- #main -->
</div> <!-- #main-container -->
<?php get_footer(); ?>
