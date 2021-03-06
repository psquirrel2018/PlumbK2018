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
//$imageOne = get_post_meta($post->ID, '_one_front_one_image', true);
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

 <section id="welcome" class="section_0"> <!-- Section 1 - Top Section -->
      <div class="services_div">
      </div>
 </section>

<section id="art" class="section_2 one-offset" data-title="Art"> <!-- Section 3 - ? Section -->
    <div class="services_div">
        <div class="container-fluid"> <!--contain and cover styles moved to style.css -->
            <div class="row bg-styles2">
              <div class="col-lg-6 col-lg-push-1">
                <img src="<?= $imageTwo; ?>" class="img-responsive">
              </div>
              <div class="col-lg-4 col-lg-push-1 text-overlay2">
                  <!--<img src="http://pks:8888/wp-content/uploads/2016/05/icon-plumb-bob2.png">
                  <img class="size-full aligncenter img-responsive animated fadeInDownBig" src="" alt="" />-->
                <h1>
                  <?= $topTitleTwo; ?>
                </h1>
                  <div class="featured-content copy"><?= $descriptionTwo; ?></div>
              </div>
            </div>
          <div class="row two-offset">
            <!--blank Row for Offset-->
          </div>
        </div>
    </div>
</section>

<section id="science" class="section_3 one-offset" data-title="Science"> <!-- Section 4 - ? Section -->
    <div class="science_div">
        <div class="container-fluid">
            <div class="row bg-styles2">
                <div class="col-lg-5 col-lg-push-1 text-overlay2">
                  <h1>
                    <?= $topTitleThree; ?>
                  </h1>
                  <div class="featured-content copy"><?= $descriptionThree; ?></div>
                </div>
              <div class="col-lg-5 col-lg-push-1">
                <img src="<?= $imageThree; ?>" class="img-responsive">
              </div>
            </div>
        </div>
    </div>
</section>

<section id="creative" class="section_4 one-offset" data-title="Creative"> <!-- Section 2 - ? Section -->
    <div class="creative_div">
        <div class="container-fluid">
            <div class="row bg-styles2">
              <div class="col-lg-4 col-lg-push-2">
                <img src="<?= $imageFour; ?>" class="img-responsive">
              </div>
              <div class="col-lg-5 col-lg-push-2 text-overlay2">
                  <!--<img src="http://pks:8888/wp-content/uploads/2016/05/icon-plumb-bob2.png">
                  <img class="size-full aligncenter img-responsive animated fadeInDownBig" src="" alt="" />-->
                <h1>
                  <?= $topTitleFour; ?>
                </h1>
                  <div class="featured-content copy"><?= $descriptionFour; ?></div>
              </div>
            </div>
        </div>
    </div>
</section>


<section>
  <div class="container-fluid filler1" style="min-height:200px;">
    <div class="row">
      <div class="col-xs-12">
        
      </div>
    </div>
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
<section id="team" class="section_5 one-offset" data-title="Team"> <!-- Section 4 - Team Section -->
    <div class="team_div">
        <div class="container">
            <div class="row">
                <h1>The Plumb Kendall Team</h1>
                <!-- Start Owl Carousel for teams -->
                <div class="owl-carousel">
                    <?php
                    $team2 = get_post_meta( $team_id, 'pks_team_group', true ); // this particular instance spits out 32 which is entered into a field in wp-admin
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
                            <div class="col-sm-12 col-md-4 team-photo"><?= $img; ?></div>
                            <div class="col-xs-12 col-md-8 details">
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

<section id="contactus" class="section_6 one-offset" data-title="Solutions">
    <div class="solutions_div">
        <div class="container-fluid bg-styles">
            <div class="row">               
              <div class="col-lg-6 col-lg-push-1 text-overlay2">
                          <h1>
                  <?= $topTitleSix; ?>
                </h1>
                  <div class="featured-content"><?= $descriptionSix; ?></div>
              </div>
              <div class="col-lg-5 col-lg-push-1">
                <img src="<?= $imageSix; ?>" class="img-responsive">
                
                
              </div>
            </div><!--End of Row 1-->
        </div> <!--End of fluid container-->
    </div> <!--End of solutions_div-->
</section>



<section id="footer" class="footer_wrapper" style="background:url('http://pks.flywheelsites.com/wp-content/uploads/2016/07/gore-piney.jpg');background-position:bottom;background-size:contain;min-height:800px;background-repeat:no-repeat;">
    <div class="footer">
        <div class="container">
            <div class="col-sm-6 col-sm-push-6" style="padding:0 45px;">
              <div class="copy text-center"><h3>       
                Problem finders are a dime a dozen. Problem solvers are worth their weight in gold.
                    </h3>
                <div class="contact-btn"><a data-toggle="modal" href="#myModal" class="btn btn-primary">Contact Us</a></div>
              </div>
              
          </div>
        </div>
    </div>
</section>




<div id="top" class="hidden-top">
  <a class=”back-to-top” href=”#”><i class="fa fa-chevron-up"></i></a>
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