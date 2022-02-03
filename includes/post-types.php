<?php


// Register Testimonials Post Type
function testimonials_post() {
    register_post_type( 'testimonials_type',
        array(
            'labels'    => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __('Testimonial')
            ),
            'public'        => true,
            'publicly_queryable'  => false,
            'has_archive'   => false,
            'show_in_rest'  => false,
            'menu_position' => 20,
            'supports'      =>  array('title', 'editor', 'page-attributes'),
            'menu_icon'     => 'dashicons-format-quote',
            'rewrite' => array(
                'slug' => 'testimonials_type',
                'with_front' => false  
            )
        )
    );

    register_taxonomy(  
        'testimonial_cats',
        'testimonials_type',
        array(
            'hierarchical' => true,         
            'has_archive' => true,
            'label' => 'Categories',            
            'query_var' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'rewrite' => array(
                'slug' => 'testimonial_cats',
                'with_front' => false  
            )
        )
    );
}
add_action( 'init', 'testimonials_post' ); 



// Register FAQs Post Type
function faqs_post() {
    register_post_type( 'faqs_type',
        array(
            'labels'    => array(
                'name' => __( 'FAQs' ),
                'singular_name' => __('FAQ')
            ),
            'public'        => true,
            'publicly_queryable'  => false,
            'has_archive'   => false,
            'show_in_rest'  => false,
            'menu_position' => 20,
            'supports'      =>  array('title', 'editor', 'page-attributes'),
            'menu_icon'     => 'dashicons-editor-help',
            'rewrite' => array(
                'slug' => 'faqs_type',
                'with_front' => false  
            )
        )
    );

    register_taxonomy(  
        'faqs_cats',
        'faqs_type',
        array(
            'hierarchical' => true,         
            'has_archive' => true,
            'label' => 'Categories',            
            'query_var' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'rewrite' => array(
                'slug' => 'faqs_cats',
                'with_front' => false  
            )
        )
    );
}
add_action( 'init', 'faqs_post' ); 

// Register Jobs Post Type
function jobs_post() {
    register_post_type( 'jobs_type',
        array(
            'labels'    => array(
                'name' => __( 'Jobs' ),
                'singular_name' => __('Job')
            ),
            'public'        => true,
            'publicly_queryable'  => false,
            'has_archive'   => false,
            'show_in_rest'  => false,
            'menu_position' => 20,
            'supports'      =>  array('title', 'editor', 'page-attributes'),
            'menu_icon'     => 'dashicons-id-alt',
            'rewrite' => array(
                'slug' => 'jobs_type',
                'with_front' => false  
            )
        )
    );

    register_taxonomy(  
        'jobs_cats',
        'jobs_type',
        array(
            'hierarchical' => true,         
            'has_archive' => true,
            'label' => 'Categories',            
            'query_var' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'rewrite' => array(
                'slug' => 'jobs_cats',
                'with_front' => false  
            )
        )
    );
}
add_action( 'init', 'jobs_post' ); 

// Register Gallery Post Type
function gallery_post() {
    register_post_type( 'gallery_type',
        array(
            'labels'    => array(
                'name' => __( 'Galleries' ),
                'singular_name' => __('Gallery')
            ),
            'public'        => true,
            'publicly_queryable'  => false,
            'has_archive'   => false,
            'show_in_rest'  => false,
            'menu_position' => 20,
            'supports'      =>  array('title', 'editor', 'page-attributes'),
            'menu_icon'     => 'dashicons-format-gallery',
            'rewrite' => array(
                'slug' => 'jobs_type',
                'with_front' => false  
            )
        )
    );

    // register_taxonomy(  
    //     'gallery_cats',
    //     'gallery_type',
    //     array(
    //         'hierarchical' => true,         
    //         'has_archive' => true,
    //         'label' => 'Categories',            
    //         'query_var' => true,
    //         'show_admin_column' => true,
    //         'show_in_rest' => true,
    //         'rewrite' => array(
    //             'slug' => 'gallery_cats',
    //             'with_front' => false  
    //         )
    //     )
    // );
}
add_action( 'init', 'gallery_post' ); 