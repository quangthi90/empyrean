<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<?php include 'language.php'; ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Empyrean Design - <?php echo $_SESSION['welcome']; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="icon" href="favicon.ico" type="image/x-icon" />      

        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="js/vendor/popup/magnific-popup.css"> 
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>        
    </head>
    <body class="welcome-page">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="header-container">
            <div class="overlay header-overlay">     
            </div>
            <header class="wrapper clearfix">
                <h1 class="title">
                    <a href="#" class="logo">
                        <img src="img/logo.png" alt="Logo" />
                    </a>
                </h1>
                <div class="menu">
                    <span class="menu-toogle"></span>
                    <nav>
                        <ul>
                            <li><a class="nav-link" href="home.php"><?php echo $_SESSION['home']; ?></a></li>
                            <li><a class="nav-link" href="aboutus.php"><?php echo $_SESSION['about_us']; ?></a></li>
                            <li><a class="nav-link" href="gallery.php"><?php echo $_SESSION['gallery']; ?></a></li>
                            <li><a class="nav-link" href="designforum.php"><?php echo $_SESSION['design_forum']; ?></a></li>
                            <li><a class="nav-link" href="contact.php"><?php echo $_SESSION['contact']; ?></a></li>
                        </ul>
                    </nav>
                </div>                
            </header>
        </div>
        <div class="main-container">
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
            <div class="main wrapper clearfix">
                <div class="player-container">
                    <button id="player-trigger" title="Play introduction video"></button>
                </div>
            </div> <!-- #main -->
        </div> <!-- #main-container -->
        <div class="overlay overlay-main hidden"></div>
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
        <div class="music-background hidden">
            <audio id="music-background" loop preload="true">
                <source src="assets/thetruth.mp3" type='audio/mp3'>
           </audio>
        </div>
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/vendor/jquery.backstretch.min.js"></script>

        <script src="js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            /*(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');*/
        </script>        
    </body>
</html>
