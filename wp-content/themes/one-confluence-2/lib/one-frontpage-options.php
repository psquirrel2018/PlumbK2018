<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
    require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
    require_once dirname( __FILE__ ) . '/CMB2/init.php';
}

/**
 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
 *
 * @param  CMB2 object $cmb CMB2 object
 *
 * @return bool             True if metabox should show
 */
function one_show_if_front_page( $cmb ) {
    // Don't show this metabox if it's not the front page template
    if ( $cmb->object_id !== get_option( 'page_on_front' ) ) {
        return false;
    }
    return true;
}

add_action( 'cmb2_admin_init', 'one_register_frontpage_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function one_register_frontpage_metabox() {
    $prefix = '_one_front_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $cmb_demo = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => __( 'Front Page Featured Blocks', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'show_on_cb' => 'kira_front_show_if_front_page', // function should return a bool value
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // true to keep the metabox closed by default
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Post ID for the Team Carousel', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'team_id',
        'type' => 'text',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );


    $cmb_demo->add_field( array(
        'name' => __( 'Block One: Top Title', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'one_top',
        'type' => 'text',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block One: Image', 'cmb2' ),
        'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
        'id'   => $prefix . 'one_image',
        'type' => 'file',
    ) );

    $cmb_demo->add_field( array(
        'name'    => __( 'One wysiwyg', 'cmb2' ),
        'desc'    => __( 'field description (optional)', 'cmb2' ),
        'id'      => $prefix . 'one_wysiwyg',
        'type'    => 'wysiwyg',
        'options' => array( 'textarea_rows' => 2, ),
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block One: Bottom Title', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'one_bottom',
        'type' => 'text',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block One: URL', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'one_url',
        'type' => 'text_url',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block two: Top Title', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'two_top',
        'type' => 'text',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block two: Header Image', 'cmb2' ),
        'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
        'id'   => $prefix . 'two_header',
        'type' => 'file',
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block two: Image', 'cmb2' ),
        'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
        'id'   => $prefix . 'two_image',
        'type' => 'file',
    ) );

    $cmb_demo->add_field( array(
        'name'    => __( 'two wysiwyg', 'cmb2' ),
        'desc'    => __( 'field description (optional)', 'cmb2' ),
        'id'      => $prefix . 'two_wysiwyg',
        'type'    => 'wysiwyg',
        'options' => array( 'textarea_rows' => 2, ),
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block two: Bottom Title', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'two_bottom',
        'type' => 'text',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block Two: URL', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'two_url',
        'type' => 'text_url',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block Three: Header Image', 'cmb2' ),
        'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
        'id'   => $prefix . 'three_header',
        'type' => 'file',
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block three: Top Title', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'three_top',
        'type' => 'text',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block three: Image', 'cmb2' ),
        'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
        'id'   => $prefix . 'three_image',
        'type' => 'file',
    ) );

    $cmb_demo->add_field( array(
        'name'    => __( 'three wysiwyg', 'cmb2' ),
        'desc'    => __( 'field description (optional)', 'cmb2' ),
        'id'      => $prefix . 'three_wysiwyg',
        'type'    => 'wysiwyg',
        'options' => array( 'textarea_rows' => 2, ),
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block three: Bottom Title', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'three_bottom',
        'type' => 'text',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block three: URL', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'three_url',
        'type' => 'text_url',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block Four: Header Image', 'cmb2' ),
        'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
        'id'   => $prefix . 'four_header',
        'type' => 'file',
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block four: Top Title', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'four_top',
        'type' => 'text',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block four: Image', 'cmb2' ),
        'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
        'id'   => $prefix . 'four_image',
        'type' => 'file',
    ) );

    $cmb_demo->add_field( array(
        'name'    => __( 'Four wysiwyg', 'cmb2' ),
        'desc'    => __( 'field description (optional)', 'cmb2' ),
        'id'      => $prefix . 'four_wysiwyg',
        'type'    => 'wysiwyg',
        'options' => array( 'textarea_rows' => 2, ),
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block four: Bottom Title', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'four_bottom',
        'type' => 'text',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block four: URL', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'four_url',
        'type' => 'text_url',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block Five: Header Image', 'cmb2' ),
        'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
        'id'   => $prefix . 'five_header',
        'type' => 'file',
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block five: Top Title', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'five_top',
        'type' => 'text',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block five: Image', 'cmb2' ),
        'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
        'id'   => $prefix . 'five_image',
        'type' => 'file',
    ) );

    $cmb_demo->add_field( array(
        'name'    => __( 'five wysiwyg', 'cmb2' ),
        'desc'    => __( 'field description (optional)', 'cmb2' ),
        'id'      => $prefix . 'five_wysiwyg',
        'type'    => 'wysiwyg',
        'options' => array( 'textarea_rows' => 2, ),
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block five: Bottom Title', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'five_bottom',
        'type' => 'text',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block five: URL', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'five_url',
        'type' => 'text_url',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block Six: Header Image', 'cmb2' ),
        'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
        'id'   => $prefix . 'six_header',
        'type' => 'file',
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block Six: Top Title', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'six_top',
        'type' => 'text',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block six: Image', 'cmb2' ),
        'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
        'id'   => $prefix . 'six_image',
        'type' => 'file',
    ) );

    $cmb_demo->add_field( array(
        'name'    => __( 'Six wysiwyg', 'cmb2' ),
        'desc'    => __( 'field description (optional)', 'cmb2' ),
        'id'      => $prefix . 'six_wysiwyg',
        'type'    => 'wysiwyg',
        'options' => array( 'textarea_rows' => 2, ),
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block Six: Bottom Title', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'six_bottom',
        'type' => 'text',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );

    $cmb_demo->add_field( array(
        'name' => __( 'Block Six: URL', 'cmb2' ),
        'desc' => __( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'six_url',
        'type' => 'text_url',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );


    /*$cmb_demo->add_field( array(
         'name'    => __( 'Footer wysiwyg left', 'cmb2' ),
         'desc'    => __( 'address, phone number...', 'cmb2' ),
         'id'      => $prefix . 'footer_left',
         'type'    => 'wysiwyg',
         'options' => array( 'textarea_rows' => 5, ),
     ) );

    $cmb_demo->add_field( array(
        'name'    => __( 'Footer wysiwyg Right', 'cmb2' ),
        'desc'    => __( 'address, phone number...', 'cmb2' ),
        'id'      => $prefix . 'footer_right',
        'type'    => 'wysiwyg',
        'options' => array( 'textarea_rows' => 5, ),
    ) );

     $cmb_demo->add_field( array(
         'name' => __( 'Footer Logo', 'cmb2' ),
         'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
         'id'   => $prefix . 'footer_logo',
         'type' => 'file',
     ) );*/

}