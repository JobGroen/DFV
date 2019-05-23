<?php /* Template Name: Landings page blog */ ?>
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
<?php get_header();?>

<div id="header" style="background-image: url('/wp-content/uploads/2019/05/wenkbrouwen-wimpers.jpg')">
  <div class="header">
    <h1 class="standard-h1">Blog</h1>
  </div>
</div>

<div class="container blog">
  <?php if (have_posts()) : while(have_posts()) : the_post();?>

  <div class="row pt-4 pb-4 no-gutters">
    <div class="col-md-3 blog-leftside">
      <?php if(has_post_thumbnail()):?>
       <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">
      <?php endif;?>
    </div>
    <div class="col-md-9 blog-rightside">
      <div class="blog-righttext">
      <h3><?php the_title();?></h3>
      <p>Geplaatst op <?php echo get_the_date(); ?> door <?php the_author(); ?></p>
        <?php the_excerpt();?><br>
      <a href="<?php the_permalink();?>" class="standard-button">Lees meer</a>
      </div>
    </div>
  </div>

  <?php endwhile; endif;?>
</div>


<?php get_template_part( 'template-parts/contactform'); ?>
<?php get_footer();?>

let calltoaction = "<div class='calltoaction'><div class='calltoactionclose'><i class='fas fa-times'></i></div><div class='calltoactionleft'><img src='/wp-content/uploads/2019/05/eduke-de-boer.jpeg'></div><div class='calltoactionright'><p class='calltoactionname'>Eduke de Boer</p><p>Meer informatie nodig? Neem vrijblijvend contact met mij op.</p><a href='tel:+310207715930'><p><i class='fa fa-phone fa-rotate-90' style='font-size:16px;' aria-hidden='true'></i> +31 (0)20 771 59 30</p></a></div><div class='calltoaction-whatsapp'><a href='https://api.whatsapp.com/send?phone=0207715930' target='_blank'><p>Whatsapp ons</p></a></div>";

  <script >
jQuery(document).ready(function($) {
    let calltoaction = "<div class='calltoaction'><div class='calltoactionclose'><i class='fas fa-times'></i></div><div class='calltoactionleft'><img src='/wp-content/uploads/2019/05/eduke-de-boer.jpeg'></div><div class='calltoactionright'><p class='calltoactionname'>Eduke de Boer</p><p>Meer informatie nodig? Neem vrijblijvend contact met mij op.</p><a href='tel:+310207715930'><p><i class='fa fa-phone fa-rotate-90' style='font-size:16px;' aria-hidden='true'></i> +31 (0)20 771 59 30</p></a></div></div>";
    let calltoaction1 = "<div class='calltoaction1'><div class='calltoaction-small'><a href='tel:+310207715930'><p><i class='fa fa-phone fa-rotate-90' style='font-size:16px;' aria-hidden='true'></i> +31 (0)20 771 59 30</p></a></div></div>";
    let whatsapp = "<a href='https://api.whatsapp.com/send?phone=0207715930' target='_blank'><div class='whatsapp-small'><img class='whatsapp-img' src='/wp-content/uploads/2019/05/whatsapp.svg' alt='ABE'><p>Whatsapp ons!</p></div></a>";
    
    $("body").append(calltoaction);
    $("body").append(calltoaction1);
    $("body").append(whatsapp);
    
    $(".calltoactionclose").click(function() {
        $(".calltoaction").fadeOut();
    });
    
    $(".calltoactionclose").click(function(){
        $(".calltoaction1").fadeIn();
    });
    stop = false;
    $(document).scroll(function(e) {
        if (stop == false){
            var y = $(document).scrollTop();
            console.log(y);
            if (y >800) {
                console.log('true')
                $('.calltoaction').fadeIn();
                stop = true;
            }
        }
    });
});

</script>