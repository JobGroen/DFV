<?php get_header();?>
<?php
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
?>


<div id="header" style="background-image: url(<?php echo esc_url($featured_img_url); ?>)">
	<div class="header" >
		<h1 data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500" class="standard-h1"><?php the_title();?></h1>
	</div>
</div>

<div class="container pt-5 pb-5">

	<p data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500" class="standard-h4 portfolio-quote">
		 <?php the_field('quote'); ?>
	</p>
		<?php if (have_posts()) : while(have_posts()) : the_post();?>

			<div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500" class="justify-content-center portfolio-single-text">
        		<?php the_content(); ?>
			</div>

		<?php endwhile; endif;?>

		<section class="portfolio-image-gallery">
			<?php
				$images = acf_photo_gallery('photo_gallery', $post->ID);
				if( count($images) ):
					foreach($images as $image):
						$id = $image['id']; // The attachment id of the media
						$title = $image['title']; //The title
						$caption= $image['caption']; //The caption
						$full_image_url= $image['full_image_url']; //Full size image url
			?>

			<img data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500" src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">

			<?php endforeach; endif; ?>
		</section>
</div>

<?php get_template_part( 'template-parts/contactform'); ?>

<?php get_footer();?>
