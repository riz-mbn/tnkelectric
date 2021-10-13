<!DOCTYPE html>
<html class="htmlclass no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="<?php echo MBN_ASSETS_URI ?>/img/icon/favicon.ico">
    <!-- <title><?php bloginfo('title') ?></title> -->

    <?php wp_head() ?>

</head>
<body <?php body_class() ?>>

<div id="wrapper"> 
    <header id="header" data-sticky-container data-toggler=".show-menu">
        <div class="hsnav-s6 sticky" data-sticky data-options="marginTop:0">
            <div class="navbar">
                <a class="logo" href="<?php echo get_home_url(); ?>">
                    <figure><img src="<?php echo MBN_ASSETS_URI ?>/img/logo.svg" alt="" width="306" height="48" ></figure>
                </a>
                <span class="navicon hide-for-large" data-toggle="header">mobile menu</span>

                <nav class="navmenu show-for-large">                    
                    <?php
                            wp_nav_menu( array( 
                            'theme_location' => 'main-menu',
                            'menu'       => '',
                            'container'    => 'ul',
                            'items_wrap' => '<ul class="menu align-right dropdown" data-dropdown-menu>%3$s</ul>' ,
                            'menu_class'   => 'menu align-right dropdown',
                        ));
                    ?>     
                </nav>
                <nav class="mobmenu hide-for-large">     
                    <a href="#" class="button primary large hollow">Get a no hassle free analysis</a>                   
                    <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'mobile-menu',
                            'menu'         => '',
                            'container'    => 'ul',
                            'items_wrap' => '<ul class="menu accordion-menu" data-multi-open="false" data-accordion-menu data-submenu-toggle="true">%3$s</ul>' ,
                            'menu_class'   => 'menu accordion-menu',
                        ));
                    ?> 
                </nav>

                <div class="navutil show-for-large">
                    <figure><img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-menu-boxes.svg" alt="" width="30" height="30" ></figure>
                </div>
                
            </div>
        </div>            
    </header>
    <main id="content" class="content">