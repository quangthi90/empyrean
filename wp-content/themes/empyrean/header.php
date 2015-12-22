<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"  lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Empyrean Design</title>    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/apple-touch-icon.png">
    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico" type="image/x-icon" />      
  
    <script type="text/javascript">
        window.THEME_URL = '<?php echo esc_url( get_template_directory_uri() ); ?>/';
        document.onmousedown = function(e){
            if(e.button == 2)
            {
                return false;    
            }
        };        
    </script>
    <script>
        function clickIE4(){
            if (event.button == 2){
                return false;
            }
        }
        function clickNS4(e){
            if (document.layers||document.getElementById && !document.all){
                if (e.which ==2 || e.which == 3){
                    return false;
                }
            }
        }
        if (document.layers){
            document.captureEvents(Event.MOUSEDOWN);
            document.onmousedown = clickNS4;
        }
        else if (document.all&&!document.getElementById){
            document.onmousedown = clickIE4;
        }
        document.oncontextmenu = new Function("return false;");
        </script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="header-container">
        <div class="overlay header-overlay">     
        </div>
        <header class="wrapper clearfix">
            <h1 class="title">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" alt="Logo" />
                </a>
            </h1>
            <div class="menu">
                <span class="menu-toogle"></span>
                <?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php
						// Primary navigation menu.
						wp_nav_menu( array(
							'menu_class'     => 'nav-link',
							'theme_location' => 'primary',
						) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>
            </div>                
        </header>
    </div>