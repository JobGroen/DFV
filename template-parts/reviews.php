<?php

$image1 = get_field('review_1_afbeelding');
$image2 = get_field('review_2_afbeelding');
$image3 = get_field('review_3_afbeelding');

$link1 = get_field('review_1_portfolio_link');
$link2 = get_field('review_2_portfolio_link');
$link3 = get_field('review_3_portfolio_link');

?>

<div id="reviews">
    <div class="row">
        <div class="col-md-5">
            <div class="container">
            </div>
        </div>

        <div class="col-md-7">
            <div class="container">
                <h2>Reviews</h2>
                <div class="reviews-box">

                    <div id="reviewslider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p><i>"<?php the_field('review_1_tekst');?>"</i></p>

                                <p>- <?php the_field('review_1_persoon');?></p>
                                <a href="<?php echo $link1; ?>">Bekijk alle foto's <i class="fas fa-angle-right"></i></a>
                            </div>
                            <div class="carousel-item">
                                <p><i>"<?php the_field('review_2_tekst');?>"</i></p>

                                <p>- <?php the_field('review_2_persoon');?></p>
                                <a href="<?php echo $link2; ?>">Bekijk alle foto's <i class="fas fa-angle-right"></i></a>
                            </div>
                            <div class="carousel-item">
                                <p><i>"<?php the_field('review_3_tekst');?>"</i></p>

                                <p>- <?php the_field('review_3_persoon');?></p>
                                <a href="<?php echo $link3; ?>">Bekijk alle foto's <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div id="slider_captions">
                        <div id="caption-0" class="carousel-caption">
                            <?php if( !empty($image1) ): ?>
                                <img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                        <div id="caption-1" class="carousel-caption">
                            <?php if( !empty($image2) ): ?>
                                <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                        <div id="caption-2" class="carousel-caption">
                            <?php if( !empty($image3) ): ?>
                                <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>