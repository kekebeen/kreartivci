<?php

/*  Register Scripts and Style */

function theme_register_index_scripts() {
    if ( is_page( 'Udruzenje' ) ) {
        wp_enqueue_style( 'home',esc_url(trailingslashit( get_template_directory_uri()) . 'home.css' ) );
        wp_enqueue_script( 'kreartivci-js', esc_url( trailingslashit( get_template_directory_uri() ) . 'js/home.js' ), array( 'jquery' ), '2.2', true );
    }
    else  wp_enqueue_style( 'kreartivci-css', get_stylesheet_uri() );
    wp_enqueue_script( 'kreartivci-js', esc_url( trailingslashit( get_template_directory_uri() ) . 'js/kreartivci.min.js' ), array( 'jquery' ), '2.2', true );
}

add_action( 'wp_enqueue_scripts', 'theme_register_index_scripts', 1 );

add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );

function remove_jquery_migrate( &$scripts)
{
    if(!is_admin())
    {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
    }
}

/*Add lightbox*/

/* Add menu support */
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
    add_theme_support( 'automatic-feed-links' );
    /* Add post image support */
    add_theme_support( 'post-thumbnails' );
    add_theme_support( "title-tag" );
}




/* Add custom thumbnail sizes */
if ( function_exists( 'add_image_size' ) ) {
    //add_image_size( 'custom-image-size', 500, 500, true );
    add_image_size( 'featured-thumb', 300, 240, true );
    add_image_size( 'featured-single-thumb', 472, 475, true );
    add_image_size( 'blog-cover', 880, 375, true );
}


/*  EXCERPT 
    Usage:
    
    <?php echo excerpt(100); ?>
*/

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
    } else {
    $excerpt = implode(" ",$excerpt);
    } 
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}

// Remove comment-reply.min.js from footer
function comments_clean_header_hook(){
 wp_deregister_script( 'comment-reply' );
 }
add_action('init','comments_clean_header_hook');


