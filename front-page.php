<?php get_header();?>

<div id="header">
    <div class="header">
        <h1 class="standard-h1"><?php the_title();?></h1>
        <p class="header-lead"><?php the_field('header_lead');?></p>
    </div>
</div>

<div id="about-me">
    <div class="container about-me">
        <div class="row">
            <div class="col-md-6">
                <p><?php the_field('about_me');?></p>
            </div>

            <div class="col-md-6">
                <p class="header-lead"><?php the_field('header_lead');?></p>
            </div>
        </div>
    </div>
</div>

<div class="container pt-5 pb-5">

    <?php if (have_posts()) : while(have_posts()) : the_post();?>

    <?php the_content();?>

    <?php endwhile; endif;?>

</div>

<?php get_footer();?>