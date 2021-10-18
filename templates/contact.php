<?php 
/**
 * Template Name: Contact Us Page template
 */
get_header() ?>
<section class="section_page_header contact_header text-center">
    <figure class="bg"><img src="<?php echo esc_url( MBN_ASSETS_URI . '/img/bgs/img-bg-contact.png', 'mbn_theme'); ?>" alt="" width="1920" height="246" /></figure>
    <div class="grid-container">
        <h1><?php _e('Contact Us', 'mbn_theme'); ?></h1>
    </div>
</section>
<section class="get_in_touch">
    <div class="grid-container">
        <div class="grid-x grid-margin-y">
            <div class="cell large-5 large-order-2">                
                <figure class="logo"><img src="<?php echo esc_url( MBN_ASSETS_URI . '/img/logo-blue.svg', 'mbn_theme'); ?>" alt="" width="325" height="51" /></figure>
                <p><?php _e('Ultrices vulputate cum quis velit. Auctor faucibus eu nulla egestas vitae pretium nunc mi convallis. Imperdiet mauris consequat sapien, massa. Turpis senectus sit risus in.', 'mbn_theme'); ?></p>
                <div class="contact_info">                    
                    <a href="tel:6024971754" class="contact_item contact_phone" >
                        <div class="media-left">
                            <figure class=""><img src="<?php echo esc_url( MBN_ASSETS_URI . '/img/icon/icn-phone.svg', 'mbn_theme'); ?>" alt="" width="15" height="15" /></figure>
                        </div>
                        <div class="media-body"><span class="media-heading"><?php _e('(602) 497-1754', 'mbn_theme'); ?></span></div>
                    </a>                
                    <a href="mailto:tdo@tnkelectric.com" class="contact_item contact_email" >
                        <div class="media-left">
                            <figure class=""><img src="<?php echo esc_url( MBN_ASSETS_URI . '/img/icon/icn-email.svg', 'mbn_theme'); ?>" alt="" width="19" height="19" /></figure>
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><?php _e('tdo@tnkelectric.com', 'mbn_theme'); ?></span>
                        </div>
                    </a>                  
                    <a href="<?php esc_url('https://g.page/TNKElectric?share', 'mbn_theme');?>" class="contact_item contact_address" >
                        <div class="media-left">
                            <figure class=""><img src="<?php echo esc_url( MBN_ASSETS_URI . '/img/icon/icn-map.svg', 'mbn_theme'); ?>" alt="" width="18" height="18" /></figure>
                        </div>
                        <div class="media-body">
                            <span class="media-heading">
                                <?php _e('T & K Electric', 'mbn_theme'); ?><br/>
                                <?php _e('2618 N 31st St', 'mbn_theme'); ?><br/>
                                <?php _e('Phoenix, AZ 85008', 'mbn_theme'); ?>
                            </span>
                        </div>
                    </a>  
                    <div class="follow">
                        <div class="hdr"><?php _e('FOLLOW', 'mbn_theme'); ?></div>
                        <div class="socials">
                            <div class="soc_gplus">
                                <a href="<?php echo esc_url('https://www.google.com/search?q=t%26k+electric+phoenix&oq=t%26k+electri&aqs=chrome.0.69i59l2j69i57j0l2j69i61j69i60l2.1611j0j1&sourceid=chrome&ie=UTF-8#lrd=0x872b0d248c289bd1:0xd589f5392ead7378,1,,,', 'mbn_theme');?>" target="_blank">
                                    <figure><img src="<?php echo esc_url( MBN_ASSETS_URI . '/img/icon/icn-gplus-blue.svg', 'mbn_theme'); ?>" alt="Google Plus" width="26" height="26" /></figure>
                                </a>
                            </div>
                            <div class="soc_fb">
                                <a href="<?php echo esc_url('https://www.facebook.com/pg/TNKElectric', 'mbn_theme');?>" target="_blank">
                                    <figure><img src="<?php echo esc_url( MBN_ASSETS_URI . '/img/icon/icn-fb-blue.svg', 'mbn_theme'); ?>" alt="Facebook" width="19" height="19" /></figure>
                                </a>
                            </div>
                            <div class="soc_yelp">
                                <a href="<?php echo esc_url('https://en.yelp.com.ph/biz/t-and-k-electric-phoenix-4', 'mbn_theme');?>" target="_blank">
                                    <figure><img src="<?php echo esc_url( MBN_ASSETS_URI . '/img/icon/icn-yelp-blue.svg', 'mbn_theme'); ?>" alt="Yelp" width="22" height="22" /></figure>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cell large-7 large-order-1">
                <h2><?php _e('Let&#39;s Get In Touch', 'mbn_theme'); ?></h2>
                <p><?php _e('Your email address will not be published.  Required fields are marked*.', 'mbn_theme'); ?></p>
                <?= do_shortcode('[gravityform id="1" title="false" description="false" ajax="false"]'); ?>
            </div>
        </div>
    </div>
</section>
<section class="section_map">
    <div class="grid-container">
        <div  class="map_bg" >
            <iframe src="<?php echo esc_url('https://snazzymaps.com/embed/346078', 'mbn_theme');?>" width="100%" height="591px" style="border:none;"></iframe>
        </div>
    </div>
</section>
<?php get_footer() ?>