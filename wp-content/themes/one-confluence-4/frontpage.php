<?php
/**
Template Name: Front Page
 **/
/**
 * @author Scott Taylor
 * @package One Confluence
 * @subpackage Customizations
 */
get_header();


global $post;
$topTitleOne = get_post_meta($post->ID, '_one_front_one_top', true);
$imageOne = get_post_meta($post->ID, '_one_front_one_image', true);
$descriptionOne = get_post_meta($post->ID, '_one_front_one_wysiwyg', true);
$bottomTitleOne = get_post_meta($post->ID, '_one_front_one_bottom', true);
$urlOne = get_post_meta($post->ID, '_one_front_one_url', true);
//block Two variables
$topTitleTwo = get_post_meta($post->ID, '_one_front_two_top', true);
$imageTwo = get_post_meta($post->ID, '_one_front_two_image', true);
$headerTwo = get_post_meta($post->ID, '_one_front_two_header', true);
$descriptionTwo = get_post_meta($post->ID, '_one_front_two_wysiwyg', true);
$bottomTitleTwo = get_post_meta($post->ID, '_one_front_two_bottom', true);
$urlTwo = get_post_meta($post->ID, '_one_front_two_url', true);
//block Three variables
$topTitleThree = get_post_meta($post->ID, '_one_front_three_top', true);
$imageThree = get_post_meta($post->ID, '_one_front_three_image', true);
$headerThree = get_post_meta($post->ID, '_one_front_three_header', true);
$descriptionThree = get_post_meta($post->ID, '_one_front_three_wysiwyg', true);
$bottomTitleThree = get_post_meta($post->ID, '_one_front_three_bottom', true);
$urlThree = get_post_meta($post->ID, '_one_front_three_url', true);
//block Four variables
$topTitleFour = get_post_meta($post->ID, '_one_front_four_top', true);
$imageFour = get_post_meta($post->ID, '_one_front_four_image', true);
$headerFour = get_post_meta($post->ID, '_one_front_four_header', true);
$descriptionFour = get_post_meta($post->ID, '_one_front_four_wysiwyg', true);
$bottomTitleFour = get_post_meta($post->ID, '_one_front_four_bottom', true);
$urlFour = get_post_meta($post->ID, '_one_front_four_url', true);
//block Five variables
$topTitleFive = get_post_meta($post->ID, '_one_front_five_top', true);
$imageFive = get_post_meta($post->ID, '_one_front_five_image', true);
$headerFive = get_post_meta($post->ID, '_one_front_five_header', true);
$descriptionFive = get_post_meta($post->ID, '_one_front_five_wysiwyg', true);
$bottomTitleFive = get_post_meta($post->ID, '_one_front_five_bottom', true);
$urlFive = get_post_meta($post->ID, '_one_front_five_url', true);
//block Six variables
$topTitleSix = get_post_meta($post->ID, '_one_front_six_top', true);
$imageSix = get_post_meta($post->ID, '_one_front_six_image', true);
$headerSix = get_post_meta($post->ID, '_one_front_six_header', true);
$descriptionSix = get_post_meta($post->ID, '_one_front_six_wysiwyg', true);
$bottomTitleSix = get_post_meta($post->ID, '_one_front_six_bottom', true);
$urlSix = get_post_meta($post->ID, '_one_front_six_url', true);

$team_id = get_post_meta($post->ID, '_one_front_team_id', true);


//end block variables
?>
<div class="bmd-layout-container">

