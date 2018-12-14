<?php

/**
 * Including all required lib files in the theme
 */
require_once( dirname(__FILE__) . '/lib/one-site-options.php');
require_once( dirname(__FILE__) . '/lib/one-frontpage-options.php');
require_once( dirname(__FILE__) . '/lib/team-functions.php');
//require_once( dirname(__FILE__) . '/lib/aq_resizer.php');
//require_once( dirname(__FILE__) . '/lib/wp_bootstrap_navwalker.php');


/**
 * Including all required style files in the theme
 */
function one_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1', 'all' );
    wp_register_style('fotorama', get_template_directory_uri() .'/css/fotorama.css', array(), '1', 'all' );
    wp_register_style('animate',  get_template_directory_uri() .'/css/animate.css', array(), null, 'all' );
    wp_register_style('font-awesome.min', get_template_directory_uri() .'/css/font-awesome.min.css', array(), null, 'all' );
    wp_register_style('owl-carousel', get_template_directory_uri() .'/css/owl.carousel.css', array(), null, 'all' );
    wp_register_style('styles', get_stylesheet_uri(), array(), '2.7.0','all' );
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'owl-carousel' );
    wp_enqueue_style( 'animate' );
    wp_enqueue_style( 'fotorama' );
    wp_enqueue_style( 'font-awesome.min' );
    wp_enqueue_style( 'styles' );

    /**
     * Google fonts-opensans
     */
    wp_enqueue_style('one-opensans', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300,400italic');

}

add_action('wp_enqueue_scripts', 'one_styles');

/**
 * Include all required javascript files in the theme
 */
function onepage_scripts() {
    wp_enqueue_script('snap', get_template_directory_uri() . '/js/snap.svg-min.js', array('jquery'), '', true);
    wp_enqueue_script('animation', get_template_directory_uri() . '/js/animation.js', array('jquery'), '', true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.custom.79639.js', array('jquery'));
    wp_enqueue_script('scrollReveal', get_template_directory_uri() . '/js/scrollReveal.js', array('jquery'), '', true);
    wp_enqueue_script('superfish', get_template_directory_uri() . '/js/superfish.js', array('jquery'));
    wp_enqueue_script('superfish', get_template_directory_uri() . '/js/jquery.ba-cond.min.js', array('jquery'), '', true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '1.0.0', true );
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );
    wp_enqueue_script('meanmenu', get_template_directory_uri() . '/js/jquery.meanmenu.js', array('jquery'), '', true);
    wp_enqueue_script('smoothscroll', get_template_directory_uri() . '/js/smoothscroll.min.js', array('jquery'), '', true);
    wp_enqueue_script('nav', get_template_directory_uri() . '/js/jquery.nav.js', array('jquery'), '', true);
    wp_enqueue_script('settings', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true);

    /**
     * Slitslider javascript file
     */
    //wp_enqueue_script('one-page-slitslider', ONEPAGE_DIR_URI . 'assets/js/jquery.slitslider.js', array('jquery'), '', true);

    /**
     * Masonry js
     */
    //wp_enqueue_script('one-page-masonry', ONEPAGE_DIR_URI . 'assets/js/masonry.js', array('jquery'), '', true);
    /**
     * Bxslider javascript file
     */
    //wp_enqueue_script('one-page-bxslider', ONEPAGE_DIR_URI . 'assets/js/jquery.bxslider.js', array('jquery'), '', true);

    /**
     * Easing javascript file
     */
    wp_enqueue_script('onepage-easing', 'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array('jquery'), '', true);

}

add_action('wp_enqueue_scripts', 'onepage_scripts');

/**
 * One Theme setup
 */
function one_setup() {
    add_theme_support('post-thumbnails');
    add_image_size('post_thumbnail', 600, 250, true);
    add_image_size('post_thumbnail_1', 70, 70, true);
    add_theme_support('automatic-feed-links');


// Register menus

    register_nav_menus(array(
            'frontpage-menu' => __('Front Page Menu', 'one-confluence'),
            'subpage-menu' => __('Sub Page Menu', 'one-confluence')
        )
    );
    one_default_menu();
}

add_action('after_setup_theme', 'one_setup');

/**
 * function to setup default theme menu
 */
function one_default_menu() {

    $menuname = 'One Front Page Menu';
    $menulocation = 'frontpage-menu';
// Does the menu exist already?

    $menu_exists = wp_get_nav_menu_object($menuname);

// If it doesn't exist, let's create it.
    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menuname);

// Set up default One Menu links and add them to the menu.

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Home', 'one-confluence'),
            'menu-item-classes' => 'home',
            'menu-item-url' => '#page-top',
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Art', 'one-confluence'),
            'menu-item-classes' => 'art',
            'menu-item-url' => '#art',
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Science', 'one-confluence'),
            'menu-item-classes' => 'science',
            'menu-item-url' => '#science',
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Creative', 'one-confluence'),
            'menu-item-classes' => 'creative',
            'menu-item-url' => '#creative',
            'menu-item-status' => 'publish'));

        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Team', 'one-confluence'),
            'menu-item-classes' => 'team',
            'menu-item-url' => '#team',
            'menu-item-status' => 'publish'));
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Solutions', 'one-confluence'),
            'menu-item-classes' => 'solutions',
            'menu-item-url' => '#solutions',
            'menu-item-status' => 'publish'));
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title' => __('Contact', 'one-confluence'),
            'menu-item-classes' => 'contact',
            'menu-item-url' => '#contact',
            'menu-item-status' => 'publish'));

