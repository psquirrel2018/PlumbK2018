<?php
/**
Template Name: Blog Template

 * @author Scott Taylor
 * @package One Confluence
 * @subpackage Customizations
 */
get_header( 'two' );

global $post;
$imageUrl = wp_get_attachment_url( get_post_thumbnail_id() );
?>
    <div id="main-container" class="container-fluid">
        <div class="fullwidthbanner-container container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-push-3 hero-container" style="height:60px;">

                </div>
            </div>
        </div> <!-- /.rev_slider_wrapper-->

        <section id="" class="container">

                    <div class="row" style="padding:0;">
                        <div class="col-xs-12" style="font-weight:400;font-size:1.5em;padding:15px 60px;">
                            <h1 class="dark-version">From the Blog</h1>
                            <!--Add Blog Categories as filters here-->
                        </div>
                    </div>
                    <?php $loop = new WP_Query(array('post_type' => 'post', 'posts_per_page' => -1, 'orderby'=> 'ASC')); ?>
                    <?php
                    $allCats = get_terms('category',[
                        'hide_empty' => true,
                    ]);
                    $groupTerms = array();
                    foreach ( $allCats as $allCatsTerm ) {
                        $groupTerms[strtolower($allCatsTerm->name)] = $allCatsTerm->term_id;
                    } ?>
                    <div class="row" style="padding:30px 0 0 0;">
                        <div id="portfolio-page" class="col-xs-12" style="border-bottom:1px solid #cccccc;">
                            <ul class="nav navbar-nav navbar-right filter-nav" id="filters" style="">
                                <?php
                                $terms2 = get_terms('category');
                                $count = count($terms2);
                                echo '<li><a href="javascript:void(0)" title="" data-filter=".all" data-groupid="-1" class="active filter-all-btn filter-btn">All</a></li>';
                                if ( $count > 0 ){
                                    foreach ( $terms2 as $term ) {
                                        //$termname = strtolower($term->name);
                                        $termname = $term->name;
                                        $termname = str_replace('&amp; ', '', $termname);
                                        $termname = str_replace('&', '-', $termname);
                                        $termname = str_replace(' ', '-', $termname);
                                        echo '<li style="list-style:inline;"><a href="javascript:void(0)" title="" class="filter-btn" data-groupid="'.$termname.'" data-filter=".'.$termname.'">'.$term->name.'</a></li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <div id="portfolio" class="row" style="position:relative !important; padding:30px 0 30px 0;height:100%;">
                        <?php
                        while ( $loop->have_posts() ) : $loop->the_post();

                            $terms = get_the_terms( $portfolioItem, 'category' );
                            $tax = '';
                            if( $terms && ! is_wp_error( $terms ) ) :
                                $links = array();
                                $links2 = array();
                                foreach ( $terms as $term ) {
                                    $termName = $term->name;
                                    $categoryTermName = $term->name;
                                    $termName = str_replace('&amp; ', '', $termName);
                                    $termName = str_replace('&', '-', $termName);
                                    $termName = str_replace(' ', '-', $termName);
                                    //$termName = strtolower($termName);
                                    $links[] = $termName;
                                    $links2[] = $categoryTermName;
                                }
                            endif;

                            $postTitle = get_the_title();
                            $postDate = get_the_date();
                            $thumb = get_post_thumbnail_id();
                            $img_url = wp_get_attachment_url( $thumb,'medium'); //get img URL
                            $image = aq_resize( $img_url, 450, 310, true ); //resize & crop img
                            $excerpt = get_the_excerpt();
                            $excerpt = substr($excerpt, 0, 300);
                            if( strlen($excerpt) >= 250 ){
                                $excerpt .= '... <a href="'. get_permalink($post->ID) .'">More</a>';}
                            $taxID = null;
                            if( array_key_exists( $tax, $groupTerms ) ){
                                $taxID = $groupTerms[$tax];
                            }
                            ?>

                            <?php echo '<div class="project col-xs-12 all project-item '. implode(' ', $links) .'">';?>
                            <a href="<?= print get_permalink($post->ID); ?>" class="galleryItem" data-group="<?= implode(', ', $links); ?>" title="<?= $title;?>" data-desc="<?= $descDeets; ?>">

                                <h2 class="project-title"><?= $postTitle; ?></h2>
                                <div clsss="pod-details"><?= $postDate; ?>
                                </div>
                                <?php echo $excerpt; ?>
                            </a>
                            <?php echo '</div>' ?>

                        <?php endwhile; ?>
                    </div>
        </section>
    </div>


<script>
    jQuery(function ($) {
// initialize Isotope after all images have loaded
        var $container = $('#portfolio').imagesLoaded( function() { //The ID for the list with all the blog posts
            $container.isotope({ //Isotope options, 'item' matches the class in the PHP
                itemSelector : '.project-item',
                grid: {
                    columnWidth: 200
                }
            });
        });


        //Add the class selected to the item that is clicked, and remove from the others
        var $optionSets = $('#filters'),
            $optionLinks = $optionSets.find('a');

        $optionLinks.click(function(){
            var $this = $(this);
            // don't proceed if already selected
            if ( $this.hasClass('selected') ) {
                return false;
            }
            var $optionSet = $this.parents('#filters');
            $optionSets.find('.selected').removeClass('selected');
            $this.addClass('selected');

            //When an item is clicked, sort the items.
            var selector = $(this).attr('data-filter');
            $container.isotope({ filter: selector });

            return false;
        });

    });

</script>


<?php

get_template_part('templates/blog-title-block-section');
get_template_part('templates/footer-block');

get_footer(); ?>