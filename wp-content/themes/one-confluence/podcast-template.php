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
//$images = get_field('gallery');
?>

    <div id="main-container" class="container-fluid" style="margin-top:30px;padding:30px;">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="fullwidthbanner-container container podcast-hero">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="podcast-title">
                        The Builders Journey Podcasts
                    </h1>
                </div>
            </div>
            <div class="row">

                <div class="col-xs-12 col-md-6 col-lg-4">
                    <img class="img-responsive" src="<?= $imageUrl; ?>" style="max-width:75%;margin:0 auto;border:4px solid #d7d5d5;">
                </div>
                <div class="col-xs-12 col-md-6 col-lg-8">
                    <?= the_content(); ?>
                </div>
            </div>
        </div> <!-- /.rev_slider_wrapper-->
        <?php endwhile; ?>

        <div class="container blog-content">
            <div class="row">

                <?php
                //use wp_query to get cpts and order by post order attributes

                $podResults = new WP_Query(array(
                    'post_type' => 'podcasts',
                    'posts_per_page' => -1,
                    'order_by' => 'menu_order',
                    'order' => 'ASC',
                    'post_status' => 'publish',
                ));
                $podPosts = $podResults->get_posts();
                //echo '<pre>' . print_r($podPosts, true) . '</pre>';

                //loop through results set
                foreach ($podPosts as $podPost) {
                    $podTitle = get_the_title($podPost);
                    $podUrl = get_permalink($podPost);
                    $podContent = get_the_content($podPost->ID);
                    //echo '<pre>' . print_r($workThumbsrc, true) . '</pre>';

                    // echo '<img src="' .$new_image. '">'
                    //echo $workUrl;
                    ?>
                    <div class="col-xs-12" style="margin: 0;min-height:220px;">
                        <article class="pod-entry-1">
                            <h1 style="padding:15px;"><?= $podTitle; ?></h1>
                            <?= $podPost->post_content; ?>
                        </article>
                    </div>
                <?php } // END foreach ?>
            </div>
        </div>
        <?php
        //get_template_part('templates/blog-title-block-section');
        get_template_part('templates/footer-block-post');
        ?>
    </div>
<?php get_footer(); ?>