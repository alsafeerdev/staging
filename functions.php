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
    wp_enqueue_script('owl-default', get_stylesheet_directory_uri() . '/includes/js/min/owl.carousel.min.js', array('jquery'), true, true);
    wp_enqueue_script('owl-call', get_stylesheet_directory_uri() . '/includes/js/min/owl-call.min.js', array('owl-default'), true, true);
}

add_action('wp_enqueue_scripts', 'add_carousel_js');


// Add Bootstrap

function add_custom_css()
{
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', true, true);
    wp_enqueue_style('product-grid-css', get_stylesheet_directory_uri() . '/includes/css/min/product-grid-styles.min.css', true, true);
}
add_action('wp_enqueue_scripts', 'add_custom_css');


function product_grid()
{
    wp_enqueue_script('bootstrap-JS', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array(), true, true);
    wp_enqueue_script('cat-filter-js', get_stylesheet_directory_uri() . '/includes/js/min/cat-filter-scripts.min.js', array(), true, true);
    ob_start();
    get_template_part('includes/product', 'grid');
    return ob_get_clean();
}

add_shortcode('custom-product-grid', 'product_grid');

// Numeric Pagination
function pagination_bar($custom_query)
{
    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text' => 'Prev.',
            'next_text' => 'Next',
        ));
    }
}

// Modify Exerpt Length

function custom_excerpt_length($length)
{
    global $post;
    if ($post->post_type == 'post')
        return 25;
    else if ($post->post_type == 'product')
        return 10;
    else
        return 25;

    return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

add_filter('excerpt_more', '__return_false');

// Dashboard Edit
add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts()
{
    echo '<style>
  .categorydiv div.tabs-panel, .customlinkdiv div.tabs-panel, .posttypediv div.tabs-panel, .taxonomydiv div.tabs-panel, .wp-tab-panel {
    
    max-height: 1246px !important;
    
}
  </style>';
}

// Custom Slider for Portfolio 

function add_custom_css_splide()
{
    wp_enqueue_style('owl-default-css', get_stylesheet_directory_uri() . '/includes/css/min/owl.carousel.min.css', true, true);
    wp_enqueue_style('splide-theme-css', get_stylesheet_directory_uri() . '/includes/css/min/splide-theme.min.css', true, true);
}
add_action('wp_enqueue_scripts', 'add_custom_css_splide');


function portfolio_slider()
{
    ob_start();
    get_template_part('includes/portfolio', 'slider');
    return ob_get_clean();
}

add_shortcode('portfolio-slider', 'portfolio_slider');


// Custom Slider for Portfolio END 

// Custom Slider for Promotions

function add_custom_css_promotions_slider()
{
    wp_enqueue_style('promotions-slider-css', get_stylesheet_directory_uri() . '/includes/css/min/promotion-slider.min.css', true, true);
}
add_action('wp_enqueue_scripts', 'add_custom_css_promotions_slider');


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

function add_custom_css_services_slider()
{
    wp_enqueue_style('services-slider-css', get_stylesheet_directory_uri() . '/includes/css/min/services-slider.min.css', true, true);
}
add_action('wp_enqueue_scripts', 'add_custom_css_services_slider');


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

// CSS
function add_custom_css_ajax_portfolio_grid()
{
    wp_enqueue_style('portfolio-grid-css', get_stylesheet_directory_uri() . '/includes/css/min/ajax-portfolio-grid.min.css', true, true);
}
add_action('wp_enqueue_scripts', 'add_custom_css_ajax_portfolio_grid');

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
    get_template_part( 'includes/featuredProd', 'slider' );
    return ob_get_clean();
}

add_shortcode( 'featured-product-slider', 'featured_product_slider' );