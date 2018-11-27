<?php
/**
 Blog Post Template
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
?>
    <div id="main-container" class="container-fluid">

        <div class="fullwidthbanner-container container">
            <div class="row">
                <div class="col-xs-12 hero-container">
                    <img class="img-responsive" src="<?= $imageUrl; ?>" style="width:100%;">
                </div>
            </div>
        </div> <!-- /.rev_slider_wrapper-->

        <?php while ( have_posts() ) : the_post(); ?>

        <div class="container">
            <div class="limit-width3">
                <div class="row">
                    <div class="col-xs-12 section-title-wrapper" style="padding:15px;">
                        <h1 class="light-version"><?= the_title(); ?></h1>
                        <p><?= the_content(); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile;
        get_template_part('templates/blog-title-block-section');
        get_template_part('templates/footer-block');
        ?>
    </div>
<?php get_footer(); ?>