<!DOCTYPE html>
<html class="htmlclass no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="<?php echo MBN_ASSETS_URI ?>/img/icon/favicon.ico">
    <!-- <title><?php bloginfo('title') ?></title> -->

    <?php wp_head() ?>

    <script type="text/javascript" src="https://cdn.nicejob.co/js/sdk.min.js?id=5898512929652736" defer></script>
</head>
<body <?php body_class() ?>>

<div id="wrapper"> 
    <header id="header" data-sticky-container data-toggler=".show-menu">
        <div class="hsnav-s6 sticky" data-sticky data-options="marginTop:0">
            <div class="grid-container">
                <div class="navbar">
                    <a class="logo" href="<?php echo esc_url( get_home_url(), 'mbn_theme'); ?>">
                        <figure><img src="<?php echo esc_url( MBN_ASSETS_URI . '/img/logo.svg', 'mbn_theme'); ?>" alt="" width="306" height="48" ></figure>
                    </a>
                    <span class="navicon" data-toggle="header"><?php _e('mobile menu', 'mbn_theme'); ?></span>

                    <nav class="navmenu">                    
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
                    <!-- <div class="navutil">
                        <a href="tel:6024971754" class="contact_item contact_phone" >
                            <div class="media-left">
                                <figure class=""><img src="<?php echo esc_url( MBN_ASSETS_URI . '/img/icon/icn-phone.svg', 'mbn_theme'); ?>" alt="" width="15" height="15" /></figure>
                            </div>
                            <div class="media-body"><span class="media-heading"><?php _e('(602) 497-1754', 'mbn_theme'); ?></span></div>
                        </a>  
                    </div> -->

                    <nav class="mobmenu">     
                        <a href="<?php echo esc_url( home_url() .'/contact', 'mbn_theme') ?>" class="button primary large hollow text-center"><?php _e('Get a no hassle free analysis', 'mbn_theme'); ?></a>   
                        <a href="<?php echo esc_url( 'tel:6024971754', 'mbn_theme') ?>" class="button light clear"><span class="highlight"><?php _e('Or Call Us', 'mbn_theme'); ?> </span><?php _e( '(602) 497-1754', 'mbn_theme'); ?></a>        
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
                </div>
            </div>
        </div>            
    </header>
    <main id="content" class="content">