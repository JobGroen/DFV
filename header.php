<!DOCTYPE html>
<html lang="en">

<head>

    <?php wp_head();?>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:800" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylesheets -->
    <link href="/css/job.css" rel="stylesheet">
    <link href="/css/jort.css" rel="stylesheet">
    <link href="/css/maarten.css" rel="stylesheet">

</head>

<body <?php body_class();?>>

<header class="sticky-top">
        <nav class="navbar navbar-expand-md navbar-light" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand" href="/home">Daimond Face Visagie</a>
                <button class="overlaynav-toggle" type="button" onclick="openNav()">
                    <i class="fas fa-bars"></i>
                </button>
                <div id="overlay-menu" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <?php
		        wp_nav_menu( array(
			        'theme_location'    => 'top-menu',
			        'depth'             => 2,
			        'container'         => 'div',
			        'container_class'   => 'overlay-content',
			        'container_id'      => 'bs-example-navbar-collapse-1',
			        'menu_class'        => 'nav navbar-nav flex-column',
			        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			        'walker'            => new WP_Bootstrap_Navwalker(),
		            ) );
                    ?>
                    <div class="overlay-content-icons">
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-facebook-square"></i>
                    </div>
                </div>
            </div>
        </nav>
    </header>