<?php

/**
 * Alsafeer Publishing & Adverting Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Alsafeer Publishing & Adverting
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ALSAFEER_PUBLISHING_ADVERTING_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{
    wp_enqueue_style('alsafeer-publishing-adverting-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ALSAFEER_PUBLISHING_ADVERTING_VERSION, 'all');
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);

// Custom Product Grid

// Add Carousel JS Files

function add_carousel_js()
{
    wp_enqueue_script('owl-default', 'https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl-call', 'https://cdn.jsdelivr.net/gh/alsafeerdev/main_web@main/includes/js/min/owl-call.min.js', array('owl-default'), null, true);
}

add_action('wp_enqueue_scripts', 'add_carousel_js');


// Add Bootstrap

function add_custom_css()
{
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), null, 'all');
    wp_enqueue_style('product-grid-css', 'https://cdn.jsdelivr.net/gh/alsafeerdev/main_web@main/includes/css/min/product-grid-styles.min.css', array(), null, 'all');
    wp_enqueue_style('featured-prod-slider', 'https://cdn.jsdelivr.net/gh/alsafeerdev/main_web@main/includes/css/min/feature-prod-slider.min.css', array(), null, 'all');
    wp_enqueue_style('combines-styles', 'https://cdn.jsdelivr.net/gh/alsafeerdev/main_web@main/includes/css/min/combine.min.css', array(), null, 'all');
    wp_enqueue_style('owl-default-css', 'https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css', array(), null, 'all');
    wp_enqueue_style('splide-theme-css', 'https://cdn.jsdelivr.net/gh/alsafeerdev/main_web@main/includes/css/min/splide-theme.min.css', array(), null, 'all');
    wp_enqueue_style('promotions-slider-css', 'https://cdn.jsdelivr.net/gh/alsafeerdev/main_web@main/includes/css/min/promotion-slider.min.css', array(), null, 'all');
    wp_enqueue_style('services-slider-css', 'https://cdn.jsdelivr.net/gh/alsafeerdev/main_web@main/includes/css/min/services-slider.min.css', array(), null, 'all');
    wp_enqueue_style('portfolio-grid-css', 'https://cdn.jsdelivr.net/gh/alsafeerdev/main_web@main/includes/css/min/ajax-portfolio-grid.min.css', array(), null, 'all');
    wp_enqueue_style('clients-carousel', 'https://cdn.jsdelivr.net/gh/alsafeerdev/main_web@main/includes/css/min/clients-carousel.min.css', array(), null, 'all');
    wp_enqueue_style('synced-slider-styles', 'https://cdn.jsdelivr.net/gh/alsafeerdev/main_web@main/includes/css/min/synced-slider.min.css', array(), null, 'all');
    wp_enqueue_style('media-queries', 'https://cdn.jsdelivr.net/gh/alsafeerdev/main_web@main/includes/css/min/media.min.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'add_custom_css');

// Excerpt More

add_filter('excerpt_more', function ($more) {
    return '...';
}, 30);


// Portfolio Slider
function portfolio_slider()
{
    ob_start();
    get_template_part('includes/portfolio', 'slider');
    return ob_get_clean();
}

add_shortcode('portfolio-slider', 'portfolio_slider');


// Custom Slider for Portfolio END 

// Custom Slider for Promotions


function promotions_slider()
{
    ob_start();
    get_template_part('includes/promotions', 'slider');
    return ob_get_clean();
}

add_shortcode('promotions-slider', 'promotions_slider');

// Custom Slider for Promotions END

// Custom Slider for Promotions Light BG

function promotions_slider_light_bg()
{
    ob_start();
    get_template_part('includes/promotions', 'sliderLightBG');
    return ob_get_clean();
}

add_shortcode('promotions-sliderLightBG', 'promotions_slider_light_bg');

// Custom Slider for Promotions Light BG END

// Custom Slider for Services

function services_slider()
{
    ob_start();
    get_template_part('includes/services', 'slider');
    return ob_get_clean();
}

add_shortcode('services-slider', 'services_slider');

// Custom Slider for Servives END

// Custom Slider for Services Dark BG

function services_slider_dark_bg()
{
    ob_start();
    get_template_part('includes/services', 'sliderDarkBG');
    return ob_get_clean();
}

add_shortcode('services-sliderDarkBG', 'services_slider_dark_bg');

// Custom Slider for Services Dark BG END


// Ajax Portfolio Grid
// JS


// Shortcode
function ajax_portfolio_grid()
{
    ob_start();
    get_template_part('includes/ajax', 'portfolioGrid');
    return ob_get_clean();
}

add_shortcode('ajax-portfolio-grid', 'ajax_portfolio_grid');

// Featured Products Slider

function featured_product_slider()
{
    ob_start();
    get_template_part('includes/featuredProd', 'slider');
    return ob_get_clean();
}

add_shortcode('featured-product-slider', 'featured_product_slider');

// Products Slider

function products_slider()
{
    ob_start();
    get_template_part('includes/products', 'slider');
    return ob_get_clean();
}

add_shortcode('products-slider', 'products_slider');


// Clients Carousel

// Register Short code

function clients_carousel()
{
    ob_start();
    get_template_part('includes/clients', 'carousel');
    return ob_get_clean();
}

add_shortcode('clients-carousel', 'clients_carousel');

// Synced Slider Gallery 

// Register Shortcode and JS

function synced_slider_gallery()
{
    wp_enqueue_script('synced-slider-scripts', 'https://cdn.jsdelivr.net/gh/alsafeerdev/main_web@main/includes/js/min/synced-slider.min.js', array('owl-default'), null, true);
    ob_start();
    get_template_part('includes/synced', 'slider');
    return ob_get_clean();
}
add_shortcode('synced-slider', 'synced_slider_gallery');


// Cat List

function cat_list()
{
    ob_start();
    get_template_part('includes/cat', 'list');
    return ob_get_clean();
}

add_shortcode('cat-list', 'cat_list');


function particles_js()
{
    wp_enqueue_script('particles-js', 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js',  array(), null, true);
}
add_action('wp_enqueue_scripts', 'particles_js');



function image_optimize_js()
{
    wp_enqueue_script('image-optimize-js', 'https://cdn.jsdelivr.net/gh/alsafeerdev/main_web@main/includes/js/min/image-optimize.min.js', null, false);
}

add_action('wp_enqueue_scripts', 'image_optimize_js');

// Disable font awesome 

add_action('elementor/frontend/after_register_styles', function () {
    foreach (['solid', 'regular', 'brands'] as $style) {
        wp_deregister_style('elementor-icons-fa-' . $style);
    }
}, 20);


// Featured Products Carousel for mobile devices

function feat_products_mb()
{
    ob_start();
    get_template_part('includes/featprod', 'm');
    return ob_get_clean();
}

add_shortcode('feat-prod-mb', 'feat_products_mb');

// Remove instant-page.JS

function remove_instant_page_js()
{
    wp_dequeue_script('instant-page');
    wp_deregister_script('instant-page');
}

add_action( 'wp_print_scripts', 'remove_instant_page_js' );

// Dynamic Video Gallery

function dynamic_video_gallery()
{
    ob_start();
    get_template_part( 'includes/video', 'gallery' );
    return ob_get_clean();
}

add_shortcode( 'dynamic-video-gallery', 'dynamic_video_gallery' );

// Enable SPAM Filter for Contact forms

function wpf_dev_profanity_filter_paragraph( $field_id, $field_submit, $form_data ) {
 
    // Create your list of profanity words separated by commas
$blocked_words = array( 
    'jumboleadmagnet.com',
    'click here',
    'Click Now',
    'FREE',
    'CLICK HERE',
    'http://talkwithwebtraffic.com',
    'Cialis',
    '.xyz',
    '.com',
    '.sale',
    '.online',
    '.biz',
    'visit',
    'url=',
    '.ru',
    'fuck',
    'https://adultgames.life/',
    '.life',
    
);

foreach( $blocked_words as $word ) {
    if(preg_match( '/\b' .$word. '\b/i', $field_submit )) {
        wpforms()->process->errors[ $form_data[ 'id' ] ][ $field_id ] = esc_html__( 'NO SPAM MESSAGES ALLOWED./ اية رسائل مزعجة وغير حقيقية غير مسموح بها', 'plugin-domain' );
        return;
    }
}

}

add_action( 'wpforms_process_validate_textarea', 'wpf_dev_profanity_filter_paragraph', 10, 3 );


function wpf_dev_check_for_urls( $field_id, $field_submit, $form_data ) {

if( strpos($field_submit, 'http') !== false || strpos($field_submit, 'www.') !== false || strpos($field_submit, 'https') !== false ) {
    wpforms()->process->errors[ $form_data['id'] ][ $field_id ] = esc_html__( 'NO SPAM MESSAGES ALLOWED./ اية رسائل مزعجة وغير حقيقية غير مسموح بها', 'wpforms' );
    return;
} 
 
}

add_action( 'wpforms_process_validate_textarea', 'wpf_dev_check_for_urls', 10, 3 );
add_action( 'wpforms_process_validate_text', 'wpf_dev_check_for_urls', 10, 3 ); 