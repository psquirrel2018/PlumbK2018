<?php
/**
Template Name: Front Page 2018
 **/
/**
 * @author Scott Taylor
 * @package One Confluence
 * @subpackage Customizations
 */
get_header();

//redo this so that variables make more sense and line up better.  Also get rid of variables not getting used.

global $post;
$topTitleOne = get_post_meta($post->ID, '_one_front_one_top', true);
$bottomTitleOne = get_post_meta($post->ID, '_one_front_one_bottom', true);
$imageOne = get_post_meta($post->ID, '_one_front_one_image', true);
$descriptionOne = get_post_meta($post->ID, '_one_front_one_wysiwyg', true);
//$urlOne = get_post_meta($post->ID, '_one_front_one_url', true);

//block Two variables
$topTitleTwo = get_post_meta($post->ID, '_one_front_two_top', true);
$bottomTitleTwo = get_post_meta($post->ID, '_one_front_two_bottom', true);
$imageTwo = get_post_meta($post->ID, '_one_front_two_image', true);
//$headerTwo = get_post_meta($post->ID, '_one_front_two_header', true);
$descriptionTwo = get_post_meta($post->ID, '_one_front_two_wysiwyg', true);

//block Three variables
$topTitleThree = get_post_meta($post->ID, '_one_front_three_top', true);
$bottomTitleThree = get_post_meta($post->ID, '_one_front_three_bottom', true);
$imageThree = get_post_meta($post->ID, '_one_front_three_image', true);
$descriptionThree = get_post_meta($post->ID, '_one_front_three_wysiwyg', true);

//block Four variables
$topTitleFour = get_post_meta($post->ID, '_one_front_four_top', true);
$bottomTitleFour = get_post_meta($post->ID, '_one_front_four_bottom', true);
$imageFour = get_post_meta($post->ID, '_one_front_four_image', true);
$descriptionFour = get_post_meta($post->ID, '_one_front_four_wysiwyg', true);

//block Five variables
$topTitleFive = get_post_meta($post->ID, '_one_front_five_top', true);
$bottomTitleFive = get_post_meta($post->ID, '_one_front_five_bottom', true);
$imageFive = get_post_meta($post->ID, '_one_front_five_image', true);
$descriptionFive = get_post_meta($post->ID, '_one_front_five_wysiwyg', true);

//block Six variables - CTA/Bookend Variables
$imageSix = get_post_meta($post->ID, '_one_front_six_image', true);
$descriptionSix = get_post_meta($post->ID, '_one_front_six_wysiwyg', true);
$ctaTitleOne = get_post_meta($post->ID, '_one_front_six_why_title', true);
$ctaTitleTwo = get_post_meta($post->ID, '_one_front_six_how_title', true);
$ctaTitleThree = get_post_meta($post->ID, '_one_front_six_when_title', true);
$why = get_post_meta($post->ID, '_one_front_six_why', true);
$how = get_post_meta($post->ID, '_one_front_six_how', true);
$when = get_post_meta($post->ID, '_one_front_six_when', true);
$ctaUrl = get_post_meta($post->ID, '_one_front_cta_url', true);

//Team Variables
$teamLayout = get_post_meta($post->ID, 'team_layout', true);
$team_id = get_post_meta($post->ID, '_one_front_team_id', true);
$dataTitleTeam = get_post_meta($post->ID, '_one_front_team_title', true);
$team_bg = get_post_meta($post->ID, '_one_front_team_background_image', true);

//What's in a Name Variables
//$whatsInaNameTitle = get_post_meta($post->ID, '_one_front_name_title', true);
$whatsInaName = get_post_meta($post->ID, '_one_front_name_copy_wysiwyg', true);
$whatsInaNamePDF = get_post_meta($post->ID, '_one_front_name_pdf', true);
$whatsInaNameImg = get_post_meta($post->ID, '_one_front_name_image', true);
$whatsInaNameOption = get_post_meta($post->ID, 'name_radio_toggle', true);

