<?php get_header();?>
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>

<div id="header" style="background-image: url(<?php echo esc_url($featured_img_url); ?>)">
	<div class="header" >
		<h1 class="standard-h1 single-blog-header"><?php the_title();?></h1>
	</div>
</div>
	
    <?php if (have_posts()) : while(have_posts()) : the_post();?>
    
    <div class="container">
        <div class="single-post-container">
            <h3 class="blog-quote"><?php the_field("blog_quote") ?></h3>    
            <?php the_content();?>
        </div>
        <div class="blog-nav row">
            <div class="left-align-nav col-md-6">
                <?php previous_post_link('%link', '&laquo;  Bekijk de vorige post', FALSE); ?>
            </div>
            <div class="right-align-nav col-md-6">
                <?php next_post_link('%link ', 'Bekijk de volgende post &raquo;', FALSE); ?>
            </div>
    	</div>
    </div>
        
    <?php endwhile; endif;?>

<?php get_footer();?>