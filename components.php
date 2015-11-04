<div class="controlpanel show">
    <div class="controlpanel-wrapper">
        <div class="controller">
            <div class="overlay controller-overlay">
            </div>
            <div class="trigger"></div>
            <div class="text">
                <span class="vertical-text"><?php echo $_SESSION['languages']; ?></span>
            </div>
        </div>
        <div class="controlpanel-details">
            <div class="overlay controlpanel-details-overlay">
            </div>
            <ul class="none-style languages">
                <li>
                    <a href="#" data-code="EN" class="lang-option" title="<?php echo $_SESSION['english']; ?>">
                        <img class="flag-icon" src="img/flags/en.png" alt="<?php echo $_SESSION['english']; ?>">
                    </a>
                </li>
                <li>
                    <a href="#" data-code="CN" class="lang-option" title="<?php echo $_SESSION['chinese']; ?>">
                        <img class="flag-icon" src="img/flags/ch.png" alt="<?php echo $_SESSION['chinese']; ?>">
                    </a>
                </li>
                <li>
                    <a href="#" data-code="BA" class="lang-option" title="<?php echo $_SESSION['bahasa']; ?>">
                        <img class="flag-icon" src="img/flags/ba.png" alt="<?php echo $_SESSION['bahasa']; ?>">
                    </a>
                </li>
                <li>
                    <a href="#" data-code="JP" class="lang-option" title="<?php echo $_SESSION['japanese']; ?>">
                        <img class="flag-icon" src="img/flags/jp.png" alt="<?php echo $_SESSION['japanese']; ?>">
                    </a>
                </li>
                <li>
                    <a href="#" data-code="KO" class="lang-option" title="<?php echo $_SESSION['korean']; ?>">
                        <img class="flag-icon" src="img/flags/ko.png" alt="<?php echo $_SESSION['korean']; ?>">
                    </a>
                </li>                            
                <li>
                    <a href="#" data-code="MY" class="lang-option" title="<?php echo $_SESSION['myanmar']; ?>">
                        <img class="flag-icon" src="img/flags/my.png" alt="<?php echo $_SESSION['myanmar']; ?>">
                    </a>
                </li>
                <li>
                    <a href="#" data-code="VI" class="lang-option" title="<?php echo $_SESSION['vietnamese']; ?>">
                        <img class="flag-icon" src="img/flags/vi.png" alt="<?php echo $_SESSION['vietnamese']; ?>">
                    </a>
                </li>
            </ul>
            <div class="music-control">
                <div class="label"><?php echo $_SESSION['music']; ?></div>
                <div class="music-trigger disable-selection">
                    <span class="text lblon"><?php echo $_SESSION['on']; ?></span>
                    <span class="text lbloff"><?php echo $_SESSION['off']; ?></span>
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
                <div class="label"><?php echo $_SESSION['music']; ?></div>
                <div class="music-trigger disable-selection">
                    <span class="text lblon"><?php echo $_SESSION['on']; ?></span>
                    <span class="text lbloff"><?php echo $_SESSION['off']; ?></span>
                </div>          
            </div>
            <div class="language-control">
                <div class="label language-trigger"><?php echo $_SESSION['languages']; ?></div> 
                <div class="language-list">
                    <ul class="none-style">
                        <li>
                            <a href="#" data-code="EN" class="lang-option" title="<?php echo $_SESSION['english']; ?>"><?php echo $_SESSION['english']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-code="CN" class="lang-option" title="<?php echo $_SESSION['chinese']; ?>"><?php echo $_SESSION['chinese']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-code="BA" class="lang-option" title="<?php echo $_SESSION['bahasa']; ?>"><?php echo $_SESSION['bahasa']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-code="JP" class="lang-option" title="<?php echo $_SESSION['japanese']; ?>"><?php echo $_SESSION['japanese']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-code="KO" class="lang-option" title="<?php echo $_SESSION['korean']; ?>"><?php echo $_SESSION['korean']; ?>
                            </a>
                        </li>                            
                        <li>
                            <a href="#" data-code="MY" class="lang-option" title="<?php echo $_SESSION['myanmar']; ?>"><?php echo $_SESSION['myanmar']; ?>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-code="VI" class="lang-option" title="<?php echo $_SESSION['vietnamese']; ?>"><?php echo $_SESSION['vietnamese']; ?>
                            </a>
                        </li>                                
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
        <?php if($page == 'gallery') { ?>
        <source src="assets/fridrik_karlsson.mp3" type='audio/mp3'>
        <?php } else { ?>
        <source src="assets/thetruth.mp3" type='audio/mp3'>
        <?php } ?>
   </audio>
</div>