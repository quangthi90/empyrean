<div class="controlpanel show">
    <div class="controlpanel-wrapper">
        <div class="controller">
            <div class="overlay controller-overlay">
            </div>
            <div class="trigger"></div>
            <div class="text">
                <span class="vertical-text"><?php pll_e("Language") ?></span>
            </div>
        </div>
        <div class="controlpanel-details">
            <div class="overlay controlpanel-details-overlay">
            </div>
            <ul class="none-style languages">
                <?php foreach (pll_the_languages(array('raw' => 1, 'hide_if_empty' => 0)) as $key => $lang) { ?>
                    <li>
                        <a href="<?php echo $lang['url']; ?>" data-code="<?php echo $lang['slug']; ?>" class="lang-option" title="<?php echo $lang['name']; ?>">
                            <img class="flag-icon" src="<?php echo $lang['flag']; ?>" alt="<?php echo $lang['name']; ?>">
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <div class="music-control">
                <div class="label"><?php pll_e("music") ?></div>
                <div class="music-trigger disable-selection">
                    <span class="text lblon"><?php pll_e("on") ?></span>
                    <span class="text lbloff"><?php pll_e("off") ?></span>
                </div>                            
            </div>
        </div>              
    </div>
</div>
</div> <!-- #main-container -->
<div class="mobile-controlpanel">
    <div class="mobile-controlpanel-wrapper">
        <div class="overlay controller-overlay">                    
        </div>
        <div class="controlpanel-details">            
            <div class="music-control">
                <div class="label">music</div>
                <div class="music-trigger disable-selection">
                    <span class="text lblon">on</span>
                    <span class="text lbloff">off</span>
                </div>          
            </div>
            <div class="language-control">
                <div class="label language-trigger">languages</div> 
                <div class="language-list">
                    <ul class="none-style">
                        <?php foreach (pll_the_languages(array('raw' => 1, 'hide_if_empty' => 0)) as $key => $lang) { ?>
                            <li>
                                <a href="<?php echo $lang['url']; ?>" data-code="<?php echo $lang['slug']; ?>" class="lang-option" title="<?php echo $lang['name']; ?>">
                                    <?php echo $lang['name']; ?>
                                </a>
                            </li>
                        <?php } ?>                              
                    </ul>
                    <ul class="none-style actions">
                        <li><a href="#" class="language-cancel">Cancel</a></li>
                    </ul>
                </div> 
            </div>
        </div>
    </div>                
</div>
<div class="overlay overlay-main hidden"></div>
<div class="music-background hidden">
    <audio id="music-background" loop preload="true">
        <!--<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fridrik_karlsson.mp3" type='audio/mp3'>-->
        <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/thetruth.mp3" type='audio/mp3'>
   </audio>
</div>