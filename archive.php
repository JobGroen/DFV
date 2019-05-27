<?php /* Template Name: Landings page blog */ ?>
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
<?php get_header();?>

<div id="header" style="background-image: url('/wp-content/uploads/2019/05/wenkbrouwen-wimpers.jpg')">
  <div class="header">
    <h1 data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500" class="standard-h1">Blog</h1>
  </div>
</div>

<div class="container blog">
  <?php if (have_posts()) : while(have_posts()) : the_post();?>

  <div data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-once="true" class="row pt-4 pb-4 no-gutters">
    <div class="col-md-3 blog-leftside">
      <?php if(has_post_thumbnail()):?>
       <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">
      <?php endif;?>
    </div>
    <div class="col-md-9 blog-rightside">
      <div class="blog-righttext">
      <h3><?php the_title();?></h3>
      <p>Geplaatst op <?php echo get_the_date(); ?> door <?php the_author(); ?></p>
		  <p>
			  <?php $excerpt = get_the_excerpt();
			  	echo $excerpt;
			  ?>
		  </p>

      <a href="<?php the_permalink();?>" class="standard-button">Lees meer</a>
      </div>
    </div>
  </div>

  <?php endwhile; endif;?>
</div>


<?php get_template_part( 'template-parts/contactform'); ?>
<?php get_footer();?>
