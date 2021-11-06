

    </main>
    
    <footer id="footer" class="footer">
        <div class="grid-container">
            <div class="foottop">
                <div class="grid-x">
                    <div class="cell xlarge-4 large-4 medium-12 foot_logo">
                        <a class="logo" href="<?php echo esc_url( get_home_url() , 'mbn_theme'); ?>">
                            <figure><img src="<?php echo esc_url( MBN_ASSETS_URI . '/img/logo.svg', 'mbn_theme'); ?>" alt="" width="359" height="56" ></figure>
                        </a>
                        <a href="<?php home_url()?>/contact-us" class="button primary large hollow"><?php _e('Get a no hassle free analysis', 'mbn_theme'); ?></a>
                    </div>
                    <div class="cell xlarge-4 large-4 medium-6 information">
                        <div class="information_1">
                            <div class="call_us">
                                <h4 class="col-title"><?php _e('Call Us', 'mbn_theme'); ?></h4>
                                <a href="tel:6024971754"><strong><?php _e('(602) 497-1754', 'mbn_theme'); ?></strong></a>
                            </div>
                            <div class="find_us">
                                <h4 class="col-title"><?php _e('Find Us', 'mbn_theme'); ?></h4>
                                <a href="<?php esc_url('https://g.page/TNKElectric?share', 'mbn_theme');?>">
                                    <?php _e('T & K Electri', 'mbn_theme'); ?>c<br/>
                                    <?php _e('2618 N 31st St', 'mbn_theme'); ?><br/>
                                    <?php _e('Phoenix, AZ 85008', 'mbn_theme'); ?>
                                </a>
                            </div>
                        </div>
                        <div class="information_2">
                            <div class="email_us">
                                <h4 class="col-title"><?php _e('Email Us', 'mbn_theme'); ?></h4>
                                <a href="mailto:tdo@tnkelectric.com"><?php _e('tdo@tnkelectric.com', 'mbn_theme'); ?></a>
                            </div>
                            <div class="follow_us">
                                <h4 class="col-title"><?php _e('Connect', 'mbn_theme'); ?></h4>
                                <div class="social_icons">
                                    <a href="<?php echo esc_url('https://www.instagram.com/', 'mbn_theme'); ?>">
                                        <figure>
                                            <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-ig.svg" alt="Instagram" width="24" height="24"/>
                                        </figure>
                                    </a>
                                    <a href="<?php echo esc_url('https://www.facebook.com/TNKElectric/', 'mbn_theme'); ?>">
                                        <figure>
                                            <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-fb.svg" alt="Facebook" width="18" height="24"/>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell xlarge-3 xlarge-offset-1 large-4 medium-6 footer_menu">
                        <div class="menu_1">
                            <h5 class="fw-normal">Services</h5>
                            <ul class="services_menu">
                                <li><a href="<?php echo home_url() ?>/residential-solar-services">Residential Solar Services</a></li>
                                <li><a href="<?php echo home_url() ?>/commercial-solar-services">Commercial Solar Services</a></li>
                                <li><a href="<?php echo home_url() ?>/multifamily-solar-services">Multifamily Solar Services</a></li>
                                <li><a href="<?php echo home_url() ?>/electrical-solar-services">Electrical Solar Services</a></li>
                            </ul>
                        </div>
                        <div class="menu_2">
                            <?php
                                    wp_nav_menu( array( 
                                        'theme_location' => 'footer-menu',
                                        'menu'         => '',
                                        'container'    => 'ul',
                                        'items_wrap' => '<ul class="menu vertical">%3$s</ul>' ,
                                        'menu_class'   => 'menu vertical',
                                    ));
                                ?> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="footbot">
                <div class="copyright">&copy; <?php _e('T&KElectric.', 'mbn_theme'); ?> <?php echo esc_html( date('Y'), 'mbn_theme'); ?>.</div>
                <div class="designby"><a href="<?php echo esc_url('https://www.mybizniche.com/phoenix-web-design/', 'mbn_theme'); ?>" target="_blank"><?php _e('Website Design', 'mbn_theme'); ?></a> <?php _e('by: My Biz Niche', 'mbn_theme'); ?></div>
            </div>  
        </div>  
    </footer>
    <div class="section_ngage">
        <div class="grid-container">            
            <div class="nj-engage" data-position="left"></div> 
        </div>
    </div>
</div> 
<?php wp_footer() ?>

</body>
</html>