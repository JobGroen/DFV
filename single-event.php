<?php get_header();?>
<?php 
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
?>


<div id="header" style="background-image: url(<?php echo esc_url($featured_img_url); ?>)">
	<div class="header" >
		<div class="event-info"><?php the_content(); ?></div>
	</div>
</div>

<?php get_footer();?>