<?php get_header();?>

<div id="header">
    <div class="header">
        <h1 class="standard-h1"><?php the_title();?></h1>
        <p class="header-lead"><?php the_field('header_lead');?></p>
    </div>
</div>

<?php get_template_part( 'template-parts/aboutme'); ?>

<?php get_template_part( 'template-parts/diensten'); ?>

<?php get_template_part( 'template-parts/portfolio'); ?>

<?php get_template_part( 'template-parts/reviews'); ?>

<?php get_template_part( 'template-parts/contactform'); ?>

<?php get_footer();?>