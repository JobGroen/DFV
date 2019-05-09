<?php
    $aboutme = get_field('about_me_afbeelding');
?>

<div id="aboutme">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Over mij</h2>
                <p><?php the_field('about_me');?></p><br>
                <a class="standard-button" href="/about-me">Meer over mij</a>
                <?php if( !empty($aboutme) ): ?>
                     <img class="about-me-picture-mobile" src="<?php echo $aboutme['url']; ?>" alt="<?php echo $aboutme['alt']; ?>" />
                <?php endif; ?>
            </div>

            <div class="col-lg-6">
            <?php if( !empty($aboutme) ): ?>
                <img class="about-me-picture" src="<?php echo $aboutme['url']; ?>" alt="<?php echo $aboutme['alt']; ?>" />
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>