<div id="main-container" class="container-fluid">

    <section id="passion" class="row clearfix" data-title="Purpose">
        <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center" style="padding:0;">
            <img style="width:80%;" class="img-responsive" id="floorplan" src="http://knssandbox.com/pks4/wp-content/uploads/2016/09/floorplan_4.1.png">
        </div>
    </section>

    <section id="art2" class="row" data-title="Art" data-target="art">
        <div class="col-sm-7 col-md-8 col-md-push-1 col-lg-6 col-lg-push-2 clearfix">
            <img src="<?= $imageTwo; ?>" class="img-responsive" style="width:90%;">
        </div>
        <div class="col-sm-5 col-md-4 col-md-pull-1 col-lg-2 col-lg-push-2 text-overlay-right">
            <div class="featured-content copy"><h2><?= $topTitleTwo; ?></h2><?= $descriptionTwo; ?></div>
        </div>
    </section>

     <section id="science" class="row" data-title="Science">
        <div class="col-sm-5 col-md-4 col-lg-2 col-lg-push-3 text-overlay-left clearfix">
            <div class="featured-content-left copy"><h2><?= $topTitleThree; ?></h2><?= $descriptionThree; ?></div>
        </div>
        <div class="col-sm-7 col-md-7 col-lg-5 col-lg-push-4">

            <img src="<?= $imageThree; ?>" class="img-responsive" style="width:85%;">

        </div>

    </section>

    <section id="creative" class="row" data-title="Creative">
        <div class="col-sm-8 col-sm-push-2 col-md-8 col-md-push-2 col-lg-6 col-lg-push-3 clearfix apples">
            <img src="<?= $imageFour; ?>" class="img-responsive" style="width:86%;margin-left:80px;">
        </div>
        <div class="col-sm-4 col-md-3 col-lg-2 col-lg-push-2 text-overlay-right">
            <div class="featured-content copy"><h2><?= $topTitleFour; ?></h2><?= $descriptionFour; ?></div>
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
     <section id="team" class="row" data-title="Team">
        <div class="col-lg-8 col-lg-push-2 team_div">
            <div class="row">
                <div class="col-xs-8 col-xs-push-2 col-sm-10 col-sm-push-1">
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
                        <div class="row team-member">
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

    <section id="solutions" class="row" data-title="Solutions">
        <div class="col-sm-5 col-md-4 col-lg-2 col-lg-push-3 text-overlay-left clearfix">
          <div class="featured-content-left"><h2><?= $topTitleFive; ?></h2><?= $descriptionFive; ?></div>
        </div>
        <div class="col-sm-7 col-md-7 col-lg-5 col-lg-push-3">
            <img src="<?= $imageFive; ?>" class="img-responsive">
        </div>

    </section>
  
   <section class="row titleblocks-fixed" id="titleblock">
        <div id="titleblock-inner" class="container" >
            <div class="row">
                <div class="hidden-xs col-sm-4 col-md-3 reduced-padding">
                    <div id="left" class="block-margin left-block block-wrap">
                        <div id="what"><span>Strategic Partnerships<br>Project Management<br>Custom Builder</span></div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6 reduced-padding">
                    <div class="block-margin middle-block block-wrap">
                        <div class="buildingwith">
                            <div id="tagger" class="tagline">
                                <div class="building-with">Built On</div>
                                <div class="js-tag">Team</div></div>
                            <div class="since1994"><strong>Since 1994</strong></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 reduced-padding">
                    <div class="block-margin right-block block-wrap">
                        <div id="logo2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="container">
    <section id="contact" class="footer_wrapper" data-title="purpose">
        <div class="row" style="padding-bottom:60px;">
            <div class="col-lg-4 col-lg-push-4">
                <div class="drawer-controls2">
                    <a href="#myModal" data-toggle="modal" aria-foldedopen="false" aria-controls="myModal" class=""><img class="img-responsive" src="http://knssandbox.com/pks4/wp-content/uploads/2017/03/plumb_bob_4_2_st.png"></a>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <!--<div class="modal fade" id="name" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button  class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">What's in a Name?</h4>
                    </div>
                    <div class="modal-body">
                        <div style="text-align: center;">
                            <iframe src="http://docs.google.com/gview?url=http://www.pdf995.com/samples/pdf.pdf&embedded=true"
                                    style="width:800px; height:800px;" frameborder="0"></iframe>
                            <div class="copy text-center message">

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>-->

        <div id="drawerExample" class="drawer dw-xs-10 dw-sm-6 dw-md-6 fold" aria-labelledby="drawerExample">
            <div class="drawer-contents">
                <div class="drawer-heading">
                    <h2 class="drawer-title" style="text-align: center;">Whats in a Name?</h2>
                    <a style="font-weight:bold;float:right;" href="#drawerExample" data-toggle="drawer" aria-foldedopen="false" aria-controls="drawerExample" class="">CLOSE</a>
                </div>
                <div class="drawer-body">

                    <p>Over the years we’ve received many inquiries as to where the business name, Plumb Kendall Solutions, came from. Most
                        people think we’re plumbers and we take no offence. We are solution oriented
                        builders with an eye for quality, value and customer service. The genesis for the company’s name and logo is rather simple.
                        We love plumb bobs and what they represent. We combine this fact with the
                        business founders middle name, Kendall, the rest is history.</p> <p>
                        A plumb bob is a heavy, symmetrical object and when suspended from a string provides a perfectly vertical reference line
                        relative to the earth’s surface. It represents integrity, truth and sustainability. In
                        capable hands it can build the ancient pyramids, the Eiffel Tower and with the assistance of the stars,
                        navigate great seas.</p> <p>
                        If you believe what we believe about the unlimited potential of the human spirit, we invite you to join
                        us. Together we can explore new frontiers, build the future and positively transform where we live, work and play.</p>


                </div>

                <div class="drawer-footer">
                    <img style="width:50%;float:right;" class="img-responsive" src="http://knssandbox.com/pks4/wp-content/uploads/2017/03/invitation_signature-1.4.png">
                </div>
            </div>
        </div>

        <!--<div id="drawerExample" class="drawer dw-xs-10 dw-sm-6 dw-md-6 fold" aria-labelledby="drawerExample">

            <div class="drawer-contents">

                <div class="drawer-heading">

                    <h2 class="drawer-title">Scott Taylor</h2>
                    <a style="font-weight:bold;float:right;" href="#drawerExample" data-toggle="drawer" aria-foldedopen="false" aria-controls="drawerExample" class="">CLOSE</a>
                </div>
                <div class="drawer-body">
                    <h1></h1>
                    <p></p>

                </div>

                <div class="drawer-footer">

                </div>
            </div>
        </div>-->

        <!--<div class="row">
            <div class="col-sm-10 col-sm-push-1">
                <div class="copy text-center message">
                    <div class="pb">
                        <p>Over the years we’ve received many inquiries as to where the business name, Plumb Kendall Solutions, came from. Most
                            people think we’re plumbers and we take no offence. We are solution oriented
                            builders with an eye for quality, value and customer service. The genesis for the company’s name and logo is rather simple.
                            We love plumb bobs and what they represent. We combine this fact with the
                            business founders middle name, Kendall, the rest is history.</p> <p>
                            A plumb bob is a heavy, symmetrical object and when suspended from a string provides a perfectly vertical reference line
                            relative to the earth’s surface. It represents integrity, truth and sustainability. In
                            capable hands it can build the ancient pyramids, the Eiffel Tower and with the assistance of the stars,
                            navigate great seas.</p> <p>
                            If you believe what we believe about the unlimited potential of the human spirit, we invite you to join
                            us. Together we can explore new frontiers, build the future and positively transform where we live, work and play.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row signature" id="signature">
            <div class="col-sm-8 col-sm-push-3 col-md-4 col-md-push-6">
                <div class="sig-img" id="sig-img">
                    <img class="img-responsive" src="http://knssandbox.com/pks4/wp-content/uploads/2017/03/invitation_signature-1.4.png">
                </div>
            </div>
        </div>-->
    </section>
