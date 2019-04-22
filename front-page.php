<?php get_header();?>

<div id="header">
    <div class="header">
        <h1 class="standard-h1"><?php the_title();?></h1>
        <p class="header-lead"><?php the_field('header_lead');?></p>
    </div>
</div>

<div id="aboutme">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Over mij</h2>
                <p><?php the_field('about_me');?></p><br>
                <a class="standard-button" href="#">Meer over mij</a>
            </div>

            <div class="col-lg-6">
            </div>
        </div>
    </div>
</div>

<div id="diensten">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Diensten</h2>
            </div>
        </div>
    </div>
</div>

<div class="diensten">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="diensten-block">
                    <p>Bruiloften</p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="diensten-block">
                    <p>Videoclips &amp; Fotoshoots</p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="diensten-block">
                    <p>Feestjes</p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="diensten-block">
                    <p>Wenkbrouwen &amp; Wimpers</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>Portfolio</h2>
                <p><?php the_field('about_me');?></p><br>
                <a class="standard-button" href="#">Meer over mij</a>
            </div>

            <div class="col-md-7">
            </div>
        </div>
    </div>
</div>

<div id="reviews">
    <div class="row">
        <div class="col-md-5">
            <div class="container">
            </div>
        </div>

        <div class="col-md-7">
            <div class="container">
                <h2>Reviews</h2>
                <div class="reviews-box">
                    <p><i>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenea commodo ligula eget
                            dolor.Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                            consequat massa quis enim."</i></p>

                    <p>- John doe</p>
                    <a href="#">Bekijk alle foto's ></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part( 'template-parts/contactform'); ?>

<!-- <div class="container pt-5 pb-5"> -->

<!-- <?php if (have_posts()) : while(have_posts()) : the_post();?> -->

<!-- <?php the_content();?> -->

<!-- <?php endwhile; endif;?> -->

<!-- </div> -->

<?php get_footer();?>