<?php

// Start WooThemes Functions - Please refrain from editing this section

// Define the theme-specific key to be sent to PressTrends.
//define( 'WOO_PRESSTRENDS_THEMEKEY', 'zdmv5lp26tfbp7jcwiw51ix9sj389e712' );

// WooFramework init
require_once ( get_template_directory() . '/functions/admin-init.php' );


// Load the theme-specific files, with support for overriding via a child theme.

// $includes = array(
//     'includes/theme-options.php',       // Options panel settings and custom settings
//     'includes/theme-functions.php',     // Custom theme functions
//     'includes/theme-actions.php',       // Theme actions & user defined hooks
//     //'includes/theme-comments.php',      // Custom comments/pingback loop
//     'includes/theme-js.php',            // Load JavaScript via wp_enqueue_script
//     //'includes/sidebar-init.php',        // Initialize widgetized areas
//     //'includes/theme-widgets.php',       // Theme widgets
//     //'includes/theme-install.php',       // Theme installation
//     //'includes/theme-woocommerce.php',   // WooCommerce options
//     //'includes/theme-plugin-integrations.php'  // Plugin integrations
// );

// // allow child themes/plugins to add widgets to be loaded
// $includes = apply_filters( 'woo_includes', $includes );

// foreach ( $includes as $i ) {
//   locate_template( $i, true );
// }


// WOOCOMMERCE SETUP -------------------------------------

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// tell woocommerce not to use its style sheets
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
add_filter( 'woocommerce_enqueue_styles', '__return_false' );
add_action( 'wp_enqueue_scripts', 'mgt_dequeue_stylesandscripts', 100 );
function mgt_dequeue_stylesandscripts() {
    if ( class_exists( 'woocommerce' ) ) {
        wp_dequeue_style( 'select2' );
        wp_deregister_style( 'select2' );

        wp_dequeue_script( 'select2');
        wp_deregister_script('select2');

    } 
} 

// PRODUCT PAGE ----------------------------------------

// product image
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
add_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);

// removing the tabs
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['description'] );
    unset( $tabs['reviews'] );
    //unset( $tabs['additional_information'] );
    return $tabs;
}

remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);
remove_action( 'woocommerce_after_single_product_summary','woocommerce_output_related_products', 20, 0);
remove_action( 'woocommerce_after_single_product_summary','', 20, 0);

// customizing the product page
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_upsell_display', 15 );
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_output_related_products', 20 );

// remove 'additional information' heading
//add_filter('woocommerce_product_additional_information_heading','__return_null');


/**
 * Define image sizes
 */
function yourtheme_woocommerce_image_dimensions() {
  global $pagenow;
 
  if ( ! isset( $_GET['activated'] ) || $pagenow != 'themes.php' ) {
    return;
  }
    $catalog = array(
    'width'   => '400', // px
    'height'  => '400', // px
    'crop'    => 1    // true
  );

  $single = array(
    'width'   => '500', // px
    'height'  => '500', // px
    'crop'    => 1    // true
  );

  $thumbnail = array(
    'width'   => '120', // px
    'height'  => '120', // px
    'crop'    => 0    // false
  );

  // Image sizes
  update_option( 'shop_catalog_image_size', $catalog );     // Product category thumbs
  update_option( 'shop_single_image_size', $single );     // Single product image
  update_option( 'shop_thumbnail_image_size', $thumbnail );   // Image gallery thumbs
}

add_action( 'after_switch_theme', 'yourtheme_woocommerce_image_dimensions', 1 );

add_filter('woocommerce_product_additional_information_heading','isa_product_additional_information_heading');
function isa_product_additional_information_heading() {
  echo "<h5>";
  _e("Specifications","chroma");
  echo "</h5>";

}

// Display Price For Variable Product With Same Variations Prices
add_filter('woocommerce_available_variation', function ($value, $object = null, $variation = null) {
    if ($value['price_html'] == '') {
        $value['price_html'] = '<span class="price">' . $variation->get_price_html() . '</span>';
    }
    return $value;
}, 10, 3);

// SHOP PAGE --------------------------------------------

// removing stuff
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action( 'woocommerce_output_related_products', 20);

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

// Ensure cart contents update when products are added to the cart via AJAX
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
  ob_start();
  ?>
  <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Cart','chroma'); ?>"><?php echo _e( 'Cart ','chroma') ; echo sprintf (_n( '(%d)', '(%d)', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?></a>
  <?php
  
  $fragments['a.cart-contents'] = ob_get_clean();
  
  return $fragments;
}

// GLOBAL -------------------------------------------------------

// thumbnails
add_theme_support( 'post-thumbnails' );

// remove emoji crap
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

add_action('init', 'page_excerpt');
function page_excerpt() {
  add_post_type_support( 'page', 'excerpt' );
}

// big files
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

// hide admin bar
//show_admin_bar(false);

// to get proper large images
if ( ! isset( $content_width ) )
	$content_width = 1024;

// remove class from the_post_thumbnail
add_filter('post_thumbnail_html', 'the_post_thumbnail_remove_class');
function the_post_thumbnail_remove_class($output) {
  $output = preg_replace('/class=".*?"/', '', $output);
  return $output;
}

// add img-responsive class to images
add_filter( 'post_thumbnail_html', 'wpc_add_image_responsive_class', 10 );
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

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
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

define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);

// custom language selector
// to use call custom_language_selector(); in a template
function custom_language_selector(){
    if (function_exists('icl_get_languages')) {
        $languages = icl_get_languages('skip_missing=0&orderby=code&order=desc');           
        if(!empty($languages)){
            echo '<ul>';
                foreach($languages as $l){
                    if(!$l['active']){
                    echo '<li class="sc">
                        <a href="' . $l['url'] . '">' . strtoupper ($l['language_code']). '</a>
                    </li>';
                    }
                }
            echo '</ul>';
        }
    }
}

function wptt_add_loginout_link( $items, $args ) {
 
    if ( is_user_logged_in() ) {
        $items .= '<li><a href="'. wp_logout_url( get_permalink( woocommerce_get_page_id( 'myaccount' ) ) ) .'">Log Out</a></li>';
    } elseif ( ! is_user_logged_in() ) {
        $items .= '<li><a href="' . get_permalink( woocommerce_get_page_id( 'myaccount' ) ) . '">Log In</a></li>';
    }
 
    return $items;
 
} // wptt_add_loginout_link
add_filter( 'wp_nav_menu_footer-my-account_items', 'wptt_add_loginout_link', 10, 2 );
 

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



