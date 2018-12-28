<?php
/**
 * Including all required lib files in the theme
 */
require_once( dirname(__FILE__) . '/lib/one-site-options.php');
require_once( dirname(__FILE__) . '/lib/one-frontpage-options.php');
require_once( dirname(__FILE__) . '/lib/team-functions.php');
require_once( dirname(__FILE__) . '/lib/gallery-functions.php');
require_once( dirname(__FILE__) . '/lib/wp_bootstrap_navwalker.php');
require_once( dirname(__FILE__) . '/lib/slider-functions-repeatablefields.php');
require_once( dirname(__FILE__) . '/lib/aq_resizer.php');
//equire_once( dirname(__FILE__) . '/lib/wp-bootstrap-navwalker.php'); // Not using today, but might need in near future.
require_once( dirname(__FILE__) . '/lib/tgm-plugin-activation/class-tgm-plugin-activation.php');

function cws_multitheme_register_required_plugins() {
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'CMB2',
            'slug'      => 'cmb2',
            'required'  => true,
        ),
        array(
            'name'      => 'CMB2 Typography',
            'slug'      => 'cmb2-typography-master',
            'required'  => true,
        ),
    );

    $config = array(
        'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with
        // the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.

    );

    tgmpa( $plugins, $config );
}

/** Including all required style files in the theme **/
function oneConfluence_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1', 'all' );
    wp_register_style('fotorama', get_template_directory_uri() .'/css/fotorama.css', array(), '1', 'all' );
    wp_register_style('font-awesome.min', get_template_directory_uri() .'/css/font-awesome.min.css', array(), null, 'all' );
    wp_register_style('owl-carousel', get_template_directory_uri() .'/css/owl.carousel.css', array(), null, 'all' );
    wp_register_style('mfp-css', get_template_directory_uri() .'/css/magnific-popup.css', array(), null, 'all' );
    wp_register_style('flickity-css', get_template_directory_uri() .'/css/flickity.min.css', array(), null, 'all' );
    wp_register_style('styles', get_stylesheet_uri(), array(), '2.7.0','all' );
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'owl-carousel' );
    wp_enqueue_style( 'fotorama' );
    wp_enqueue_style( 'font-awesome.min' );
    wp_enqueue_style( 'mfp-css' );
    wp_enqueue_style( 'flickity-css' );
    wp_enqueue_style( 'styles' );
    /** Google fonts-opensans **/
    wp_enqueue_style('one-opensans', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300,400italic');
    wp_enqueue_style('one-anton', '//fonts.googleapis.com/css?family=Anton:400,600,700,800');
    wp_enqueue_style('londrina', '//fonts.googleapis.com/css?family=Londrina+Outline');
}


add_action('wp_enqueue_scripts', 'oneConfluence_styles');

