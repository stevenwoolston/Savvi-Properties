<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php

    //  set the default title as the global site description
    $meta_description = get_option( 'meta_description' );

    if ( is_single() ) {
        $meta_description = ($post->post_title).' - '.preg_replace( "/\r|\n/", " ", ( strip_tags($post->post_excerpt ) ) );
    }

    echo '<meta name="description" content="'.$meta_description.'">';
    $blog_title = get_bloginfo('name') . ' - ' . get_bloginfo('description');
?>
    <title>
<?php

    if ( is_404() ) {
        echo "Nothing Found" . " - ";
    } else if( !is_home() ) {
        echo get_the_title() . " - ";
    }

    echo bloginfo("name") . "  ";
    echo bloginfo("description");
?>
    </title>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri() ?>/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/global.css">
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-78480173-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?php echo get_option( 'tracking_code' ); ?>');
    </script>
</head>
<body <?php body_class( "coming-soon cover-background-image parallax"); ?>>

    <nav id="wp-nav-menu" role="navigation" class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#wp-nav-bar" aria-expanded="false">
                    <span class="button-collapse-title">Menu</span>
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div id="wp-nav-bar" class="collapse navbar-collapse">

                <div class="centred-navigation col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-7 col-lg-offset-3">

                    <?php wp_nav_menu( array(
                    //'container_id'		=> 'wp-nav-bar',
                    //'container_class'	=> 'text-right',
                    'menu_class'		=> 'nav navbar-nav main-menu-item',
                    'theme_location'	=> 'main-menu-left',
                    'walker' => new WP_Bootstrap_Navwalker(),
                    ) ); ?>

                    <div class="hidden-xs col-sm-2 text-center nav-logo-container">
                        <a href="<?php echo site_url() ?>">
                            <img class="nav-logo" src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" alt="" />
                        </a>
                    </div>

                    <?php wp_nav_menu( array(
                    //'container_id'		=> 'wp-nav-bar',
                    //'container_class'	=> 'col-sm-5',
                    'menu_class'		=> 'nav navbar-nav main-menu-item',
                    'theme_location'	=> 'main-menu-right',
                    'walker' => new WP_Bootstrap_Navwalker(),
                    ) ); ?>

                </div>

                <!--<div class="hidden-xs btn-group navbar-btn">
                    <button type="button" class="btn btn-danger dropdown-toggle nav-call-us-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-phone-alt"></span>For Sale <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right bg-danger">
                        <li><a href="tel:0409996888">Call Geoff Now<br /> on 0409 996 888</a></li>
                    </ul>
                </div>-->
                <!--<button type="button" class="hidden-sm hidden-md hidden-lg btn btn-danger navbar-btn nav-call-us-button">
                    <a href="tel:0409996888">
                        <span class="glyphicon glyphicon-phone-alt"></span>For Sale <br />Call Geoff Now on 0409 996 888
                    </a>
                </button>-->

            </div>

        </div>
    </nav>

    <div class="page-wrap container-fluid">
        <div class="row">
            <div class="flags-container clearfix">
                <div class="col-xs-12 text-right">
                    <label>Choose Language:</label>
                    <?php echo do_shortcode('[google-translator]'); ?>
                </div>
            </div>
