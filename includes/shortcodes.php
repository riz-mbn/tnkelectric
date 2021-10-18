<?php

function mbn_shortcode_home_url($atts = null, $content = null){
    return home_url();
}
add_shortcode('home_url', 'mbn_shortcode_home_url');


function mbn_testimonials_shortcode(){


    $query = array(
        'post_type'     => 'testimonials_type',
        'orderby'       => '',
        'order'         => 'asc',
        'posts_per_page' => -1
    );

    $testimonials = new WP_Query( $query );
    $returnhtml .= '<div class="testi_slick">';

    if($testimonials->have_posts()):

        while ( $testimonials->have_posts() ) : $testimonials->the_post();
        
        $testi_rating = get_field('star_rating'); 
        $excerpt = get_the_content();
        $name = get_the_title();
        
            $returnhtml .= '<div class="testi_wrap">';
                $returnhtml .= '<div class="testi_item">';
                    $returnhtml .= '<div class="testi_rating">'. $testi_rating .'</div>';
                    $returnhtml .= '<div class="testi_excerpt">'. $excerpt  .'</div>';
                    $returnhtml .= '<div class="testi_name">-'. $name  .'</div>';    
                $returnhtml .= '</div>'; // testi_item
            $returnhtml .= '</div>'; // testi_wrap

        endwhile;
        wp_reset_postdata();
    
    endif;

    $returnhtml .= '</div>'; // testi_slick

    return $returnhtml;

}
add_shortcode('mbn_testimonials', 'mbn_testimonials_shortcode');
