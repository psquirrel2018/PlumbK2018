<?php
/**
Template Name: Podcast Template
 **/
/**
 * @author Scott Taylor
 * @package One Confluence
 * @subpackage Customizations
 */
get_header('two');

global $post;
//hero Variable
$imageUrl = wp_get_attachment_url( get_post_thumbnail_id() );
$images = get_field('gallery');
?>

    <div id="main-container" class="container-fluid" style="margin-top:30px;padding:30px;">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="fullwidthbanner-container container podcast-hero">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="podcast-title">
                        The Builders Journey Podcast
                    </h1>
                </div>
            </div>
            <div class="row">

                <div class="col-xs-12 col-md-6 col-lg-4">
                    <img class="img-responsive" src="<?= $imageUrl; ?>" style="max-width:75%;margin:0 auto;border:4px solid #d7d5d5;">
                </div>
                <div class="col-xs-12 col-md-6 col-lg-8">
                    <?= the_content(); ?>
                    <div class="podcast">
                        <a href="#" class="podcast-cta">
                            <iframe src="http://www.cbc.ca/i/caffeine/syndicate/?audioId=15632940" width="620" height="138" frameborder="0" allowfullscreen></iframe>
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- /.rev_slider_wrapper-->
        <?php endwhile; ?>



        <div class="container blog-content">
            <div class="row" style="padding-bottom:30px;">
                <div class="col-xs-12">
                    <h2 style="text-align: center; border-bottom:1px solid #d7d5d5;padding-bottom:30px;">
                        Podcast Support Center
                    </h2>
                </div>
            </div>
            <div class="row" style="padding-top:30px;">
                <div class="col-xs-12"><p>Click <a href="#" style="color:#be1d2d;font-weight:bold;">here</a> to read along and view images for this podcast.</p></div>
            </div>
        </div>
        <?php
        get_template_part('templates/blog-title-block-section');
        get_template_part('templates/footer-block-post');
        ?>
    </div>
<?php get_footer(); ?>