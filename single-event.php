<?php get_header();?>
<?php 
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
?>


<div id="header" style="background-image: url(<?php echo esc_url($featured_img_url); ?>)">
	<div class="header" >
		<h1 class="standard-h1"><?php the_title();?></h1>
	</div>
</div>

<div class="container pt-5 pb-5">

	<p class="standard-h4 portfolio-quote">
		 <?php the_field('quote'); ?>
	</p>
		<?php if (have_posts()) : while(have_posts()) : the_post();?>

			<div class="justify-content-center portfolio-single-text">
        		<?php the_content(); ?>
			</div>

        <?php endwhile; endif;?>
</div>
<?php get_footer();?>