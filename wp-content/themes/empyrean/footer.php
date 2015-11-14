        <?php include 'components.php'; ?>
        <div class="footer-container">            
            <footer>
                <div class="overlay"></div> 
                <p class="center">
                    <span> <?php pll_e("Copyright &copy; 2015 Empyrean Design. All rights reserved.") ?> </span>  
                    <span class="footer-links">
                        <?php pageLink('policy', "Policy") ?> | 
                        <?php pageLink('aboutus', "About Us") ?> | 
                        <?php pageLink('contact', "Contact") ?>
                    </span>
                </p>
            </footer>
        </div>
        <?php wp_footer(); ?>      
    </body>
</html>
