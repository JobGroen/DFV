<?php get_header();?>

<div id="header">
<div id="background-carousel">
    <div id="bgCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php if( get_field('carousel_afbeelding_1') ): ?>
            <div class="carousel-item active" style="background-image:url(<?php the_field('carousel_afbeelding_1'); ?>)"></div>
        <?php endif; ?>
        <?php if( get_field('carousel_afbeelding_2') ): ?>
            <div class="carousel-item" style="background-image:url(<?php the_field('carousel_afbeelding_2'); ?>)"></div>
        <?php endif; ?>
        <?php if( get_field('carousel_afbeelding_3') ): ?>
            <div class="carousel-item" style="background-image:url(<?php the_field('carousel_afbeelding_3'); ?>)"></div>
        <?php endif; ?>
      </div>
    </div>
</div>
    <div class="header">
        <h1 data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500" class="standard-h1"><?php the_title();?></h1>
        <p data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500" class="header-lead"><?php the_field('header_lead');?></p>
    </div>
</div>

<?php get_template_part( 'template-parts/aboutme'); ?>

<?php get_template_part( 'template-parts/diensten'); ?>

<?php get_template_part( 'template-parts/portfolio'); ?>

<?php get_template_part( 'template-parts/reviews'); ?>

<?php get_template_part( 'template-parts/contactform'); ?>

<?php get_footer();?>