//Gallery Variables
$galleryLayout = get_post_meta($post->ID, 'gallery_layout', true);
$gallery_id = get_post_meta($post->ID, '_one_front_gallery_id', true);
$dataTitleGallery = get_post_meta($post->ID, '_one_front_team_title', true);
$gallery_bg = get_post_meta($post->ID, '_one_front_gallery_background_image', true);
//end block variables

//Footer Variables
$footerPhone = '';
$footerEmail = '';
$footer_logo = '';
$address_line1 = '';
$address_line2 = '';
//Social Media Icons
$instagram = '';
$linkedin = '';
$pinterest = '';
$facebook = '';
$gplus = '';
$twitter = '';
$wildcardIcon = '';
$wildcardUrl = '';
// Title block Variables
// left container
$titleBlockOne = '';
$titleBlockTwo = '';
$titleBlockThree = '';
//middle container
$middleContainerTopTitle = '';
$middleContainerBottomTitle = '';
// right container - logo container
$titleBlockLogo = '';

if (function_exists('one_get_option')) {
    //Footer Info
    $footerPhone = one_get_option('phone_text');
    $footerEmail = one_get_option('foot_email');
    $footer_logo = one_get_option('logo2');
    $address_line1 = one_get_option('address_line1');
    $address_line2 = one_get_option('address_line2');
    //Social Media
    $instagram = one_get_option('one_instagram_url');
    $facebook = one_get_option('one_facebook_url');
    $twitter = one_get_option('one_twitter_url');
    $gplus = one_get_option('one_gplus_url');
    $pinterest = one_get_option('one_instagram_url');
    $linkedin = one_get_option('one_linkedin_url');
    $wildcardIcon = one_get_option('one_wildcard_icon');
    $wildcardUrl = one_get_option('one_wildcard_url');
    //Title Block Left Container
    $titleBlockOne = one_get_option('one_titleblock_one');
    $titleBlockTwo = one_get_option('one_titleblock_two');
    $titleBlockThree = one_get_option('one_titleblock_three');
    //Title Block Middle Container
    $middleContainerTopTitle = one_get_option('one_middleTitleblock_top');
    $middleContainerBottomTitle = one_get_option('one_middleTitleblock_bottom');
    //Title block Right Container - logo
    $titleBlockLogo = one_get_option('title-Block-logo');
}
?>

    <div id="main-container" class="container-fluid">

        <section id="passion" class="row" data-title="<?= $topTitleOne; ?>">
            <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center" style="padding:0;">
                <img style="width:80%;" class="img-responsive" id="floorplan" src="<?= $imageOne; ?>">
            </div>
        </section>

        <section id="art" class="row" data-title="<?= $topTitleTwo; ?>" data-target="art">
            <div class="col-sm-7 col-md-8 col-md-push-1 col-lg-6 col-lg-push-2 clearfix">
                <img src="<?= $imageTwo; ?>" class="img-responsive desaturate" style="width:90%;">
            </div>
            <div class="col-sm-5 col-md-4 col-md-pull-1 col-lg-2 col-lg-push-2 text-overlay-right">
                <div class="featured-content copy"><h2 id="triggerArt"><?= $topTitleTwo; ?></h2><?= $descriptionTwo; ?></div>

            </div>
        </section>

        <section id="science" class="row" data-title="<?= $topTitleThree; ?>">
            <div class="col-sm-5 col-md-4 col-lg-2 col-lg-push-3 text-overlay-left clearfix">
                <div class="featured-content-left copy"><h2 id="triggerScience"><?= $topTitleThree; ?></h2><?= $descriptionThree; ?></div>

            </div>
            <div class="col-sm-7 col-md-7 col-lg-5 col-lg-push-4">

                <img src="<?= $imageThree; ?>" class="img-responsive desaturate2" style="width:85%;">
            </div>

        </section>

        <section id="creative" class="row" data-title="<?= $topTitleFour; ?>">
            <div class="col-sm-8 col-sm-push-1 col-md-8 col-md-push-2 col-lg-6 col-lg-push-3 clearfix apples">
                <img src="<?= $imageFour; ?>" class="img-responsive desaturate3" style="width:80%;margin-left:0;">
            </div>
            <div class="col-sm-4 col-md-3 col-lg-2 col-lg-push-2 text-overlay-right">
                <div class="featured-content copy"><h2 id="triggerCreative"><?= $topTitleFour; ?></h2><?= $descriptionFour; ?></div>
            </div>
        </section>

        <?php
        /*$team2 = get_post_meta( $team_id, 'pks_team_group', true ); // this particular instance spits out 32 which is entered into a field in wp-admin
        $team = (is_array($team2) && is_array(current($team2))) ? current($team2) : array();
        if( count($team2) > 1 || is_array($team) && array_key_exists('name', $team) && !empty($team['name']) ||
            array_key_exists('photo', $team) && !empty($team['photo']) )
            ||
            array_key_exists('title', $team) && !empty($team['title']) ||
            array_key_exists('bio', $team) && !empty($team['bio']) )
        { */ ?>

        <?php
        if ($teamLayout === 'fluid') { get_template_part('templates/team-fluid'); }
        else { ?>
            <section id="team" class="row" data-title="<?= $dataTitleTeam; ?>">
                <div class="col-lg-10 col-lg-push-1 team_div" style="background-image: url('<?= $team_bg; ?>');">
                    <div class="row">
                        <div class="col-xs-8 col-xs-push-2 col-sm-8 col-sm-push-2">
                            <div class="owl-carousel owl-theme">
                                <?php
                                $team2 = get_post_meta( $team_id, 'pks_team_group', true ); // this particular instance spits out 33 which is entered into a field in wp-admin
                                foreach( (array) $team2 as $team ){
                                    // Default all variables in case they are not defined in the dataset.
                                    $name = '';
                                    $title = '';
                                    $bio = '';
                                    $img = '';
                                    if ( isset( $team['name'] ) )
                                        $name = esc_html( $team['name'] );
                                    if ( isset( $team['title'] ) )
                                        $title = esc_html( $team['title'] );
                                    if ( isset( $team['bio'] ) )
                                        $bio = esc_html( $team['bio'] );
                                    if ( isset( $team['image_id'] ) ) {
                                        $img = wp_get_attachment_image($team['image_id'], 'share-pick', null, array(
                                            'class' => 'thumb  img-responsive grayscale',
                                        ));
                                    } ?>
                                    <div class="team-member">
                                        <div class="col-xs-12 col-sm-4 col-md-5 team-photo"><?= $img; ?></div>
                                        <div class="col-xs-12 col-sm-8 col-md-7 details">
                                            <h3><?= $name; ?></h3>
                                            <h4><?= $title; ?></h4>
                                            <p><?= $bio; ?></p>
                                        </div>
                                    </div>
                                <?php } // END foreach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>



        <section id="solutions" class="row" data-title="<?= $topTitleFive; ?>">
            <div class="col-sm-5 col-md-4 col-lg-2 col-lg-push-3 text-overlay-left clearfix">
                <div class="featured-content-left"><h2 id="triggerSolutions"><?= $topTitleFive; ?></h2><?= $descriptionFive; ?></div>
            </div>
            <div class="col-sm-7 col-md-7 col-lg-5 col-lg-push-3">
                <img src="<?= $imageFive; ?>" class="img-responsive desaturate4" style="max-height:480px;">
            </div>

        </section>

        <section id="titleblock" class="row titleblocks-fixed">
            <div id="titleblock-inner" class="container">
                <div class="row">
                    <div class="hidden-xs col-sm-4 col-md-3 reduced-padding">
                        <div id="left" class="block-margin left-block block-wrap">
                            <div id="what"><span><?= $titleBlockOne; ?><br><?= $titleBlockTwo; ?><br><?= $titleBlockThree; ?></span></div>
                        </div>
                    </div>
                    <div class="hidden-xs2 col-sm-4 col-md-6 reduced-padding">
                        <div class="block-margin middle-block block-wrap">
                            <div class="buildingwith">
                                <div id="tagger" class="tagline">
                                    <div class="building-with"><?= $middleContainerTopTitle; ?></div>
                                    <div class="js-tag">Team</div></div>
                                <div class="since1994"><strong><?= $middleContainerBottomTitle; ?></strong></div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-xs col-sm-4 col-md-3 reduced-padding">
                        <div class="block-margin right-block block-wrap">
                            <div id="logo2" style="background-image: url('<?= $titleBlockLogo; ?>');">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="name" class="row footer_wrapper" data-title="name">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <?php
                        $scrollmagic = 'yes';

                        if ($scrollmagic === 'yes') { get_template_part('templates/scrollmagic'); }
                        else { ?>

                            <h2>scrollmagic doesn't equal yes</h2>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>



        <?php
        if ($galleryLayout === 'fluid') { get_template_part('templates/gallery-fluid'); }
        else { ?>
            <section id="gallery" class="row" data-title="<?= $dataTitleGallery; ?>">
                <div class="col-lg-10 col-lg-push-1 team_div" style="background-image: url('<?= $team_bg; ?>');">
                    <div class="row">
                        <div class="col-xs-8 col-xs-push-2 col-sm-8 col-sm-push-2">
                            <div class="owl-carousel owl-theme">
                                <?php
                                $Gallery2 = get_post_meta( $gallery_id, 'pks_gallery_group', true ); // this particular instance spits out 33 which is entered into a field in wp-admin
                                foreach( (array) $Gallery2 as $Gallery ){
                                    // Default all variables in case they are not defined in the dataset.
                                    $photo = '';

                                    if ( isset( $Gallery['image_id'] ) ) {
                                        $photo = wp_get_attachment_image($Gallery['image_id'], 'share-pick', null, array(
                                            'class' => 'thumb  img-responsive',
                                        ));
                                    } ?>
                                    <div class="team-member">
                                        <div class="col-xs-12 col-sm-4 col-md-4 gallery-photo"><?= $photo; ?></div>
                                    </div>
                                <?php } // END foreach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>

        <section id="purpose-bottom" class="row footer-wrapper" data-title="PURPOSE!" style="background-image:url('');">
            <div class="container">
                <div id="footer-bottom" class="row bottom-info">
                    <div class="col-xs-6 col-xs-push-3 col-sm-4 col-sm-push-4 col-md-2 col-md-push-5 col-lg-3 col-lg-push-4 footer-logo">
                        <img src="<?= $footer_logo; ?>" class="img-responsive">
                    </div>
                    <div class="col-xs-12 footer-address">
                        <a href="tel:<?= $footerPhone; ?>"><span class="glyphicon glyphicon-phone"></span> <?= $footerPhone; ?></a> | <span class="glyphicon glyphicon-map-marker"></span> <?=$address_line1; ?> | <?=$address_line2; ?> | <span class="glyphicon glyphicon-envelope"></span> <?= $footerEmail; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-sm-push-4">
                        <div class="social">
                            <ul>
                                <?php
                                if (isset($instagram) && !empty($instagram)) {
                                    echo '<li><a href="'.$instagram.'" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>';
                                };
                                if (isset($facebook) && !empty($facebook)) {
                                    echo '<li><a href="'.$facebook.'" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>';
                                };
                                if (isset($twitter) && !empty($twitter)) {
                                    echo '<li><a href="'.$twitter.'" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>';
                                };
                                if (isset($gplus) && !empty($gplus)) {
                                    echo '<li><a href="'.$gplus.'" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>';
                                };
                                if (isset($linkedin) && !empty($linkedin)) {
                                    echo '<li><a href="'.$linkedin.'" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>';
                                };
                                if (isset($pinterest) && !empty($pinterest)) {
                                    echo '<li><a href="'.$pinterest.'" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>';
                                };
                                if (isset($wildcardUrl) && !empty($wildcardUrl)) {
                                    echo '<li><a href="'.$wildcardUrl.'" target="_blank"><i class="<?= $wildcardIcon; ?>" aria-hidden="true"></i></a></li>';
                                };
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
<?php get_footer(); ?>