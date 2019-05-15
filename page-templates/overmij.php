<?php /* Template Name: Over mij */ ?>
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
<?php get_header();?>

<div id="header" style="background-image: url(<?php echo esc_url($featured_img_url); ?>)">
    <div class="header">
        <h1 class="standard-h1"><?php the_title();?></h1>
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
                <img class="aboutme-image-mobile" src="<?php the_field("overmij_afbeelding") ?>" alt="overmij">
                <h2><?php the_field("overmij_titel") ?></h2>
                <div class="aboutme-single-box">
                    <img src="<?php the_field("overmij_afbeelding") ?>" alt="overmij">
                    <p><?php the_field("overmij_beschrijving") ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="balk"></div>
<iframe class="aboutme-video" src="https://www.youtube.com/embed/tgbNymZ7vqY"> </iframe>

<?php get_template_part( 'template-parts/contactform'); ?>



<?php get_footer();?>