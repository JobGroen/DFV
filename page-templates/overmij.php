<?php /* Template Name: Over mij */ ?>
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
<?php get_header();?>

<div id="header" style="background-image: url(<?php echo esc_url($featured_img_url); ?>)">
    <div class="header">
        <h1 data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500" class="standard-h1"><?php the_title();?></h1>
    </div>
</div>

<div class="aboutme-single">
    <div class="row">
        <div class="col-md-5">
            <div class="container">
            </div>
        </div>

        <div class="col-md-7">
            <div class="container">
                <div class="balk"></div>
                <img data-aos="fade-left" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500" class="aboutme-image-mobile" src="<?php the_field("overmij_afbeelding") ?>" alt="overmij">
                <h2 data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500"><?php the_field("overmij_titel") ?></h2>
                <div class="aboutme-single-box">
                    <img data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500" src="<?php the_field("overmij_afbeelding") ?>" alt="overmij">
                    <p data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500"><?php the_field("overmij_beschrijving") ?></p>
                    <span data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500" id="text"><?php the_field("overmij_beschrijving_2") ?></span>
                    <a data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500" class="standard-button" id="toggle">Lees meer</a>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="balk"></div>
<div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500" class="container">
<iframe class="aboutme-video" src="https://www.youtube.com/embed/tgbNymZ7vqY"> </iframe>
</div>

<?php get_template_part( 'template-parts/contactform'); ?>



<?php get_footer();?>
