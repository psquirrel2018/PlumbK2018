<?php
/**
 * The Header for the ONE Confluence Theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
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
<section id="after_into" class="section_1"> <!-- Section 1 - ? Section -->
    <div class="after_intro_div">
        <div class="container" style="">
            <div class="row">
                <div class="col-md-4 text-center">
                    <h2 class="">General Contracting</h2>
                </div>
                <div class="col-md-4 text-center">
                    <h2 class="">Consulting</h2>
                </div>
                <div class="col-md-4 text-center">
                    <h2 class="">Project Management</h2>
                </div>
            </div>
            <div class="row" style="margin:60px 0;">
                <div class="col-xs-12 text-center">
                    <svg id="animation"  xmlns="http://www.w3.org/2000/svg" version="1.20"  xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0  431 152" preserveAspectRatio="xMidYMid meet" style=' background-color:  white;'> <!-- slice  style=' background: linear-gradient(to top, #bbb, white);-->
                    </svg>
                </div>
            </div>
            <div class="row" style="margin:60px 0 120px 0;">
                <div class="col-xs-12 text-center">
                    <h1>Building with Passion!</h1>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="header" class="header">
    <div class="header-container">
        <!-- Navigation -->
        <nav class="navbar navbar-default main-menu">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo">
                            <img src="<?= $site_logo; ?>" class="img-responsive">
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




