<?php

function mbn_shortcode_home_url($atts = null, $content = null){
    return home_url();
}
add_shortcode('home_url', 'mbn_shortcode_home_url');


function mbn_testimonials_shortcode(){
    $returnhtml = '';
    $returnhtml .= '<section class="section_testimonials">';
    //$returnhtml .= '<div class="col-bg"><figure class="penta"><img src="'. esc_url( MBN_ASSETS_URI . '/img/bgs/img-bg-s5.jpg', 'mbn_theme') .'" alt="" width="1227" height="729" /></figure></div>';
    $returnhtml .= '<div class="grid-container">';
    $returnhtml .= '<h4 class="section_title">'. esc_html('Customer Endorsements', 'mbn_theme') . '</h4>';
    $returnhtml .= '<div class="grid-x">';
    $returnhtml .= '<div class="cell xlarge-2 large-3">    ';
    $returnhtml .= '<div class="reviews_info">';
    $returnhtml .= '<div class="ratings_info">';
    // $returnhtml .= '<div class="info_1">';
    // $returnhtml .= '<p>'. esc_html('OUTSTANDING', 'mbn_theme') .'</p>';
    // $returnhtml .= '<h1>'. esc_html('4.9', 'mbn_theme') . '</h1>';
    // $returnhtml .= '</div>';
    $returnhtml .= '<div class="info_1">';
    $returnhtml .= '<div class="nj-badge" data-show-reviews="1"></div>';
    $returnhtml .= '<script type="text/javascript" src="https://cdn.nicejob.co/js/sdk.min.js?id=5898512929652736" defer=""></script>';
    $returnhtml .= '</div>';
    // $returnhtml .= '<div class="field_type-star_rating_field"><ul class="star-rating"><li><i class="fa fa-star star-1"></i></li><li><i class="fa fa-star star-2"></i></li><li><i class="fa fa-star star-3"></i></li><li><i class="fa fa-star star-4"></i></li><li><i class="fa fa-star star-5"></i></li></ul></div>';
    // $returnhtml .= '<small class="no_revs">'. esc_html('203 reviews', 'mbn_theme'). '</small>';                        
    // $returnhtml .= '</div></div>';
    // $returnhtml .= '<div class="social_reviews">';
    // $returnhtml .= '<div class="google_reviews">';
    // $returnhtml .= '<figure><img src="'. esc_url( MBN_ASSETS_URI . '/img/icon/icn-google.svg', 'mbn_theme') .'" alt="" width="21" height="21" /></figure>';                            
    // $returnhtml .= '<div class="field_type-star_rating_field"><ul class="star-rating"><li><i class="fa fa-star star-1"></i></li><li><i class="fa fa-star star-2"></i></li><li><i class="fa fa-star star-3"></i></li><li><i class="fa fa-star star-4"></i></li><li><i class="fa fa-star star-5"></i></li></ul></div>';
    // $returnhtml .= '</div>';
    // $returnhtml .= '<div class="yelp_reviews">';
    // $returnhtml .= '<figure><img src="' . esc_url( MBN_ASSETS_URI . '/img/icon/icn-yelp.svg', 'mbn_theme') .'" alt="" width="17" height="23" /></figure>';                        
    // $returnhtml .= '<div class="field_type-star_rating_field"><ul class="star-rating"><li><i class="fa fa-star star-1"></i></li><li><i class="fa fa-star star-2"></i></li><li><i class="fa fa-star star-3"></i></li><li><i class="fa fa-star star-4"></i></li><li><i class="fa fa-star star-5"></i></li></ul></div>';
    // $returnhtml .= '</div>';
    // $returnhtml .= '<div class="other_reviews">';
    // $returnhtml .= '<small>'. esc_html('other', 'mbn_theme') .'</small>';
    // $returnhtml .= '<div class="field_type-star_rating_field"><ul class="star-rating"><li><i class="fa fa-star star-1"></i></li><li><i class="fa fa-star star-2"></i></li><li><i class="fa fa-star star-3"></i></li><li><i class="fa fa-star star-4"></i></li><li><i class="fa fa-star star-5"></i></li></ul></div>';
    $returnhtml .= '</div></div></div>';
    $returnhtml .= '<div class="cell xlarge-10 large-9 review_list">';
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
    $returnhtml .= '<div class="testi_btn"><a href="'. home_url().'/testimonials" class="button primary large">' . esc_html('read more reviews', 'mbn_theme') . '</a>';
    $returnhtml .= '<div class="slider-arrows slick-slider"><button class="slick-prev slick-arrow" aria-label="Prev" type="button" style="">Previous</button><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button></div></div></div>'; // testi_slick
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

            $returnhtml .= '<div class="cat_item '. esc_attr( $term->slug ) .'" data-anchor="'. esc_attr( $term->slug ) .'">';
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
                'posts_per_page' => -1, 
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

function mbn_jobs_shortcode() {
    
    $returnhtml = '';

    wp_reset_query();

    $jobs_args = array(  
        'post_type' => 'jobs_type',
        'posts_per_page' => -1, 
        'post_status' => 'publish',
        'orderby' => 'id',
        'order' => 'asc'
    );

    $jobs = new WP_Query( $jobs_args ); 

    $returnhtml .= '<div class="jobs_container">';

    if( $jobs->have_posts()) :

    while ( $jobs->have_posts() ) : $jobs->the_post();

    $title = get_the_title();
    $desc = get_the_content();
    $qualities = get_field('job_qualification');
    $resp = get_field('job_responsibilities');
    $benefits = get_field('job_benefits');

    $returnhtml .= '<div class="jobs_item">';
        $returnhtml .= '<div class="jobs_row jobs_title">';
        $returnhtml .= '<span class="title">' . $title . '</span>';
        $returnhtml .= '<span class="toggle_icon"></span>';
        $returnhtml .= '</div>';
        if( have_rows('job_qualifications') || have_rows('job_responsibilities') || have_rows('job_benefits') ):
            $returnhtml .= '<div class="jobs_row jobs_content">';
            
                $returnhtml .= '<h3>Job Highlights</h3>'; 
                $returnhtml .= '<div class="jobs_column_wrap">'; 

                    $returnhtml .= '<div class="jobs_column">';

                        $returnhtml .= '<div class="jobs_column_inner">';
                            //job_qualifications
                            $returnhtml .= '<div class="job_qualifications">';
                                if( have_rows('job_qualification') ):
                                    $returnhtml .= '<h4>Qualifications</h4>';
                                    $returnhtml .= '<ul class="check_list">';
                                        while( have_rows('job_qualification') ) : the_row();
                                            $returnhtml .= '<li><div class="list_item">'. get_sub_field('quality') .'</div></li>';
                                        endwhile;
                                    $returnhtml .= '</ul>';
                                endif;
                            $returnhtml .= '</div>';//job_qualification
                        $returnhtml .= '</div>';//jobs_column_inner   

                    $returnhtml .= '</div>';//jobs_column

                    $returnhtml .= '<div class="jobs_column">';

                        $returnhtml .= '<div class="jobs_column_inner">';                        
                            //job_responsibilities
                            $returnhtml .= '<div class="job_responsibilities">';
                            if( have_rows('job_responsibilities') ):
                                $returnhtml .= '<h4>Responsibilities</h4>';
                                $returnhtml .= '<ul class="check_list">';
                                    while( have_rows('job_responsibilities') ) : the_row();
                                        $returnhtml .= '<li><div class="list_item">'. get_sub_field('responsibility') .'</div></li>';
                                    endwhile;
                                $returnhtml .= '</ul>';
                            endif;
                            $returnhtml .= '</div>';//job_responsibilities
                        $returnhtml .= '</div>';//jobs_column_inner

                        $returnhtml .= '<div class="jobs_column_inner">';                   
                            //job_benefits
                            $returnhtml .= '<div class="job_benefits">';
                            if( have_rows('job_benefits') ):
                                $returnhtml .= '<h4>Benefits</h4>';
                                $returnhtml .= '<ul class="check_list">';
                                    while( have_rows('job_benefits') ) : the_row();
                                        $returnhtml .='<li><div class="list_item">'. get_sub_field('benefit') .'</div></li>';
                                    endwhile;
                                $returnhtml .= '</ul>';
                            endif;
                            $returnhtml .= '</div>';//job_benefits
                        $returnhtml .= '</div>';//jobs_column_inner

                    $returnhtml .= '</div>'; //jobs_column

                $returnhtml .= '</div>'; //jobs_column_wrap

                $returnhtml .= '<div class="jobs_description">';
                if ( !empty($desc)):
                    $returnhtml .= '<h3>Full Description</h3>'; 
                    $returnhtml .= '<div class="description">'. $desc . '</div>';
                endif;
                $returnhtml .= '</div>'; //jobs_description
                
            $returnhtml .= '</div>'; //jobs_row
        endif;
    $returnhtml .= '</div>'; //jobs_inner
    endwhile;        
    wp_reset_postdata();
    
    else:               
            
        $returnhtml .= '<p>'. esc_html('Sorry, no posts were found.' ) .'</p>';

    endif;
    
$returnhtml .= '</div>'; // jobs_container

return $returnhtml;

}
add_shortcode('mbn_jobs', 'mbn_jobs_shortcode');


function mbn_gallery_shortcode() {
    
    $returnhtml = '';

    wp_reset_query();

    $gallery_args = array(  
        'post_type' => 'gallery_type',
        'posts_per_page' => -1, 
        'post_status' => 'publish',
        'orderby' => 'id',
        'order' => 'asc'
    );

    $gallery = new WP_Query( $gallery_args ); 

    $returnhtml .= '<div class="gallery_container">';
    
    if( $gallery->have_posts()) :

        $returnhtml .= '<div class="grid_nav">';
        // $returnhtml .= '<div class="grid-sizer"></div>';
            $returnhtml .= '<div class="grid_nav_item all" data-anchor="all">';
            $returnhtml .= '<div class="cat_title"><h3>All</h3></div>';
            $returnhtml .= '</div>';

        while ( $gallery->have_posts() ) : $gallery->the_post();

            $title = get_the_title();
            $cat_name = strtolower( preg_replace('/\s+/', '_', $title) );

            $returnhtml .= '<div class="grid_nav_item"  data-anchor="'. $cat_name .'">';
            $returnhtml .= '<div class="cat_title"><h3>' . $title .'</h3></div>';
            $returnhtml .= '</div>';
        endwhile;
        
        wp_reset_postdata();

        $returnhtml .= '</div>';
    endif;

    if( $gallery->have_posts()) :

        $returnhtml .= '<div class="gallery_photos">';
        // $returnhtml .= '<div class="grid-sizer"></div>';

        while ( $gallery->have_posts() ) : $gallery->the_post();

        $title = get_the_title();
        $caption = get_the_content();
        $cat_id = strtolower( preg_replace('/\s+/', '_', $title) );

        $returnhtml .= '<div id="'.$cat_id.'" class="gallery_item">';
        // $returnhtml .= '<h2>'. $title . '</h2>';

            $images = get_field('gallery_photos');

            if( $images ):

                $returnhtml .= '<div class="grid">';
                $returnhtml .= '<div class="grid-sizer"></div>';
                $returnhtml .= '<div class="gutter-sizer"></div>';

                foreach( $images as $image ):
                    $returnhtml .= '<div class="grid-item ">';
                    $returnhtml .= '<div class="grid-inner ">';
                        $returnhtml .= '<figure class=""><img src="'. $image['url'] .'" alt="'. $image['alt'] .'" /></figure>';
                        if($image['caption']) : $returnhtml .= '<p class="caption">'. $image['caption'].'</p>'; endif;
                    $returnhtml .= '</div></div>';
                endforeach;

                $returnhtml .= '</div>';

                
            endif;

        $returnhtml .= '</div>';
        endwhile;        
        $returnhtml .= '</div>';
        // $returnhtml .= '</div>';
    wp_reset_postdata();

    else:                           
        $returnhtml .= '<p>'. esc_html('Sorry, no posts were found.' ) .'</p>';
        
    endif;

    $returnhtml .= '</div>'; // gallery_container

    return $returnhtml;

}
add_shortcode('mbn_gallery', 'mbn_gallery_shortcode');
