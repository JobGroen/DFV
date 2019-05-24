<?php
    $portfolio1 = get_field('portfolio_afbeelding_1');
    $portfolio2 = get_field('portfolio_afbeelding_2');
?>

<div id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h2 data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true">Portfolio</h2>
                <p data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true"><?php the_field('portfolio');?></p><br>
                <a data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" class="standard-button" href="/portfolio">Bekijk mijn portfolio</a>
                <?php if( !empty($portfolio1) ): ?>
                     <img class="portfolio-image-mobile" src="<?php echo $portfolio1['url']; ?>" alt="<?php echo $portfolio1['alt']; ?>" />
                <?php endif; ?>
            </div>

            <div class="col-lg-7">
            <?php if( !empty($portfolio1) ): ?>
                     <img data-aos="fade-left" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500" class="portfolio-image-1" src="<?php echo $portfolio1['url']; ?>" alt="<?php echo $portfolio1['alt']; ?>" />
             <?php endif; ?>
             <?php if( !empty($portfolio2) ): ?>
                     <img data-aos="fade-left" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-delay="50" data-aos-duration="500" class="portfolio-image-2" src="<?php echo $portfolio2['url']; ?>" alt="<?php echo $portfolio2['alt']; ?>" />
            <?php endif; ?>
            <img data-aos="fade-left" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-duration="500"  class="portfolio-image-1" src="/wp-content/uploads/2019/04/Asha-Goercharan-2-1.jpg" alt="reviews">

            <img data-aos="fade-left" data-aos-anchor-placement="top-center" data-aos-easing="ease-in-out" data-aos-once="true" data-aos-delay="50" data-aos-duration="500" class="portfolio-image-2" src="/wp-content/uploads/2019/04/bruiloften-1.jpg" alt="reviews">
            </div>
        </div>
    </div>
</div>
