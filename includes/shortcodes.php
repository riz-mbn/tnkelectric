<?php

function mbn_shortcode_home_url($atts = null, $content = null){
    return home_url();
}
add_shortcode('home_url', 'mbn_shortcode_home_url');


function mbn_testimonials_shortcode(){
    $returnhtml = '';
    $returnhtml .= '<section class="section_testimonials">';
    $returnhtml .= '<div class="grid-container">';
    $returnhtml .= '<div class="col-bg"><figure class="penta"><img src="'. esc_url( MBN_ASSETS_URI . '/img/bgs/img-bg-s5.jpg', 'mbn_theme') .'" alt="" width="1227" height="729" /></figure></div>';
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

    $returnhtml .= '</div>';    
    $returnhtml .= '<div class="testi_btn"><a href="'. home_url().'/testimonials" class="button primary large">' . esc_html('read more reviews', 'mbn_theme') . '</a></div></div>'; // testi_slick
    $returnhtml .= '</div></div></div></div></section>';

    return $returnhtml;
}
add_shortcode('mbn_testimonials', 'mbn_testimonials_shortcode');

//faqs shortcode
function mbn_faqs_shortcode(){
    $returnhtml = '';

    wp_reset_query();
    $returnhtml .= '<div class="faqs_wrap">';
        $returnhtml .= '<div class="faqs_nav">';

    $terms = get_terms( 'faqs_cats', array( 'hide_empty' => false, 'orderby' => 'id' ) ); // Get all terms of a taxonomy

    if ( $terms && !is_wp_error( $terms ) ) :
        
        foreach ( $terms as $term ) :

            $returnhtml .= '<div class="cat_item" data-anchor="'. esc_attr( $term->slug ) .'">';
            $returnhtml .= '<div class="cat_inner">';
            $returnhtml .= '<div class="cat_icon" ><img src="'. esc_url( get_field('faqs_tax_icon', $term ) ) .'" /></div>';
            $returnhtml .= '<div class="cat_name" ><span>'. esc_html( $term->name ) .'</span></div>';
            $returnhtml .= '</div></div>';

        endforeach;

    endif;

        $returnhtml .= '</div>';//faqs_nav    
    $returnhtml .= '</div>';//faqs_wrap    
    $returnhtml .= '<div class="faqs">';

    if ( $terms && !is_wp_error( $terms ) ) :
        
        foreach ( $terms as $term ) :

            $faqs_args = array(  
                'post_type' => 'faqs_type',
                'posts_per_page' => 6, 
                'post_status' => 'publish',
                'orderby' => 'id',
                'order' => 'asc',
                'tax_query'      => array(
                    array (
                        'taxonomy' => 'faqs_cats',
                        'field' => 'slug',
                        'terms' =>$term->slug,
                    )
                )
            );

            $faqs = new WP_Query( $faqs_args );   

            $returnhtml .= '<div id="'.esc_attr($term->slug).'" class="faqs_container">';

                if( $faqs->have_posts()) :

                    while ( $faqs->have_posts() ) : $faqs->the_post();

                        $title = get_the_title();
                        $content = get_the_content();

                        $returnhtml .= '<div class="faqs_inner">';
                            $returnhtml .= '<div class="faqs_row faqs_question"><span class="faqs_label">Q. </span><span class="faqs_title">' . $title . '</span></div>';
                            $returnhtml .= '<div class="faqs_row faqs_answer"><span class="faqs_label">A. </span><span class="faqs_content">' . $content . '</span></div>';
                        $returnhtml .= '</div>'; //faqs_inner

                    endwhile;
                    wp_reset_postdata();
                
                else:               
                        
                    $returnhtml .= '<p>'. esc_html('Sorry, no posts were found.' ) .'</p>';

                endif;
                
            $returnhtml .= '</div>'; // faqs_container
        endforeach;
    endif;
    
    $returnhtml .= '</div>';//faqs

    return $returnhtml;

}
add_shortcode('mbn_faqs', 'mbn_faqs_shortcode');
