<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Empyrean Design - <?php echo $page_title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />      

    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="js/vendor/popup/magnific-popup.css"> 
    <link rel="stylesheet" href="js/vendor/carousel/owl.carousel.css"> 
    <link rel="stylesheet" href="css/main.css">

    <?php if($code == 'MY'){ ?>
    <link rel="stylesheet" href="css/myanmar.css">        
    <?php } ?>

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>        
</head>
<body class="<?php echo $page; ?>">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="header-container">
        <div class="overlay header-overlay">     
        </div>
        <header class="wrapper clearfix">
            <h1 class="title">
                <a href="index.php" class="logo">
                    <img src="img/logo.png" alt="Logo" />
                </a>
            </h1>
            <div class="menu">
                <span class="menu-toogle"></span>
                <nav>
                    <ul>
                        <li><a class="nav-link <?php echo $page == 'home' ? 'active' : ''; ?>" href="home.php"><?php echo $_SESSION['home']; ?></a></li>
                        <li><a class="nav-link <?php echo $page == 'aboutus' ? 'active' : ''; ?>" href="aboutus.php"><?php echo $_SESSION['about_us']; ?></a></li>
                        <li><a class="nav-link <?php echo $page == 'gallery' ? 'active' : ''; ?>" href="gallery.php"><?php echo $_SESSION['gallery']; ?></a></li>
                        <li><a class="nav-link <?php echo $page == 'designforum' ? 'active' : ''; ?>" href="designforum.php"><?php echo $_SESSION['design_forum']; ?></a></li>
                        <li><a class="nav-link <?php echo $page == 'contact' ? 'active' : ''; ?>" href="contact.php"><?php echo $_SESSION['contact']; ?></a></li>
                    </ul>
                </nav>
            </div>                
        </header>
    </div>