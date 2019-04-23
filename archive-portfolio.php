<?php get_header();?>

<div class="container pt-5 pb-5">

    <p class="standard-h4 portfolio-quote"><?php the_field('quote', 73) ?></p>
    <div class="row justify-content-end pb-3" id="filters">
        <div class="col-auto">
        <select class="filter option-set custom-select" data-filter-group="category">
            <option href="#" data-filter-value="*" selected="selected">Alles</option>
            <?php 
                $terms = get_terms("portfolio_category"); // get all categories, but you can use any taxonomy
                $count = count($terms); //How many are they?
                if ( $count > 0 ){  //If there are more than 0 terms
                    foreach ( $terms as $term ) {  //for each term:
                        echo "<option href='#' data-filter-value='.".$term->slug."'>" . $term->name . "</option>\n"; //create a list item with the current term slug for sorting, and name for label
                    }
                } 
            ?>
        </select>
        </div>
    </div>
    <section id="photos">
        <?php if (have_posts()) : while(have_posts()) : the_post();
         $termsArray = get_the_terms( $post->ID, "portfolio_category" );  //Get the terms for this particular item
         $termsString = ""; //initialize the string that will contain the terms
         foreach ( $termsArray as $term ) { // for each term 
         $termsString .= $term->slug.' '; //create a string that has all the slugs 
         }     
        ?>
        <a href="<?php the_permalink();?>">
            <?php if(has_post_thumbnail()):?>
            <figure class="<?php echo $termsString; ?> photos-item">
                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="img-fluid">
                <figcaption class="img-title">
                    <p><?php the_title();?></p>
            </figure>
            <?php endif;?>
        </a>
        <?php endwhile; endif;?>
    </section>
</div>

<?php get_template_part( 'template-parts/contactform'); ?>

<?php get_footer();?>