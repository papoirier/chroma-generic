<?php

/*-----------------------------------------------------------------------------------*/
/* Start WooThemes Functions - Please refrain from editing this section */
/*-----------------------------------------------------------------------------------*/

// Define the theme-specific key to be sent to PressTrends.
define( 'WOO_PRESSTRENDS_THEMEKEY', 'zdmv5lp26tfbp7jcwiw51ix9sj389e712' );

// WooFramework init
require_once ( get_template_directory() . '/functions/admin-init.php' );

/*-----------------------------------------------------------------------------------*/
/* Load the theme-specific files, with support for overriding via a child theme.
/*-----------------------------------------------------------------------------------*/

$includes = array(
        'includes/theme-options.php',       // Options panel settings and custom settings
        'includes/theme-functions.php',     // Custom theme functions
        'includes/theme-actions.php',       // Theme actions & user defined hooks
        'includes/theme-comments.php',      // Custom comments/pingback loop
        'includes/theme-js.php',            // Load JavaScript via wp_enqueue_script
        'includes/sidebar-init.php',        // Initialize widgetized areas
        'includes/theme-widgets.php',       // Theme widgets
        'includes/theme-install.php',       // Theme installation
        'includes/theme-woocommerce.php',   // WooCommerce options
        'includes/theme-plugin-integrations.php'  // Plugin integrations
        );

//Allow child themes/plugins to add widgets to be loaded.
$includes = apply_filters( 'woo_includes', $includes );

foreach ( $includes as $i ) {
  locate_template( $i, true );
}

// WOOCOMMERCE SETUP -------------------------------------

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// telling woocommerce to use my hooks
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

// tell woocommerce not to use its style sheets
add_filter( 'woocommerce_enqueue_styles', '__return_false' );


// PRODUCT PAGE ----------------------------------------

// product image
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);

// removing the 'reviews' tab
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['reviews'] );
    return $tabs;
}

// removing the breadcrumb trail
remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);


// SHOP PAGE --------------------------------------------

// removing the text enumerating how many items are in the shop
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

function remove_loop_button(){
  remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
}
add_action('init','remove_loop_button');


// CART --------------------------------------------------

// removing the price range
add_filter('woocommerce_variable_price_html','custom_from',10);
add_filter('woocommerce_grouped_price_html','custom_from',10);
add_filter('woocommerce_variable_sale_price_html','custom_from',10);
function custom_from($price){
    return false;
}

// GLOBAL ------------------------------------------------------

// PAGES -------------------------------------------------------

add_action('init', 'page_excerpt');
function page_excerpt() {
  add_post_type_support( 'page', 'excerpt' );
}

// big files
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

// hide admin bar
show_admin_bar(false);

add_theme_support( 'post-thumbnails' );

function print_attributes($name, $count) {
  //echo 'id="'.$name.'" class="full p-'.$count.'"';
}

// to get proper large images
if ( ! isset( $content_width ) )
	$content_width = 1024;

// removing p tags
//remove_filter( 'the_content', 'wpautop' );

// remove class from the_post_thumbnail
add_filter('post_thumbnail_html', 'the_post_thumbnail_remove_class');
function the_post_thumbnail_remove_class($output) {
        $output = preg_replace('/class=".*?"/', '', $output);
        return $output;
}

// add img-responsive class to images
add_filter( 'post_thumbnail_html', 'wpc_add_image_responsive_class', 10 );
//add_filter( 'the_content','wpc_add_image_responsive_class',10 );  
function wpc_add_image_responsive_class( $html ){  
  $classes = 'img-responsive'; // separated by spaces, e.g. 'img image-link'  
  
  // check if there are already classes assigned to the anchor  
  if ( preg_match('/<img.*? class="/', $html) ) {  
    $html = preg_replace('/(<img.*? class=" .*?)(".*?\="">)/', '$1 ' . $classes . ' $2', $html);  
  } else {  
    $html = preg_replace('/(<img.*?)(\>)/', '$1 class="' . $classes . '" $2', $html);  
  }  
  // remove dimensions from images,, does not need it!  
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );  
  return $html;  
}  



// LANGUAGE SWITCHER ------------------------------------

function icl_post_languages(){
  $languages = icl_get_languages('skip_missing=1');
  if(1 < count($languages)){
    foreach($languages as $l){
      if(!$l['active']) $langs[] = '<a href="'.$l['url'].'">'.$l['native_name'].'</a>';
    }
    echo join(', ', $langs);
  }
}



// SCRIPTS ------------------------------------------------------

add_action( 'wp_enqueue_scripts', 'bootstrap_script' );
function bootstrap_script() {
	wp_enqueue_script( 
		'bootstrap', 
		get_stylesheet_directory_uri() . '/js/bootstrap.min.js', 
		array('jquery'), 
		'1.0.0', 
		true 
	);
}

add_action( 'wp_enqueue_scripts', 'custom_script' );
function custom_script() {
	wp_enqueue_script( 
		'custo', 
		get_stylesheet_directory_uri() . '/js/scripts.js', 
		array('jquery'), 
		'1.0.0', 
		true 
	);
}



