<div class="controlpanel show">
    <div class="controlpanel-wrapper">
        <div class="controller">
            <div class="overlay controller-overlay">
            </div>
            <div class="trigger"></div>
            <div class="text">
                <span class="vertical-text">languages</span>
            </div>
        </div>
        <div class="controlpanel-details">
            <div class="overlay controlpanel-details-overlay">
            </div>
            <ul class="none-style languages">
                <li>
                    <a href="#" data-code="EN" class="lang-option" title="english">
                        <img class="flag-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/flags/en.png" alt="english">
                    </a>
                </li>
                <li>
                    <a href="#" data-code="CN" class="lang-option" title="chinese">
                        <img class="flag-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/flags/ch.png" alt="chinese">
                    </a>
                </li>
                <li>
                    <a href="#" data-code="BA" class="lang-option" title="bahasa">
                        <img class="flag-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/flags/ba.png" alt="bahasa">
                    </a>
                </li>
                <li>
                    <a href="#" data-code="JP" class="lang-option" title="japanese">
                        <img class="flag-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/flags/jp.png" alt="japanese">
                    </a>
                </li>
                <li>
                    <a href="#" data-code="KO" class="lang-option" title="korean">
                        <img class="flag-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/flags/ko.png" alt="korean">
                    </a>
                </li>                            
                <li>
                    <a href="#" data-code="MY" class="lang-option" title="myanmar">
                        <img class="flag-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/flags/my.png" alt="myanmar">
                    </a>
                </li>
                <li>
                    <a href="#" data-code="VI" class="lang-option" title="vietnamese">
                        <img class="flag-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/flags/vi.png" alt="vietnamese">
                    </a>
                </li>
            </ul>
            <div class="music-control">
                <div class="label">music</div>
                <div class="music-trigger disable-selection">
                    <span class="text lblon">on</span>
                    <span class="text lbloff">off</span>
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
                        <li>
                            <a href="#" data-code="EN" class="lang-option" title="english">english
                            </a>
                        </li>
                        <li>
                            <a href="#" data-code="CN" class="lang-option" title="chinese">
                            chinese
                            </a>
                        </li>
                        <li>
                            <a href="#" data-code="BA" class="lang-option" title="bahasa">bahasa
                            </a>
                        </li>
                        <li>
                            <a href="#" data-code="JP" class="lang-option" title="japanese">japanese
                            </a>
                        </li>
                        <li>
                            <a href="#" data-code="KO" class="lang-option" title="korean">korean
                            </a>
                        </li>                            
                        <li>
                            <a href="#" data-code="MY" class="lang-option" title="myanmar">myanmar
                            </a>
                        </li>
                        <li>
                            <a href="#" data-code="VI" class="lang-option" title="vietnamese">vietnamese
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
        <!--<source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/fridrik_karlsson.mp3" type='audio/mp3'>-->
        <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/thetruth.mp3" type='audio/mp3'>
   </audio>
</div>