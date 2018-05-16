<?php
/*
Plugin Name: Site Instructions
Plugin URL: http://confluence.solutions
Description: place custom instructions on how to use the site/configure the site.
Version: 1.0
Author: Scott B. Taylor
Author URI: http://confluence.solutions
*/

/**
 * Remove the default welcome dashboard message and and create a custom one that displays set up instructions
 *
 * @access      public
 * @since       1.0
 * @return      void
 */
/*function oneConfluence_welcome_panel() { ?>

    <script type="text/javascript">
        // Hide default welcome message
        jQuery(document).ready( function($) {
            $('div.welcome-panel-content').hide();
        });
    </script>

    <div class="custom-welcome-panel-content">
        <h3><?php _e( 'Please read these instructions on how to set up this site.' ); ?></h3>
        <p class="about-description"><?php _e( 'These instructions will go over how to add a logo, add images, add copy, set up the team section, etc.' ); ?></p>
        <div class="welcome-panel-column-container">
            <div class="welcome-panel-column">
                <h4><?php _e( "Let's Get Started" ); ?></h4>
                <!--<a class="button button-primary button-hero load-customize hide-if-no-customize" href="http://your-website.com"><?php //_e( 'Call me maybe !' ); ?></a>-->
                <p class="hide-if-no-customize"><?php printf( __( 'or, <a href="%s">edit your site settings</a>' ), admin_url( 'admin.php?page=pks_options' ) ); ?></p>
                <p>This is where the logo gets added.</p>
            </div><!-- .welcome-panel-column -->
            <div class="welcome-panel-column">
                <h4><?php _e( 'Next Steps' ); ?></h4>
                <ul>
                    <?php if ( 'page' == get_option( 'show_on_front' ) && ! get_option( 'page_for_posts' ) ) : ?>
                        <li><?php printf( '<a href="%s" class="welcome-icon welcome-edit-page">' . __( 'Edit your front page' ) . '</a>', get_edit_post_link( get_option( 'page_on_front' ) ) ); ?></li>

                    <?php endif; ?>
                    <li><?php printf( '<a href="%s" class="welcome-icon welcome-view-site">' . __( 'View your site' ) . '</a>', home_url( '/' ) ); ?></li>
                </ul>
            </div><!-- .welcome-panel-column -->
            <div class="welcome-panel-column welcome-panel-last">

            </div><!-- .welcome-panel-column welcome-panel-last -->
        </div><!-- .welcome-panel-column-container -->
    <div><!-- .custom-welcome-panel-content -->
    <?php
}
add_action( 'welcome_panel', 'oneConfluence_welcome_panel' ); */

/**
 * Hide default welcome dashboard message and and create a custom one
 *
 * @access      public
 * @since       1.0
 * @return      void
 */
function rc_my_welcome_panel() {

    ?>
    <script type="text/javascript">
        /* Hide default welcome message */
        jQuery(document).ready( function($)
        {
            $('div.welcome-panel-content').hide();
        });
    </script>
    <style>
        ul#myAdminList {
            list-style-type:circle !important;
        }
    </style>

    <div class="custom-welcome-panel-content">
        <h3><?php _e( 'Welcome to OneConfluence.' ); ?></h3>
        <p class="about-description"><?php _e( 'Please review these setup instructions on how to add the logo, new images, copy, and set up the team section.' ); ?></p>
        <div class="welcome-panel-column-container">
            <div class="welcome-panel-column">

            </div>
            <div class="welcome-panel-fullwidth">
                <h4><?php _e( 'Next Steps' ); ?></h4>
                <ul id="myAdminList">

                        <li><?php printf( '<a href="%s" class="welcome-icon welcome-write-blog">' . __( 'Add your logo, phone number, email address, etc.  here' ) . '</a>', admin_url( 'admin.php?page=pks_options' ) ); ?></li>
                    <li><?php printf( '<a href="%s" class="welcome-icon welcome-edit-page">' . __( 'Edit your front page' ) . '</a>', get_edit_post_link( get_option( 'page_on_front' ) ) ); ?></li>

                            <ul><li style="margin-top:-10px;padding:0 0 20px 45px;">This is where the majority of the site content (images and copy) get added/edited.</li></ul>
                        <li><?php printf( '<a href="%s" class="welcome-icon welcome-add-page">' . __( 'Edit the Team Section' ) . '</a>', admin_url( 'edit.php?post_type=team' ) ); ?></li>
                            <ul><li style="list-style-type: circle !important;margin-top:-10px;padding:0 0 15px 45px;">You can add as many team sections/posts as you'd like, but only one of the posts will be used on the homepage.</li>
                                <li style="llist-style-type: circle;margin-top:-10px;padding:0 0 15px 45px;">Now, within each team section/post (Custom Post Type) you can add as many team members as needed.  This is done by using a repeating field group.</li>
                                <li style="list-style:disc;margin-top:-10px;padding:0 0 15px 45px;">At the bottom of the Team Post, you will see an 'Add another' button.  Use this to add more team members.</li>
                                <li style="list-style:disc;margin-top:-10px;padding:0 0 15px 45px;">You can also remove and re-order members.  Look for the up and down arrows to re-order and the red 'x' to remove.</li>
                                <li style="list-style:disc;margin-top:-10px;padding:0 0 15px 45px;">Lastly, and perhaps <strong>most importantly</strong>, you need to know the Post ID.  This can be found by looking in the url bar after you click into the post (by clicking edit)  It will be the only number in the url.  Remember this number!!!!</li>
                            </ul>
                        <li><?php printf( '<a href="%s" class="welcome-icon welcome-view-site">' . __( 'View your site' ) . '</a>', home_url( '/' ) ); ?></li>
                </ul>
            </div>

        </div>
    </div>

    <?php
}

add_action( 'welcome_panel', 'rc_my_welcome_panel' );

function add_custom_dashboard_widgets() {

    wp_add_dashboard_widget(
        'wpexplorer_dashboard_widget', // Widget slug.
        'OneConfluence Custom Dashboard Widget', // Title.
        'custom_dashboard_widget_content' // Display function.
    );
}

add_action( 'wp_dashboard_setup', 'add_custom_dashboard_widgets' );

/**
 * Create the function to output the contents of your Dashboard Widget.
 */

function custom_dashboard_widget_content() {
    // Display whatever it is you want to show.
    echo "This is a reminder that Most of this theme's controls are found on the front page, 
    but the Team section is controlled in the Team Custom Post Type, and then things like the logo are managed in the Site Options section";
}