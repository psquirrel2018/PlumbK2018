<?php
/**
 * Created by PhpStorm.
 * User: circdominic
 * Date: 11/17/18
 * Time: 10:12 AM
 */

$topTitleOne = get_post_meta($post->ID, '_one_front_one_top', true);
$bottomTitleOne = get_post_meta($post->ID, '_one_front_one_bottom', true);
$imageOne = get_post_meta($post->ID, '_one_front_one_image', true);
$descriptionOne = get_post_meta($post->ID, '_one_front_one_wysiwyg', true);
$topTitleSubHeadingOne = get_post_meta($post->ID, '_one_front_one_bottom', true);
$sevenStepCta = get_post_meta($post->ID, '_one_front_seven_step_button', true);
$sevenStepUrl = get_post_meta($post->ID, '_one_front_seven_step_url', true);
 //get_post_meta($post->ID, '_one_front_seven_step_content', true);
$sevenStepContent = apply_filters( 'the_content', get_post_meta( get_the_id(), '_one_front_seven_step_wysiwyg', true ) );

//$urlOne = get_post_meta($post->ID, '_one_front_one_url', true);

setup_custom_font_data();

$customFontSettings = setup_custom_font_data();

$font = $customFontSettings['font-family'];
$size = $customFontSettings['font-size'];
$weight = $customFontSettings['font-weight'];
$lineHeight = $customFontSettings['line-height'];
$color = $customFontSettings['color'];

$data = $font;
list($CustomFont) = explode(":", $data);
$customFont2 = preg_replace('/[^a-zA-Z0-9-_\.]/',' ', $CustomFont);

$fontStyle = one_get_option('font-style');

?>

<section id="passion" class="row" data-title="<?= $topTitleOne; ?>">
    <div class="col-sm-5 col-md-4 col-lg-4 col-lg-push-2 text-overlay-left clearfix" style="padding: 80px 0 80px 70px;">
        <div class="featured-content-left purpose copy"><h2 id="triggerPassion"><?//= $topTitleOne; ?></h2>
            <div style="padding-right:10px;font-family:'<?= $customFont2; ?>' !important;font-weight:<?= $weight; ?>;font-size:<?= $size; ?>;color:<?= $color; ?>;line-height:<?= $lineHeight; ?>;font-style:<?= $fontStyle; ?>;">
                <?= $descriptionOne; ?>
            </div>

            <div class="clearfix" style="font-weight:600;float:;padding:10px 0 20px 0;">
               -- <?= $topTitleSubHeadingOne; ?>
            </div>
            <div class="" style="font-weight:600;font-size:16px;">Get Our Free 7 Step Remodel Process</div>
            <div class="clearfix" style="width:100%;padding-top:30px;">
                <a href="#" class="" style="float:right;" data-toggle="modal" data-target="#sevenStepModal"><img src="<?= $sevenStepCta; ?>" class="img-responsive" style="width:250px;"></a>
            </div>
        </div>
    </div>
    <div class="col-sm-7 col-md-7 col-lg-5 col-lg-push-2">
        <img src="<?= $imageOne; ?>" class="img-responsive desaturate2" style="width:75%;padding:30px; margin:0 0 0 60px;">
    </div>
</section>

<div id="sevenStepModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button  class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myContactModalLabel"></h4>
            </div>
            <div class="container modal-body" style="max-width:800px;padding:30px;">
                <div class="row">
                    <div class="col-xs-12">
                        <?= $sevenStepContent; ?>
                    </div>
                </div>

            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>


