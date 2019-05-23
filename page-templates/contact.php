<?php /* Template Name: Contact */ ?>
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
<?php get_header();?>

<div id="header" style="background-image: url(<?php echo esc_url($featured_img_url); ?>)">
	<div class="header" >
		<h1 data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500" class="standard-h1"><?php the_title();?></h1>
	</div>
</div>

<?php get_template_part( 'template-parts/contactform-single'); ?>
<?php get_template_part( 'template-parts/location'); ?>
<?php get_footer();?>
