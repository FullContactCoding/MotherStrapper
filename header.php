<?php


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="jumbotron">
        <div class="row">
            <div class="col-xs-12">
                <h1>Title of the page here!</h1>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Remove line below if you don't want the blogname in the menu -->
            <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <?php /* Primary navigation */
            wp_nav_menu( array(
                    'menu' => 'primary',
                    'depth' => 2,
                    'container' => false,
                    'menu_class' => 'nav',
                    //Process nav menu using our custom nav walker
                    'walker' => new wp_bootstrap_navwalker())
            );
            ?>
        </div>
    </nav>
	<!-- drop this line wherever you want the carousel <?php // echo do_shortcode('[image-carousel]'); ?> 
	needs the plug-in CPT Bootstrap Carousel to work --> 