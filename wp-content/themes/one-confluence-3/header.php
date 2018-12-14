<?php
/**
 * The Header for the ONE Confluence Theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 **/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" style="">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head();
    $site_logo = one_get_option( 'logo' );?>
</head>
<body id="page-top" <?php body_class( 'index' ); ?> >
<div id="blueprint"></div>
<div id="header" class="header navbar-fixed-top">
    <div class="header-container">
        <!-- Navigation -->
      
        <nav class="navbar navbar-default main-menu">
            <div class="container-fluid">
                <div class="row">
                  <a id="home-link" href="#floorplan"></a>
                    <div class="col-sm-9 menu">
                        <div class="menu_wrapper">
                            <div id="MainNav">
                              
                                <div id="menu" class="menu-menu-1-container">
                               <!--     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button> -->
                                   <button type="button" class="navbar-toggle hamburger-icon" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                  </button>
                                    <div class="collapse navbar-collapse" id="navbar">
                                        <?php
                                        echo one_front_nav();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="hidden-xs col-sm-3 dropline">
                        <div>
                           <a href="#contact">DROP US A LINE</a>
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




