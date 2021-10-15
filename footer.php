

    </main>
    
    <footer id="footer" class="footer">
        <div class="grid-container">
            <div class="foottop">
                <div class="grid-x">
                    <div class="cell xlarge-4 large-4 medium-12 foot_logo">
                        <a class="logo" href="<?php echo get_home_url(); ?>">
                            <figure><img src="<?php echo MBN_ASSETS_URI ?>/img/logo.svg" alt="" width="359" height="56" ></figure>
                        </a>
                        <a href="#" class="button primary large hollow">Get a no hassle free analysis</a>
                    </div>
                    <div class="cell xlarge-4 large-4 medium-6 information">
                        <div class="information_1">
                            <div class="call_us">
                                <h4 class="col-title">Contact Us</h4>
                                <a href="tel:6024971754"><strong>(602) 497-1754</strong></a>
                            </div>
                            <div class="find_us">
                                <h4 class="col-title">Find Us</h4>
                                <a href="#">
                                    T & K Electric<br/>
                                    18 N 31st St<br/>
                                    Phoenix, AZ 85008
                                </a>
                            </div>
                        </div>
                        <div class="information_2">
                            <div class="email_us">
                                <h4 class="col-title">Email Us</h4>
                                <a href="mailto:tdo@tnkelectric.com">tdo@tnkelectric.com</a>
                            </div>
                            <div class="follow_us">
                                <h4 class="col-title">Connect</h4>
                                <div class="social_icons">
                                    <a href="<?php echo esc_url('https://www.instagram.com//'); ?>">
                                        <figure>
                                            <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-ig.svg" alt="Instagram" width="24" height="24"/>
                                        </figure>
                                    </a>
                                    <a href="<?php echo esc_url('https://www.facebook.com/'); ?>">
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
                            <h5>Services</h5>
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
                <div class="copyright">&copy; T&KElectric. <?php echo date('Y'); ?></div>
                <div class="designby"><a href="https://www.mybizniche.com/phoenix-web-design/" target="_blank">Website Design</a> by: My Biz Niche</div>
            </div>  
        </div>  
    </footer>
</div>  

<?php wp_footer() ?>

</body>
</html>