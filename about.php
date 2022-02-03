<?php 
/**
 * Template Name: About Page template
 */
get_header() ?>

<section class="section_page_header contact_header text-center">
    <figure class="bg"><img src="<?php echo esc_url( MBN_ASSETS_URI . '/img/bgs/about-heading-bg.png', 'mbn_theme'); ?>" alt="" width="1920" height="246" /></figure>
    <div class="grid-container">
        <h1><?php _e('About Us', 'mbn_theme'); ?></h1>
    </div>
</section>
<?php get_footer() ?>