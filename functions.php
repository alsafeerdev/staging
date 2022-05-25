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

// Pagination


function misha_paginator( $first_page_url ){

	// the function works only with $wp_query that's why we must use query_posts() instead of WP_Query()
	global $wp_query;

	// remove the trailing slash if necessary
	$first_page_url = untrailingslashit( $first_page_url );


	// it is time to separate our URL from search query
	$first_page_url_exploded = array(); // set it to empty array
	$first_page_url_exploded = explode("/?", $first_page_url);
	// by default a search query is empty
	$search_query = '';
	// if the second array element exists
	if( isset( $first_page_url_exploded[1] ) ) {
		$search_query = "/?" . $first_page_url_exploded[1];
		$first_page_url = $first_page_url_exploded[0];
	}

	// get parameters from $wp_query object
	// how much posts to display per page (DO NOT SET CUSTOM VALUE HERE!!!)
	$posts_per_page = (int) $wp_query->query_vars['posts_per_page'];
	// current page
	$current_page = (int) $wp_query->query_vars['paged'];
	// the overall amount of pages
	$max_page = $wp_query->max_num_pages;

	// we don't have to display pagination or load more button in this case
	if( $max_page <= 1 ) return;

	// set the current page to 1 if not exists
	if( empty( $current_page ) || $current_page == 0) $current_page = 1;

	// you can play with this parameter - how much links to display in pagination
	$links_in_the_middle = 4;
	$links_in_the_middle_minus_1 = $links_in_the_middle-1;

	// the code below is required to display the pagination properly for large amount of pages
	// I mean 1 ... 10, 12, 13 .. 100
	// $first_link_in_the_middle is 10
	// $last_link_in_the_middle is 13
	$first_link_in_the_middle = $current_page - floor( $links_in_the_middle_minus_1/2 );
	$last_link_in_the_middle = $current_page + ceil( $links_in_the_middle_minus_1/2 );

	// some calculations with $first_link_in_the_middle and $last_link_in_the_middle
	if( $first_link_in_the_middle <= 0 ) $first_link_in_the_middle = 1;
	if( ( $last_link_in_the_middle - $first_link_in_the_middle ) != $links_in_the_middle_minus_1 ) { $last_link_in_the_middle = $first_link_in_the_middle + $links_in_the_middle_minus_1; }
	if( $last_link_in_the_middle > $max_page ) { $first_link_in_the_middle = $max_page - $links_in_the_middle_minus_1; $last_link_in_the_middle = (int) $max_page; }
	if( $first_link_in_the_middle <= 0 ) $first_link_in_the_middle = 1;

	// begin to generate HTML of the pagination
	$pagination = '';

	// when to display "..." and the first page before it
	if ($first_link_in_the_middle >= 3 && $links_in_the_middle < $max_page) {
		$pagination.= '1';

		if( $first_link_in_the_middle != 2 )
			$pagination .= '...';

	}

	// arrow left (previous page)
	if ($current_page != 1)
		$pagination.= 'Prev';


	// loop page links in the middle between "..." and "..."
	for($i = $first_link_in_the_middle; $i <= $last_link_in_the_middle; $i++) {
		if($i == $current_page) {
			$pagination.= ''.$i.'';
		} else {
			$pagination .= ''.$i.'';
		}
	}

	// arrow right (next page)
	if ($current_page != $last_link_in_the_middle )
		$pagination.= 'Next';


	// when to display "..." and the last page after it
	if ( $last_link_in_the_middle < $max_page ) {

		if( $last_link_in_the_middle != ($max_page-1) )
			$pagination .= '...';

		$pagination .= ''. $max_page .'';
	}

	// end HTML
	$pagination.= "\n";

	// haha, this is our load more posts link
	if( $current_page < $max_page )
		$pagination.= 'More posts';

	// replace first page before printing it
	echo str_replace(array("/page/1?", "/page/1\""), array("?", "\""), $pagination);
}