</div>


<div class="container-fluid">
    <!--<section id="purpose-bottom" class="footer-wrapper parallax-window2" data-title="PURPOSE!" style="background-image:url('http://knssandbox.com/pks4/wp-content/uploads/2017/03/concreteWall-ladder-st2.jpg');background-size: 100% 100%;">-->
    <section id="purpose-bottom" class="footer-wrapper parallax-window2" data-title="PURPOSE!" style="background-image:url('<?= $imageSix; ?>');background-size: 100% 100%;">

            <div class="container">
                <div id="whw" class="row whw-container" >
                    <div class="col-sm-2 col-sm-push-6">
                    <div class="cta-content">
                        <h2>Why</h2><p>Because sometimes the status quo can't get you where you're going.</p></div>
                </div>
                    <div class="col-sm-2 col-sm-push-6">
                    <div class="cta-content">
                        <h2>How</h2>
                        <p>By exploring all your options...  you've earned it.</p>

                    </div>
                </div>
                <div class="col-sm-2 col-sm-push-6">
                    <div class="cta-content">
                        <h2>When</h2>
                        <p><bold>Carpe Diem</bold>; Seize the day.</p>
                        <div class="btn btn-success btn-large"><a data-toggle="modal" href="#myModal">Let's Begin</a></div>

                    </div>
                </div>

            </div>
            <div id="footer-bottom" class="row bottom-info">
                <div class="col-xs-8 col-xs-push-2 col-sm-6 col-md-4 col-md-push-4 bottom-logo">
                    <img style="width:60%;margin:15px auto;" src="http://knssandbox.com/pks4/wp-content/uploads/2017/02/pks1_1.png" class="img-responsive">
                </div>
                <div class="col-xs-12 footer-address">
                    <a href="tel:970.390.0000">970.390.0000</a> | 725 Chambers Ave #10 | Eagle, Colorado 81631-408 | <a href="mailto:info@plumbkendallsolutions.com">info@plumbkendallsolutions.com</a>
                </div>
            </div>
    </section>
</div>
</div>

<?php get_footer(); ?>