// Grab the theme locations and assign our newly-created menu
// to the OnePage Theme front Page menu location.
        if (!has_nav_menu($menulocation)) {
            $locations = get_theme_mod('nav_menu_locations');
            $locations[$menulocation] = $menu_id;
            set_theme_mod('nav_menu_locations', $locations);
        }
    }
}

// Add CLASS attributes to the first <ul> occurence in wp_page_menu
function one_add_menuclass($ulclass) {
    return preg_replace('/<ul>/', '<ul class="sf-menu">', $ulclass, 1);
}

add_filter('wp_page_menu', 'one_add_menuclass');

function one_front_nav() {
    if (function_exists('wp_nav_menu'))
        wp_nav_menu(array('theme_location' => 'frontpage-menu', 'menu_class' => 'nav navbar-nav navbar-right sf-menu sf-js-enabled sf-shadow', 'menu_id' => 'one_menu', 'container' => '', 'container_class' => '', 'fallback_cb' => 'one_front_nav_fallback'));
    else
        onepage_front_nav_fallback();
}

function one_front_nav_fallback() {
    ?><ul class="nav navbar-nav navbar-right sf-menu" id="one_menu">
    <li class="page-scroll">
        <a href="#page-top"><?php _e('Home', 'one-confluence'); ?></a>
    </li>
    <li class="page-scroll">
        <a href="#art"><?php _e('Art', 'one-confluence'); ?></a>
    </li>
    <li class="page-scroll">
        <a href="#science"><?php _e('Science', 'one-confluence'); ?></a>
    </li>
    <li class="page-scroll">
        <a href="#creative"><?php _e('Creative', 'one-confluence'); ?></a>
    </li>
    <li class="page-scroll">
        <a href="#team"><?php _e('Team', 'one-confluence'); ?></a>
    </li>
    <li class="page-scroll">
        <a href="#solutions"><?php _e('Solutions', 'one-confluence'); ?></a>
    </li>
    <li class="page-scroll">
        <a href="#contact"><?php _e('Contact', 'one-confluence'); ?></a>
    </li>
    </ul>
    <?php
}

function one_subpage_menu_nav() {
    if (function_exists('wp_nav_menu'))
        wp_nav_menu(array('theme_location' => 'subpage-menu', 'container_id' => 'menu_sub', 'menu_class' => 'nav navbar-nav navbar-right sf-menu sf-js-enabled sf-shadow', 'fallback_cb' => 'one_nav_fallback'));
    else
        one_nav_fallback();
}

function one_nav_fallback() {
    ?>
    <ul class="nav navbar-nav navbar-right sf-menu sf-js-enabled sf-shadow">
        <?php
        wp_list_pages('title_li=&show_home=1&sort_column=menu_order');
        ?>
    </ul>

    <?php
}

function one_nav_menu_items($items) {
    if (is_home()) {
        $homelink = '<li class="current_page_item">' . '<a href="' . esc_url(home_url('/')) . '">' . __('Home', 'one-confluence') . '</a></li>';
    } else {
        $homelink = '<li>' . '<a href="' . esc_url(home_url('/')) . '">' . __('Home', 'one-confluence') . '</a></li>';
    }
    $items = $homelink . $items;
    return $items;
}

