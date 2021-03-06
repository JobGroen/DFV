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

</head>

<body <?php body_class();?>>

<header class="sticky-top">
        <nav class="navbar navbar-expand-md navbar-light" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand" href="/home">
                <img class="logo" src="/wp-content/uploads/2019/06/logo-pure-face-art-1.png" alt="pure face art logo">
                </a>
                <button class="sidenav-toggle" type="button">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </button>
                <div id="sidenav-menu" class="sidenav">
                <?php
		        wp_nav_menu( array(
			        'theme_location'    => 'top-menu',
			        'depth'             => 2,
			        'container'         => 'div',
			        'container_class'   => 'sidenav-content',
			        'container_id'      => 'bs-example-navbar-collapse-1',
			        'menu_class'        => 'nav navbar-nav flex-column',
			        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			        'walker'            => new WP_Bootstrap_Navwalker(),
		            ) );
                    ?>
                    <div class="sidenav-content-icons">
                    <a href="https://www.instagram.com/purefaceart/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/xxAshh"><i class="fab fa-facebook-square"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div id="main-content">