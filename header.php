<!DOCTYPE html>
<html lang="en">

<head>

    <?php wp_head();?>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:800" rel="stylesheet">

    <!-- viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- stylesheets -->
    <link href="css/job.css" rel="stylesheet">
    <link href="css/jort.css" rel="stylesheet">
    <link href="css/maarten.css" rel="stylesheet">

</head>

<body <?php body_class();?>>

    <header class="sticky-top">
        <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/home">Daimond Face Visagie</a>
                <?php
		wp_nav_menu( array(
			'theme_location'    => 'top-menu',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
            </div>
        </nav>
    </header>