/** Include all required javascript files in the theme **/
function oneConfluence_scripts() {
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.custom.79639.js', array('jquery'));
    wp_enqueue_script('scrollReveal', get_template_directory_uri() . '/js/scrollReveal.js', array('jquery'), '', true);
    wp_enqueue_script('ba-cond', get_template_directory_uri() . '/js/jquery.ba-cond.min.js', array('jquery'), '', true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '1.0.0', true );
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );
    wp_enqueue_script('nav', get_template_directory_uri() . '/js/jquery.nav.js', array('jquery'), '', true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array('jquery'), '', true);
    wp_enqueue_script('sticky', get_template_directory_uri() . '/js/sticky.js', array('jquery', 'waypoints'), '', true);
    wp_enqueue_script( 'grayscale', get_template_directory_uri() . '/js/jquery.gray.min.js');
    wp_enqueue_script('mfp', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('flickity', get_template_directory_uri() . '/js/flickity.pkgd.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery','imagesloaded'), '1.0.0', true );
    wp_enqueue_script('settings', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true);

     /** Easing javascript file **/
    wp_enqueue_script('oneConfluence-easing', 'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array('jquery'), '', true);
    /** scrollmagic.js */
    wp_enqueue_script('greensock', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js', array('jquery'), '', true);
    wp_enqueue_script('scrollmagic-min', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js', array('jquery'), '', true);
    wp_enqueue_script('animation', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array('jquery'), '', true);
    //wp_enqueue_script('scrollmagic-debug', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'oneConfluence_scripts');

//FUNCTION TO GET GOOGLE FONTS
    function setup_google_fonts(){
        $customFontData = one_get_option('typography');
         return $customFontData['font-family'];
    }
    function setup_custom_font_data(){

        $customFontData = one_get_option('typography');
        return $customFontData;
    }

function one_confluence_get_wysiwyg_output( $meta_key, $post_id = 2 ) {
    global $wp_embed;

    $post_id = $post_id ? $post_id : get_the_id();

    $content = get_post_meta( $post_id, $meta_key, 1 );
    $content = $wp_embed->autoembed( $content );
    $content = $wp_embed->run_shortcode( $content );
    //$content = wpautop( $content );
    $content = do_shortcode( $content );

    return $content;
};




//Creating Custom Post types for the homepage slider
function setup_slides_cpt(){
    $labels = array(
        'name' => _x('slides', 'post type general name'),
        'singular_name' => _x('Slide', 'post type singular name'),
        'add_new' => _x('Add New', 'slide'),
        'add_new_item' => __('Add New Slide'),
        'edit_item' => __('Edit Slide'),
        'new_item' => __('New Slide'),
        'all_items' => __('All Slides'),
        'view_item' => __('View Slide'),
        'search_items' => __('Search Slides'),
        'not_found' => __('No Slides Found'),
        'not_found_in_trash' => __('No Slides found in the trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Slides'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'The homepage slides',
        'rewrite' => array('slug' => 'slides'),
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'thumbnail', 'excerpt', 'custom-fields'),
        'has_archive' => true,
        'taxonomies' => array(''),
        'menu_icon' => 'dashicons-images-alt2',
    );
    register_post_type('slides', $args);
}
add_action('init', 'setup_slides_cpt');

/** OneConfluence Theme Setup **/
function oneConfluence_setup() {
    add_theme_support('post-thumbnails');
    add_image_size('post_thumbnail', 600, 250, true);
    add_image_size('post_thumbnail_1', 70, 70, true);
    add_image_size( 'gallery-thumb', 186, 318, true );
    add_theme_support('automatic-feed-links');

// Register menus

    register_nav_menus(array(
            'frontpage-menu' => __('Front Page Menu', 'one-confluence'),
            'frontpage-right-menu' => __('Front Page Right Menu', 'one-confluence'),
            'frontpage-mobile-menu' => __('Mobile Menu', 'one-confluence'),
            'blog-page-menu' => __('Blog and Post Menu', 'one-confluence'),
        )
    );
}

add_action('after_setup_theme', 'oneConfluence_setup');

function one_front_nav() {
    if (function_exists('wp_nav_menu'))
        wp_nav_menu(array(
            'theme_location' => 'frontpage-menu',
            'menu_class' => 'nav navbar-nav navbar-left',
            'menu_id' => 'one_menu',
            'container' => '',
            'container_class' => '',
            //'fallback_cb' => 'one_front_nav_fallback',  Removed fallback because we changed directions so many times and this is so specific that I don't see there ever being a fallback
            'walker' => new wp_bootstrap_navwalker()));
}

function one_front_nav_two() {
    if (function_exists('wp_nav_menu'))
        wp_nav_menu(array(
            'theme_location' => 'blog-page-menu',
            'menu_class' => 'nav navbar-nav navbar-left',
            'menu_id' => 'one_menu',
            'container' => '',
            'container_class' => '',
            //'fallback_cb' => 'one_front_nav_fallback',  Removed fallback because we changed directions so many times and this is so specific that I don't see there ever being a fallback
            'walker' => new wp_bootstrap_navwalker()));
}

function one_right_nav() {
    if (function_exists('wp_nav_menu'))
        wp_nav_menu(array(
            'theme_location' => 'frontpage-right-menu',
            'menu_class' => 'nav navbar-nav navbar-right dropline2 clearfix',
            'menu_id' => 'one_menu2',
            'container' => '',
            'container_class' => '',
            //'fallback_cb' => 'one_front_nav_fallback',  Removed fallback because we changed directions so many times and this is so specific that I don't see there ever being a fallback
            'walker' => new wp_bootstrap_navwalker()));
}

function one_mobile_nav() {
    if (function_exists('wp_nav_menu'))
        wp_nav_menu(array(
            'theme_location' => 'frontpage-mobile-menu',
            'menu_class' => 'nav navbar-nav',
            'menu_id' => 'one_menu_mobile',
            'container' => 'false',
            'container_class' => '',
            'depth' => 2,
            //'fallback_cb' => 'one_front_nav_fallback',  Removed fallback because we changed directions so many times and this is so specific that I don't see there ever being a fallback
            'walker' => new wp_bootstrap_navwalker()));
}

/**
 * Set the content width based on the theme's design and stylesheet.
 * Used to set the width of images and content. Should be equal to the width the theme
 * is designed for, generally via the style.css stylesheet.
 */
if (!isset($content_width))
    $content_width = 590; //This too was messed up and not being used in this version.  go back to version 2 or 3 to see this.

/** Pagination - This is not used in this version **/

//Creating Custom Post types for Team
function setup_team_cpt(){
    $labels = array(
        'name' => _x('team', 'post type general name'),
        'singular_name' => _x('team', 'post type singular name'),
        'add_new' => _x('Add New', 'Team'),
        'add_new_item' => __('Add New Team'),
        'edit_item' => __('Edit Team'),
        'new_item' => __('New Team'),
        'all_items' => __('All Team'),
        'view_item' => __('View Team'),
        'search_items' => __('Search Team'),
        'not_found' => __('No Team Found'),
        'not_found_in_trash' => __('No Team found in the trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Team'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'The PKS Team',
        'rewrite' => array('slug' => 'team'),
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),
        'has_archive' => true,
        'taxonomies' => array(''),
        'menu_icon' => 'dashicons-welcome-write-blog',
    );
    register_post_type('team', $args);
}
add_action('init', 'setup_team_cpt');

//Creating Custom Post types for Gallery
function setup_gallery_cpt(){
    $labels = array(
        'name' => _x('gallery', 'post type general name'),
        'singular_name' => _x('gallery', 'post type singular name'),
        'add_new' => _x('Add New', 'Gallery'),
        'add_new_item' => __('Add New Gallery'),
        'edit_item' => __('Edit Gallery'),
        'new_item' => __('New Gallery'),
        'all_items' => __('All galleries'),
        'view_item' => __('View Gallery'),
        'search_items' => __('Search galleries'),
        'not_found' => __('No Gallery Found'),
        'not_found_in_trash' => __('No Gallery found in the trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Gallery'
    );
    $args = array(
        'labels' => $labels,
        'description' => 'PKS Galleries',
        'rewrite' => array('slug' => 'gallery'),
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'custom-fields'),
        'has_archive' => true,
        'taxonomies' => array(''),
        'menu_icon' => 'dashicons-welcome-write-blog',
    );
    register_post_type('gallery', $args);
}
add_action('init', 'setup_gallery_cpt');


//Trm excerpt - keeping this in, but currently not using it.  May want to use this so that copy doesn't bleed into it's following sections.
//May want to change this up to explicitly set the excerpt length.
function oneConfluence_trim_excerpt($length) {
    global $post;
    $explicit_excerpt = $post->post_excerpt;
    if ('' == $explicit_excerpt) {
        $text = get_the_content('');
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);
    } else {
        $text = apply_filters('the_content', $explicit_excerpt);
    }
    $text = strip_shortcodes($text); // optional
    $text = strip_tags($text);
    $excerpt_length = $length;
    $words = explode(' ', $text, $excerpt_length + 1);
    if (count($words) > $excerpt_length) {
        array_pop($words);
        array_push($words, '...');
        $text = implode(' ', $words);
        $text = apply_filters('the_excerpt', $text);
    }
    return $text;
}

function disable_emojicons_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

function disable_wp_emojicons() {

    // all actions related to emojis
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

    // filter to remove TinyMCE emojis
    add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );
