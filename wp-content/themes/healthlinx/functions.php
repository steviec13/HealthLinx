<?php
/**
 * healthlinx functions related to defining constants, adding files and WordPress core functionality.
 *
 * @package healthlinx
 * @subpackage healthlinx
 * @since healthlinx 0.1
 */

add_action( 'after_setup_theme', 'healthlinx_setup' );
add_filter( 'use_default_gallery_style', '__return_false' );

//Post thumbnails
add_theme_support( 'post-thumbnails' );

if ( ! function_exists( 'healthlinx_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */
function healthlinx_setup() {
   global $content_width;
   /**
    * Set the content width based on the theme's design and stylesheet.
    */
   if ( ! isset( $content_width ) )
      $content_width = 710; /* pixels */

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'healthlinx', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	//Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

   // Cropping the images to different sizes to be used in the theme
	add_image_size( 'healthlinx-featured-blog-large', 710, 300, true );
	add_image_size( 'healthlinx-featured-blog-small', 230, 230, true );
	add_image_size( 'healthlinx-portfolio-image', 330, 330, true );

	// Registering navigation menus.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'healthlinx' ),
		'footer' => __( 'Second Column Footer Menu', 'healthlinx' ),
		'secondary-column-footer' => __( 'First Column Footer Menu', 'healthlinx' ),
		'sidebar-menu' => __( 'Sidebar Menu', 'healthlinx' )
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'healthlinx_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Adding excerpt option box for pages as well
	add_post_type_support( 'page', 'excerpt' );
}
endif; // ample_setup

/**
 * Register widget area.
 *
 */
// require get_template_directory() . '/inc/widgets/widgets.php';

/**
 * Enqueue scripts and styles.
 */
// require get_template_directory() . '/inc/functions.php';

/**
 * Functions related to header.
 */
// require get_template_directory() . '/inc/header-functions.php';

/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

/**
 * Add meta Box
 */
// require get_template_directory() . '/inc/admin/meta-boxes.php';

/**
 * Add Customizer
 */
// require_once( get_template_directory() . '/inc/customizer.php' );

/**
 * Adding Admin Menu for theme options
 */
add_action( 'admin_menu', 'healthlinx_theme_options_menu' );

function healthlinx_theme_options_menu() {

   add_theme_page( 'Theme Options', 'Theme Options', 'manage_options', 'healthlinx-theme-options', 'healthlinx_theme_options' );

}
function healthlinx_theme_options() {

   if ( !current_user_can( 'manage_options' ) )  {
      wp_die( __( 'You do not have sufficient permissions to access this page.', 'healthlinx' ) );
   } ?>

   <h1><?php _e( 'Theme Options', 'healthlinx' ); ?></h1>
   <?php
   printf( __('<p style="font-size: 16px; max-width: 800px";>As our themes are hosted on WordPress repository, we need to follow the WordPress theme guidelines and as per the new guidelines we have migrated all our Theme Options to Customizer.</p><p style="font-size: 16px; max-width: 800px";>We too think this is a better move in the long run. All the options are unchanged, it is just that they are moved to customizer. So, please use this <a href="%1$s">link</a> to customize your site. If you have any issues then do let us know via our <a href="%2$s">Contact form</a></p>', 'healthlinx'),
      esc_url(admin_url( 'customize.php' ) ),
      esc_url('https:////www.healthlinx.com')
   );
}
/**
 * Proper way to enqueue scripts and styles
 */
function healthlinx_theme_scripts() {
	wp_enqueue_script( 'script.js', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
	wp_enqueue_script( 'MaskedPassword.js', get_template_directory_uri() . '/js/MaskedPassword.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery.bxSlider.js', get_template_directory_uri() . '/js/jquery.bxSlider.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'healthlinx_theme_scripts' );

/**
 * Show child pages
 */
function wpb_list_child_pages() { 
	global $post; 
	if ( is_page() && $post->post_parent )
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
	else
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
	if ( $childpages ) {
		$string = '<ul>' . $childpages . '</ul>';
	}
	return $string;
}
add_shortcode('wpb_childpages', 'wpb_list_child_pages');

// Limit excerpt length
function custom_excerpt_length( $length ) {
    return 5;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Excerpt length, general
function get_excerpt($count){
	$permalink = get_permalink($post->ID);
	$excerpt = get_the_content();
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $count);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = $excerpt.'...<br /><br /><a href="'.$permalink.'">Read more</a>';
	return $excerpt;
}

// Exclude post categories
function exclude_post_categories($excl='', $spacer=' ') {
  $categories = get_the_category($post->ID);
  if (!empty($categories)) {
    $exclude = $excl;
    $exclude = explode(",", $exclude);
    $thecount = count(get_the_category()) - count($exclude);
    foreach ($categories as $cat) {
      $html = '';
      if (!in_array($cat->cat_ID, $exclude)) {
        $html .= '<a href="' . get_category_link($cat->cat_ID) . '" ';
        $html .= 'title="' . $cat->cat_name . '">' . $cat->cat_name . '</a>';
        if ($thecount > 1) {
          $html .= $spacer;
        }
        $thecount--;
        echo $html;
      }
    }
  }
function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('cat','-964,-967,-971,-973,-975,-977,-980,-987,-989,-992,-1003');
    }
    return $query;
}

add_filter('pre_get_posts','SearchFilter');
}