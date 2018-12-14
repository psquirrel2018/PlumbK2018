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
<body id="page-top" data-spy="scroll" data-target=".navbar" data-offset="50" <?php body_class(); ?> >
<!--<div id="menu" style="position:fixed;left:10px;top:10px;z-index:500;"><span style="font-size:30px;cursor:pointer;color:#3382bf;" onclick="openNav()">&#9776;</span></div>-->

<section id="purpose" data-title="Purpose" class="">
    <div class="container purpose">
        <div class="row">
            <div class="col-xs-6 col-xs-push-3 col-sm-4 col-sm-push-4">
                <img src="http://knssandbox.com/pks4/wp-content/uploads/2017/02/pks1_1.png" class="logo-responsive" />
            </div>
        </div>

    </div>
</section>
<div id="header" class="header navbar-fixed-top2 unstuck" style="">
    <div class="header-container">
        <!-- Navigation -->

        <nav id="pnav" class="navbar navbar-default main-menu">
            <div class="container">
                <div class="row">
                    <a id="home-link" href="#floorplan"></a>
                    <div class="col-sm-9 menu">
                        <div class="menu_wrapper">
                            <div id="MainNav">

                                <div id="menu" class="menu-menu-1-container">
                                     <button type="button" class="navbar-toggle collapsed hamburger-icon navbar-fixed-top" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="background-color:#333333; z-index:10000;">
                                    <span class="sr-only">Toggle navigation</span>
                                             <span class="icon-bar"></span>
                                             <span class="icon-bar"></span>
                                             <span class="icon-bar"></span>
                                         </button>
                                   <!--<button type="button" class="navbar-toggle hamburger-icon" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    </button> -->
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
                        <a href="#purpose">Home</a> <a href="#purpose">Name</a> <a href="#purpose-bottom">Contact</a>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
</div>

<!-- /Header Content -->
