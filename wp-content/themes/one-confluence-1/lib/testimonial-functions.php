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

add_action( 'cmb2_admin_init', 'register_testimonial_metabox' );
/**
 * Hook in and add a testimonial metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function register_testimonial_metabox() {

 // Start with an underscore to hide fields from custom fields list
    $prefix = '_testimonial_'; //note, you can use anything you’d like here

/**
 * Start field groups here
 */

// This first field group tells WordPress where to put the fields.  In the example below, it is set to show up only on Post_ID=10

$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Testimonials Custom Fields', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on'      => array( 'id' => array( 2, ) ), // Specific post IDs to display this metabox
		) );


$cmb_demo->add_field( array(
		'name'       => __( 'Author', 'cmb2' ),
		'desc'       => __( 'Who is the testimonial from?', 'cmb2' ),
		'id'         => $prefix . 'author',
		'type'       => 'text',
		//'show_on_cb' => 'yourprefix_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
		// 'column'          => true, // Display field value in the admin post-listing columns
	) );

$cmb_demo->add_field( array(
	'name'    => __( 'Testimonial', 'cmb2' ),
	'desc'    => __( 'add the testimonial here', 'cmb2' ),
	'id'      => $prefix . 'testimonial', //Note, I renamed this to be more appropriate
	'type'    => 'wysiwyg',
	'options' => array( 'textarea_rows' => 5, ),
	) );

	$cmb_demo->add_field( array(
	'name' => __( 'Author Image', 'cmb2' ),
	'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
	'id'   => $prefix . 'image', //Note, I renamed this to be more appropriate
	'type' => 'file',
	) );
}