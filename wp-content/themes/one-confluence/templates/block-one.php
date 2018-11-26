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
//$urlOne = get_post_meta($post->ID, '_one_front_one_url', true);

setup_custom_font_data();

$customFontSettings = setup_custom_font_data();

$font = $customFontSettings['font-family'];
$size = $customFontSettings['font-size'];
$weight = $customFontSettings['font-weight'];
$color = $customFontSettings['color'];

$data = $font;
list($CustomFont) = explode(":", $data);
$customFont2 = preg_replace('/[^a-zA-Z0-9-_\.]/',' ', $CustomFont);

?>

<section id="passion" class="row" data-title="<?= $topTitleOne; ?>">
    <div class="col-sm-5 col-md-4 col-lg-4 col-lg-push-2 text-overlay-left clearfix" style="padding: 80px 0 80px 80px;">
        <div class="featured-content-left purpose copy"><h2 id="triggerPassion"><?//= $topTitleOne; ?></h2>
            <div style="font-family:'<?= $customFont2; ?>' !important;font-weight:<?= $weight; ?>;font-size:<?= $size; ?>;color:<?= $color; ?>;">
                <?= $descriptionOne; ?>
            </div>

            <div style="font-weight:600;float:right;padding-top:60px;">
                <?=$topTitleSubHeadingOne ?>
            </div>
        </div>

            <?php
            //echo $customFont;
            //echo $font;
            //echo $customFontData[0];
            ?>
    </div>
    <div class="col-sm-7 col-md-7 col-lg-5 col-lg-push-2">
        <img src="<?= $imageOne; ?>" class="img-responsive desaturate2" style="width:75%;padding:30px; margin:0 0 0 60px;">
    </div>
</section>