add_filter('wp_list_pages', 'one_nav_menu_items');
/* ----------------------------------------------------------------------------------- */
/* Breadcrumbs Plugin
  /*----------------------------------------------------------------------------------- */

function onepage_breadcrumbs() {
    $delimiter = '&raquo;';
    $home = __('Home', 'one-confluence'); // text for the 'Home' link
    $before = '<span class="current">'; // tag before the current crumb
    $after = '</span>'; // tag after the current crumb
    echo '<div id="crumbs">';
    global $post;
    $homeLink = esc_url(home_url());
    echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
    if (is_category()) {
        global $wp_query;
        $cat_obj = $wp_query->get_queried_object();
        $thisCat = $cat_obj->term_id;
        $thisCat = get_category($thisCat);
        $parentCat = get_category($thisCat->parent);
        if ($thisCat->parent != 0)
            echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
        echo $before . __('Archive by category', 'one-confluence') . ' "' . single_cat_title('', false) . '"' . $after;
    }
    elseif (is_day()) {
        echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
        echo '<a href="' . esc_url(get_month_link(get_the_time('Y'), get_the_time('m'))) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
        echo $before . get_the_time('d') . $after;
    } elseif (is_month()) {
        echo '<a href="' . esc_url(get_year_link(get_the_time('Y'))) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
        echo $before . get_the_time('F') . $after;
    } elseif (is_year()) {
        echo $before . get_the_time('Y') . $after;
    } elseif (is_single() && !is_attachment()) {
        if (get_post_type() != 'post') {
            $post_type = get_post_type_object(get_post_type());
            $slug = $post_type->rewrite;
            echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } else {
            $cat = get_the_category();
            $cat = $cat[0];
            echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
            echo $before . get_the_title() . $after;
        }
    } elseif (is_attachment()) {
        $parent = get_post($post->post_parent);
        $cat = get_the_category($parent->ID);
        $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo '<a href="' . esc_url(get_permalink($parent)) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
    } elseif (is_page() && !$post->post_parent) {
        echo $before . get_the_title() . $after;
    } elseif (is_page() && $post->post_parent) {
        $parent_id = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<a href="' . esc_url(get_permalink($page->ID)) . '">' . get_the_title($page->ID) . '</a>';
            $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb)
            echo $crumb . ' ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
    } elseif (is_search()) {
        echo $before . __('Search results for', 'one-confluence') . ' "' . get_search_query() . '"' . $after;
    } elseif (is_tag()) {
        echo $before . __('Posts tagged ', 'one-confluence') . '"' . single_tag_title('', false) . '"' . $after;
    } elseif (is_author()) {
        global $author;
        $userdata = get_userdata($author);
        echo $before . __('Articles posted by ', 'one-confluence') . $userdata->display_name . $after;
    } elseif (is_404()) {
        echo $before . __('Error 404', 'one-confluence') . $after;
    }
    if (get_query_var('paged')) {
        if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
            echo ' (';
        echo __('Page', 'one-confluence') . ' ' . get_query_var('paged');
        if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author())
            echo ')';
    }
    echo '</div>';
}

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * Used to set the width of images and content. Should be equal to the width the theme
 * is designed for, generally via the style.css stylesheet.
 */
if (!isset($content_width))
    $content_width = 590;


/**
 * Pagination
 *
 */
function one_pagination($pages = '', $range = 2) {
    $showitems = ($range * 2) + 1;
    global $paged;
    if (empty($paged))
        $paged = 1;
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (1 != $pages) {
        echo "<ul class='paging'>";
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages)
            echo "<li><a href='" . get_pagenum_link(1) . "'>&laquo;</a></li>";
        if ($paged > 1 && $showitems < $pages)
            echo "<li><a href='" . get_pagenum_link($paged - 1) . "'>&lsaquo;</a></li>";
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems )) {
                echo ($paged == $i) ? "<li><a href='" . get_pagenum_link($i) . "' class='current' >" . $i . "</a></li>" : "<li><a href='" . get_pagenum_link($i) . "' class='inactive' >" . $i . "</a></li>";
            }
        }
        if ($paged < $pages && $showitems < $pages)
            echo "<li><a href='" . get_pagenum_link($paged + 1) . "'>&rsaquo;</a></li>";
        if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages)
            echo "<li><a href='" . get_pagenum_link($pages) . "'>&raquo;</a></li>";
        echo "</ul>\n";
    }
}

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


//Trm excerpt
function onepage_trim_excerpt($length) {
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
