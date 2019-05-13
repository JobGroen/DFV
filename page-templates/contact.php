<?php /* Template Name: Contact */ ?>
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
<?php get_header();?>

<div id="header" style="background-image: url(<?php echo esc_url($featured_img_url); ?>)">
	<div class="header" >
		<h1 class="standard-h1"><?php the_title();?></h1>
	</div>
</div>

<?php get_template_part( 'template-parts/contactform-single'); ?>
<?php get_footer();?>