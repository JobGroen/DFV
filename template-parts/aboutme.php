<?php
    $aboutme = get_field('about_me_afbeelding');
?>

<div id="aboutme">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true">Over mij</h2>
                <p data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true"><?php the_field('about_me');?></p><br>
                <a data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" class="standard-button" href="/about-me">Meer over mij</a>
                <?php if( !empty($aboutme) ): ?>
                     <img class="about-me-picture-mobile" src="<?php echo $aboutme['url']; ?>" alt="<?php echo $aboutme['alt']; ?>" />
                <?php endif; ?>
            </div>

            <div class="col-lg-6">
            <?php if( !empty($aboutme) ): ?>
                <img data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500" class="about-me-picture" src="<?php echo $aboutme['url']; ?>" alt="<?php echo $aboutme['alt']; ?>" />
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
