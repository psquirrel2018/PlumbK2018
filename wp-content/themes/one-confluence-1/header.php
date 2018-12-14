<?php
/**
 * The Header for the ONE Confluence Theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */

global $post;
$imageOne = get_post_meta($post->ID, '_one_front_one_image', true);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head();
    $site_logo = one_get_option( 'logo' );?>
</head>
<body id="page-top" <?php body_class( 'index' ); ?>>


<!-- Header Content -->
<section id="after_into" class="section_1" style="background-image: url('<?= $imageOne; ?>');background-size:cover;"> <!-- Section 1 - ? Section -->
    <div class="after_intro_div">
      <div class="container-fluid">
        <div class="row" style="margin:30px 0 0 0;">
          <div class="col-xs-12 col-md-4 col-md-push-4 text-center">
            <!--<svg id="animation"  xmlns="http://www.w3.org/2000/svg" version="1.20"  xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0  431 152" preserveAspectRatio="xMidYMid meet" style=' background-color: transparent; width:60%;'> <!-- slice  style=' background: linear-gradient(to top, #bbb, white);-->
            <svg id="animation"  xmlns="http://www.w3.org/2000/svg" version="1.20"  xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0  431 152" preserveAspectRatio="xMidYMid meet" style=' background-color: transparent;width:70%;'> <!-- slice  style=' background: linear-gradient(to top, #bbb, white);-->
            </svg>
          </div>
        </div>
      </div>
    </div>
    <div id="welcome" class="animated fade_down animation_started" style="animation-delay: 4s;">
      <div class="container">
        <div class="row" style="margin:10px 0 80px 0;">
          <div class="col-xs-12 col-md-4 col-lg-push-4 text-center" style="min-height:100px;background-image:url(''); background-size:contain;background-repeat: no-repeat; background-position:center center;">
            <!--<img src="http://pks.flywheelsites.com/wp-content/uploads/2016/06/red-x.png">-->
          </div>
        </div>
      </div>
    </div>

    <div class="post-intro">
      <div class="container-fluid">
        <div class="row" style="margin:0 0 400px 0;">
          <div class="col-xs-12 col-sm-4 text-center">
            <div id="card" class="flipcard"> 
              <div class="front" style="background-color:#fff;"> 
                <h1>
                  General Contracting
                </h1>
              </div> 
              <div class="back text-center">
                 <p style="padding:0 120px;">
                  Plumb Kendall Solutions has been providing general contracting servcies to the vail valley for over 20 years.<br /> <a href="#">Learn More</a></p>
              </div> 
            </div>
            
          </div> <!-- end col -->
          <div class="col-xs-12 col-sm-4 text-center">
            <div id="card2" class="flipcard"> 
              <div class="front"> 
                <h1>
                  Project Management
                </h1>
              </div> 
              <div class="back text-center">
                <h1>
                  Project Management
                </h1>
                Do you have a large project that requires project management?  We can help.<br /> <a href="#">Learn More</a>
              </div> 
            </div>
          </div> <!-- end col -->
          <div class="col-xs-12 col-sm-4 text-center">
            <div id="card3" class="flipcard"> 
              <div class="front"> 
                <h1>
                  Consulting
                </h1>
              </div> 
              <div class="back text-center">
                <h1>
                  Consulting
                </h1>
                Not sure how to get your project off the ground?  Let Plumb Kendall Solutions help you write up the project requirements, review bids, and interview the contractors.<br /> <a href="#">Learn More</a>
              </div> 
            </div>
            <h1>
            
            </h1>
          </div> <!-- end col -->
        </div><!-- end row -->
      </div> <!-- end container -->
    </div> <!-- end post-intro container -->
</section> <!-- end section_1 -->

<div id="header" class="header">
    <div class="header-container">
        <!-- Navigation -->
        <nav class="navbar navbar-default main-menu">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4" style="background:url('<?= $site_logo; ?>');background-size:contain; background-repeat:no-repeat;">
                        <div class="logo">
                            <!--<img src="" class="img-responsive">-->
                        </div>
                      <div id="tagger" class="tagline">
                       <span class="js-tag">Passion</span> <!--<span style="color:#e21e00;font-weight:300;font-size:22px;">!</span>-->
                      </div>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="col-md-8">
                        <div class="menu_wrapper">
                            <div id="MainNav">
                                <div id="menu" class="menu-menu-1-container">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">-->
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbar">

                                        <?php
                                        echo one_front_nav();
                                        //if ( is_front_page() ) {
                                        //    one_front_nav();
                                        //} else {
                                        //    one_subpage_menu_nav();
                                        //}
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
</div>
<!-- /Header Content -->




