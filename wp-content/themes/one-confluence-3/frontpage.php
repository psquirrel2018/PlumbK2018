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
<!--navbar level vvvvvvv ***toggle background color**** -->
<div style="position:absolute;height:1px;width:100vw;z-index:2000;background-color:;margin-top:4vw;">

</div>
<div id="main-container" class="container-fluid">
    <section class="row" id="titleblock">
      
<div class="block-margin left-block"><div class="block-wrap"><div id="left">
            <div><span >General Contracting<br />Supervision<br />Project Management</span></div>
  </div></div></div>
      
        <div class="block-margin middle-block" ><div class="block-wrap"><div class="buildingwith">
            <div id="tagger" class="tagline">
               
                <div class="building-with">Building With</div>
                <div class="js-tag">Purpose</div></div>
                 <div class="since1994"><strong>Since 1994</strong></div>
        </div></div></div>
      
<div class="block-margin right-block"><div class="block-wrap"><div id="logo2"style="float:left;">
  </div></div></div>

    </section>

    <section id="passion" class="row section_0 one-offset clearfix" data-title="Purpose" style="margin:0 0 300px 0;">

        <div class="col-xs-12 col-md-10 col-md-offset-1 text-center" style="padding:100px 0;">
            <h2 id="purpose">Built on Purpos<span>e.</span></h2>  
          <img class="img-responsive" id="floorplan" src="/pks3/wp-content/uploads/2016/11/floorplan_4.1.png">
        </div>
    </section>

    <section id="art" class="row section_2 one-offset" data-title="Art" style=""> <!-- Section 3 - ? Section -->

            <div class="col-md-6 col-md-push-1 clearfix">
                <img src="<?= $imageTwo; ?>" class="img-responsive" style="height:;width:auto;position:absolute;margin-left:4vw;">
            </div>
            <div class="col-md-3 text-overlay">
               <!-- <h1>
                   
                </h1> -->
                <div class="featured-content copy"><h2>Art</h2><?= $descriptionTwo; ?></div>
            </div>

    </section>

    <section id="science" class="row section_3" data-title="Science"> <!-- Section 4 - ? Section -->
        <div class="col-md-3 col-md-push-1 clearfix text-overlay">

                    <div class="featured-content copy" id="featured-opposite"><h2>Science</h2><?= $descriptionThree; ?></div>
        </div>
        <div class="col-md-6 col-md-push-1">
            <!-- <h1> </h1> -->
              <img src="<?= $imageThree; ?>" class="img-responsive">
        </div>
        
    </section>

    <section id="creative" class="row section_4 one-offset" data-title="Creative"> <!-- Section 2 - ? Section -->
        <div class="col-md-6 clearfix">
            <img src="<?= $imageFour; ?>" class="img-responsive" style="max-height:600px;">
        </div>
        <div class="col-md-4 text-overlay">
            <div class="featured-content copy"><h2>Creative</h2><?= $descriptionFour; ?></div>
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
    <section id="team" class="row section_5" data-title="Team">
      
      <!-- Section 4 - Team Section -->
        <div class="team_div"><div class="team-overlay">
            <div class="container">
                <div class="row">
                    <!--<h1>The Plumb Kendall Team</h1>-->
                    <!-- Start Owl Carousel for teams -->
                    <div class="owl-carousel">
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
                                    'class' => 'thumb  img-responsive',
                                ));
                            } ?>
                            <div class="team-member">
                                <div class="col-sm-12 col-sm-4 team-photo"><?= $img; ?></div>
                                <div class="col-xs-12 col-sm-8 details">
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
       </div>
    </section>

    <section id="solutions" class="row section_6 one-offset" data-title="Solutions">
              <div class="col-md-3 col-md-offset-1 text-overlay">
            <div class="featured-content " id="featured-opposite"><h2>Solutions</h2><?= $descriptionFive; ?></div>
        </div>
      <div class="col-md-6 clearfix">
            <img src="<?= $imageFive; ?>" class="img-responsive">
        </div>

        
    </section>

    <section id="contact" class="row footer_wrapper">
        <div class="footer">
          <img id="brass" src="/pks3/wp-content/uploads/2016/11/plumb_bob_2.32.png">
                    <img id="m_brass" src="/pks3/wp-content/uploads/2016/11/m_plumb_bob_1.1.png">

            <div class="col-sm-4 col-sm-push-5" style="padding:0;">
                <div class="copy text-center message"><h3>
                  “A <span>plumb bob</span> is a weighted symmetrical object, 
and when suspended from a string provides a vertical reference line relative to the earth’s surface.  It represents integrity, truth, quality and sustainability. In capable hands it can build the Ancient Pyramids, the Eiffel Tower and with the assistance 
of the stars, navigate great seas.” 
 <br><br>
“We realize that not all builders are created equal…but if you believe in 
the unlimited potential of art, science, creativity, teamwork and solutions, we might have something in common and we’d love to chat.”
                        <!--Problem finders are a dime a dozen. Problem solvers are worth their weight in gold.-->
                    </h3>
                  <img id="signature" src="/pks3/wp-content/uploads/2016/11/sig-one-blue.png">
                  <h3 class="text-right" id="job-title">
                    Alex Mintling<br>
                    Owner/Operator
                  </h3>
                    <!--<div class="contact-btn"><a data-toggle="modal" href="#myModal" class="btn btn-primary">Contact Us</a></div> -->
                </div>
            </div>
        </div>
    </section>
  <section class="whw-container">
  <div class="row">
    <div class="col-md-4 whw">
      <h2>Why</h2>Donec id elit non mi porta gravida at eget metus. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.
    </div>
        <div class="col-md-4 whw whw-middle">
      <h2>How</h2>
          <a href="mailto:alex@plumbkendall.com">alex@plumbkendall.com</a>
          <bold>970.390.0000</bold><p>
                    725 Chambers Ave #10<br>
Eagle, Colorado 81631-408<br>
          </p>



          
    </div>
        <div class="col-md-4 whw ">
      <h2>When</h2>
          Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
    </div>
    </div>
  </section>
</div> 

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Get In Toouch!</h4>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode( '[contact-form-7 id="34" title="contact form 1"]' ); ?>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn">Close</a>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>