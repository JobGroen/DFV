<?php /* Template Name: Over mij */ ?>
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
<?php get_header();?>

<div id="header" style="background-image: url(<?php echo esc_url($featured_img_url); ?>)">
    <div class="header">
        <h1 class="standard-h1"><?php the_title();?></h1>
    </div>
</div>

<div class="diensten-single">
    <div class="row">
        <div class="col-md-5">
            <div class="container">
            </div>
        </div>

        <div class="col-md-7">
            <div class="container">
                <h2><?php the_field("overmij_titel")?></h2>
                <div class="diensten-single-box">
                    <img src="<?php the_field("overmij_afbeelding")?>" alt="overmij">
                    <p><?php the_field("overmij_beschrijving") ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<center>
    <div class="balk"></div>
    <iframe class="film" width="850" height="500" src="https://www.youtube.com/embed/tgbNymZ7vqY">
    </iframe>
</center>

<?php get_template_part( 'template-parts/contactform'); ?>



<?php get_footer();?>