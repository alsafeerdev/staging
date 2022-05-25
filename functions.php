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
    wp_enqueue_style('featured-prod-slider', get_stylesheet_directory_uri() . '/includes/css/min/feature-prod-slider.min.css', true, true,);
    wp_enqueue_style('combines-styles', get_stylesheet_directory_uri() . '/includes/css/min/combine.min.css', true, true,);
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

// Add Styles

function clients_carousel_css()
{
    wp_enqueue_style('clients-carousel', get_stylesheet_directory_uri() . '/includes/css/min/clients-carousel.min.css', true, true);
}

add_action('wp_enqueue_scripts', 'clients_carousel_css');

// Register Short code

function clients_carousel()
{
    ob_start();
    get_template_part('includes/clients', 'carousel');
    return ob_get_clean();
}

add_shortcode('clients-carousel', 'clients_carousel');

// Synced Slider Gallery 

function synced_slider_css()
{
    wp_enqueue_style('synced-slider-styles', get_stylesheet_directory_uri() . '/includes/css/min/synced-slider.min.css', true, true);
}
add_action('wp_enqueue_scripts', 'synced_slider_css');

// Register Shortcode and JS

function synced_slider_gallery()
{
    wp_enqueue_script('synced-slider-scripts', get_stylesheet_directory_uri() . '/includes/js/min/synced-slider.min.js', array('owl-default'), true, true);
    ob_start();
    get_template_part('includes/synced', 'slider');
    return ob_get_clean();
}
add_shortcode('synced-slider', 'synced_slider_gallery');



// Ajax Post Filter

add_action('wp_ajax_myfilter', 'ajax_filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter', 'ajax_filter_function');

function ajax_filter_function()
{
    $args = array(
        'post_type' => 'services',
        'orderby' => 'date', // we will sort posts by date
        'order'    => $_POST['date'] // ASC or DESC
    );

    // for taxonomies / categories
    if (isset($_POST['prod-category']))
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'product_categories',
                'field' => 'id',
                'terms' => $_POST['prod-category']
            )
        );

    // if you want to use multiple checkboxed, just duplicate the above 5 lines for each checkbox

    $query = new WP_Query($args);

    echo '<div class="row grid-container">';
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>

            <div class="col-md-4 my-3">
                <a href="<?php echo get_permalink(); ?>" class="prods-wrapper-link" target="_blank">
                    <div class="post-container">
                        <div class="image-container">
                            <?php
                            // An attachment/image ID is all that's needed to retrieve its alt and title attributes.
                            $image_id = get_post_thumbnail_id();
                            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                            ?>
                            <img src="<?php echo the_post_thumbnail_url('full'); ?>" alt="<?php echo $image_alt ?>" srcset="" class="product-grid-image">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="post-meta text-center d-flex flex-column flex-wrap align-items-center justify-content-between">

                            <h2 class="product-title"> <?php the_title(); ?></h2>

                            <p class="post-excerpt"> <?php echo get_the_excerpt(); ?></p>

                            <p class="know-more ">Know More</p>
                        </div>
                    </div>
                </a>
            </div>

<?php endwhile;
        echo '</div>';

        wp_reset_postdata();
    else :
        echo 'No posts found';
    endif;

    die();
}

// LOAD MORE
