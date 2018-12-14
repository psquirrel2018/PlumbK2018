<!-- Footer -->
<?php
//if ( is_active_sidebar( 'first-footer-widget-area' ) || is_active_sidebar( 'second-footer-widget-area' ) || is_active_sidebar( 'third-footer-widget-area' ) || is_active_sidebar( 'fourth-footer-widget-area' ) ) :

global $post;
$footerLogo = get_post_meta($post->ID, '_one_front_footer_logo', true);
$footerLeft = one_get_option( 'leftFoot' );
$footerRight = one_get_option( 'rightFoot' );
//$bottomTitleOne = get_post_meta($post->ID, '_one_front_one_bottom', true);
//$urlOne = get_post_meta($post->ID, '_one_front_one_url', true);
//block Two variables
?>
<div class="footer_wrapper">
    <div class="footer">
        <div class="container">
            <div class="row">
                <?php $footerLogo = one_get_option( 'logo2' );  ?>
                <div class="col-sm-8">
                    <img class="img-responsive" src="<?= $footerLogo; ?>">

                    <div class="leftFoot">
                        <?= $footerLeft; ?>
                    </div>
                </div>
                <div class="col-sm-4">

                    <div class="leftFoot">
                        <?= $footerRight; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--</div>-->
    <div class="bottom_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    //$logo = '';
                   // $logo_text = '';
                    //$logo_text = onepage_get_option( 'onepage_header_logo_text' );
                    //if ( isset( $logo_text ) && $logo_text != '' ) {
                    //    $logo = "<h1 class='logo_text_footer'>" . $logo_text . "</h1>";
                   // } else {
                    //    $logo = "<img src='" . onepage_get_option( 'onepage_header_logo_img', ONEPAGE_DIR_URI . 'assets/images/site_logo.png' ) . "' alt='logo' />";
                    //}
                   // echo $logo;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>