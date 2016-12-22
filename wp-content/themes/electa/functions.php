<?php
/**
 * electa functions and definitions
 *
 * @package electa
 */

define( 'KAIRA_THEME_VERSION' , '1.2.4' );

if ( ! function_exists( 'kaira_setup_theme' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kaira_setup_theme() {
    
    /**
     * Set the content width based on the theme's design and stylesheet.
     */
    global $content_width;
    if ( ! isset( $content_width ) ) {
        $content_width = 900; /* pixels */
    }

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on electa, use a find and replace
	 * to change 'electa' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'electa', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support('post-thumbnails');
    if ( function_exists( 'add_image_size' ) ) {
        add_image_size('blog_standard_img', 580, 380, true );
    }
    
    // The custom header is used for the logo
    add_theme_support('custom-header', array(
        'default-image' => '',
        'width'         => 250,
        'height'        => 180,
        'flex-width' => false,
        'flex-height' => true,
        'header-text' => false,
    ));

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'electa' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'electa_custom_background_args', array(
		'default-color' => 'F6F6F6',
		'default-image' => '',
	) ) );
    
    add_theme_support( 'title-tag' );
    
    add_theme_support( 'woocommerce' );
}
endif; // kaira_setup_theme
add_action( 'after_setup_theme', 'kaira_setup_theme' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function kaira_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'electa' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'kaira_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kaira_scripts() {
    if( !get_theme_mod( 'kra-body-font', false ) ) {
        wp_enqueue_style( 'albar-google-body-font-default', '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic', array(), KAIRA_THEME_VERSION );
    }
    if( !get_theme_mod( 'kra-heading-font', false ) ) {
        wp_enqueue_style( 'albar-google-heading-font-default', '//fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic', array(), KAIRA_THEME_VERSION );
    }
    wp_enqueue_style( 'electa-fontawesome', get_template_directory_uri() . '/includes/font-awesome/css/font-awesome.css', array(), '4.0.3' );
	wp_enqueue_style( 'electa-style', get_stylesheet_uri(), array(), KAIRA_THEME_VERSION );

	wp_enqueue_script( 'electa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), KAIRA_THEME_VERSION, true );
    
    if ( ( ( is_front_page() ) && ( ( get_theme_mod( 'kra-home-blocks-layout' ) == 1 ) ) ) || ( is_home() ) && ( get_theme_mod( 'kra-blog-blocks-layout' ) == 1 ) ) {
        wp_enqueue_script( 'jquery-masonry' );
        wp_enqueue_script( 'electa-masonry-custom', get_template_directory_uri() . '/js/layout-blocks.js', array('jquery'), KAIRA_THEME_VERSION, true );
    }
    
    wp_enqueue_script( 'electa-customjs', get_template_directory_uri() . '/js/custom.js', array('jquery'), KAIRA_THEME_VERSION, true );

	wp_enqueue_script( 'electa-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), KAIRA_THEME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kaira_scripts' );

/**
 * Print Electa styling settings.
 */
function kaira_custom_css_styles(){
    $custom_css = '';
    if ( get_theme_mod( 'kra-custom-css', false ) ) {
        $custom_css = get_theme_mod( 'kra-custom-css' );
    } ?>
    <style type="text/css" media="screen">
        <?php echo htmlspecialchars_decode( $custom_css ); ?>
    </style>
    <?php
}
add_action( 'wp_head', 'kaira_custom_css_styles', 11 );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

// Helper library for the theme customizer.
require get_template_directory() . '/customizer/customizer-library/customizer-library.php';

// Define options for the theme customizer.
require get_template_directory() . '/customizer/customizer-options.php';

// Output inline styles based on theme customizer selections.
require get_template_directory() . '/customizer/styles.php';

// Additional filters and actions based on theme customizer selections.
require get_template_directory() . '/customizer/mods.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Display the premium admin menu
 *
 * @action admin_menu
 */
function kaira_premium_admin_menu() {
    global $kaira_upgrade_page;
    $kaira_upgrade_page = add_theme_page( 'Electa Premium', 'Electa Premium', 'edit_theme_options', 'premium_upgrade', 'kaira_upgrade_page_render' );
}

add_action( 'admin_menu', 'kaira_premium_admin_menu' );

/**
 * Render the theme upgrade page
 */
function kaira_upgrade_page_render() {
    locate_template( 'upgrade/kaira-upgrade-page.php', true, false );
}

/**
 * Enqueue electa admin stylesheet only on upgrade page.
 */
function load_kaira_admin_style($hook) {
    global $kaira_upgrade_page;
 
    if( $hook != $kaira_upgrade_page ) 
        return;
    
    wp_enqueue_style( 'electa-admin-css', get_template_directory_uri() . '/upgrade/css/kaira-admin.css' );
}    
add_action( 'admin_enqueue_scripts', 'load_kaira_admin_style' );

/**
 * Enqueue electa custom customizer styling.
 */
function load_kaira_customizer_style() {
    wp_enqueue_style( 'electa-customizer-css', get_template_directory_uri() . '/customizer/customizer-library/css/customizer.css' );
}    
add_action( 'customize_controls_enqueue_scripts', 'load_kaira_customizer_style' );

// add category nicenames in body and post class
function kaira_add_body_home_class( $home_add_class ) {
    if ( ( ( is_front_page() ) && ( get_theme_mod( 'kra-home-blocks-layout' ) == 1 ) ) || ( ( is_home() ) && ( get_theme_mod( 'kra-blog-blocks-layout' ) == 1 ) ) ) {
        $home_add_class[] = ' body-blocks-layout';
    }
    return $home_add_class;
}
add_filter( 'body_class', 'kaira_add_body_home_class' );

/**
 * Check if Meta Slider plugin is active then add Meta Slider hoplink if slider is enabled
 */
if ( ! function_exists( 'is_plugin_active' ) )
     require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
 
if ( is_plugin_active( 'ml-slider/ml-slider.php' ) ) {
    
    function metaslider_hoplink( $link ) {
        return "https://getdpd.com/cart/hoplink/15318?referrer=9jtzbgs34v8k4c0gs";
    }
    add_filter('metaslider_hoplink', 'metaslider_hoplink', 10, 1);
    
}