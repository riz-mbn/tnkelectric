<?php 
/**
 * Template Name: Contact Us Page template
 */
get_header() ?>
<section class="section_page_header text-center">
    <figure class="bg"><img src="<?php echo MBN_ASSETS_URI ?>/img/bgs/img-bg-contact.jpg" alt="" width="1920" height="246" /></figure>
    <div class="grid-container">
        <h1>Contact Us</h1>
    </div>
</section>
<section class="get_in_touch">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell large-7">
                <h2>Let's Get In Touch</h2>
                <p>Your email address will not be published.  Required fields are marked*.</p>
                <?= do_shortcode('[gravityform id="1" title="false" description="false" ajax="false"]'); ?>
            </div>
            <div class="cell large-5">                
                <figure class=""><img src="<?php echo MBN_ASSETS_URI ?>/img/logo-blue" alt="" width="325" height="51" /></figure>
                <p>Ultrices vulputate cum quis velit. Auctor faucibus eu nulla egestas vitae pretium nunc mi convallis. Imperdiet mauris consequat sapien, massa. Turpis senectus sit risus in.</p>
                <div class="contact_info">                    
                    <a href="tel:6024971754" class="contact_item contact_email" >
                        <div class="media-left">
                            <figure class=""><img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-phone.svg" alt="" width="15" height="15" /></figure>
                        </div>
                        <div class="media-body"><span class="media-heading">(602) 497-1754</span></div>
                    </a>                
                    <a href="mailto:tdo@tnkelectric.com" class="contact_item contact_address" >
                        <div class="media-left">
                            <figure class=""><img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-email.svg" alt="" width="19" height="19" /></figure>
                        </div>
                        <div class="media-body">
                            <span class="media-heading">tdo@tnkelectric.com</span>
                        </div>
                    </a>                  
                    <a href="https://g.page/TNKElectric?share" class="contact_item contact_address" >
                        <div class="media-left">
                            <figure class=""><img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-map.svg" alt="" width="18" height="18" /></figure>
                        </div>
                        <div class="media-body">
                            <span class="media-heading">
                                T & K Electric<br/>
                                2618 N 31st St<br/>
                                Phoenix, AZ 85008
                            </span>
                        </div>
                    </a>  
                    <div class="follow">
                        <span>FOLLOW</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>