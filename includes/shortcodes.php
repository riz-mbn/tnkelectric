<?php

function mbn_shortcode_home_url($atts = null, $content = null){
    return home_url();
}
add_shortcode('home_url', 'mbn_shortcode_home_url');


function mbn_testimonials_shortcode(){

    $returnhtml .= '<section class="section_testimonials">';
    $returnhtml .= '<div class="col-bg"><figure class="penta"><img src="'. esc_url( MBN_ASSETS_URI . '/img/bgs/img-bg-s5.jpg', 'mbn_theme') .'" alt="" width="1227" height="729" /></figure></div>';
    $returnhtml .= '<div class="grid-container">';
    $returnhtml .= '<h4 class="section_title">'. esc_html('Customer Endorsements', 'mbn_theme') . '</h4>';
    $returnhtml .= '<div class="grid-x">';
    $returnhtml .= '<div class="cell large-2 align-self-bottom">    ';
    $returnhtml .= '<div class="reviews_info">';
    $returnhtml .= '<div class="ratings_info">';
    $returnhtml .= '<div class="info_1">';
    $returnhtml .= '<p>'. esc_html('OUTSTANDING', 'mbn_theme') .'</p>';
    $returnhtml .= '<h1>'. esc_html('4.9', 'mbn_theme') . '</h1>';
    $returnhtml .= '</div>';
    $returnhtml .= '<div class="info_1">';
    $returnhtml .= '<div class="field_type-star_rating_field"><ul class="star-rating"><li><i class="fa fa-star star-1"></i></li><li><i class="fa fa-star star-2"></i></li><li><i class="fa fa-star star-3"></i></li><li><i class="fa fa-star star-4"></i></li><li><i class="fa fa-star star-5"></i></li></ul></div>';
    $returnhtml .= '<small class="no_revs">'. esc_html('203 reviews', 'mbn_theme'). '</small>';                        
    $returnhtml .= '</div></div>';
    $returnhtml .= '<div class="social_reviews">';
    $returnhtml .= '<div class="google_reviews">';
    $returnhtml .= '<figure><img src="'. esc_url( MBN_ASSETS_URI . '/img/icon/icn-google.svg', 'mbn_theme') .'" alt="" width="21" height="21" /></figure>';                            
    $returnhtml .= '<div class="field_type-star_rating_field"><ul class="star-rating"><li><i class="fa fa-star star-1"></i></li><li><i class="fa fa-star star-2"></i></li><li><i class="fa fa-star star-3"></i></li><li><i class="fa fa-star star-4"></i></li><li><i class="fa fa-star star-5"></i></li></ul></div>';
    $returnhtml .= '</div>';
    $returnhtml .= '<div class="yelp_reviews">';
    $returnhtml .= '<figure><img src="' . esc_url( MBN_ASSETS_URI . '/img/icon/icn-yelp.svg', 'mbn_theme') .'" alt="" width="17" height="23" /></figure>';                        
    $returnhtml .= '<div class="field_type-star_rating_field"><ul class="star-rating"><li><i class="fa fa-star star-1"></i></li><li><i class="fa fa-star star-2"></i></li><li><i class="fa fa-star star-3"></i></li><li><i class="fa fa-star star-4"></i></li><li><i class="fa fa-star star-5"></i></li></ul></div>';
    $returnhtml .= '</div>';
    $returnhtml .= '<div class="other_reviews">';
    $returnhtml .= '<small>'. esc_html('other', 'mbn_theme') .'</small>';
    $returnhtml .= '<div class="field_type-star_rating_field"><ul class="star-rating"><li><i class="fa fa-star star-1"></i></li><li><i class="fa fa-star star-2"></i></li><li><i class="fa fa-star star-3"></i></li><li><i class="fa fa-star star-4"></i></li><li><i class="fa fa-star star-5"></i></li></ul></div>';
    $returnhtml .= '</div></div></div></div>';
    $returnhtml .= '<div class="cell large-10">';
    $returnhtml .= '<div class="col-testi">';
    $returnhtml .= '<div class="testimonials">';

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

    $returnhtml .= '</div></div>'; // testi_slick
    $returnhtml .= '<a href="#" class="button primary large">' . esc_html('read more reviews', 'mbn_theme') . '</a>' ;
    $returnhtml .= '</div></div></div></div></section>';

    return $returnhtml;
}
add_shortcode('mbn_testimonials', 'mbn_testimonials_shortcode');

