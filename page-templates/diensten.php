<?php /* Template Name: Diensten */ ?>
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
<?php get_header();?>

<div id="header" style="background-image: url(<?php echo esc_url($featured_img_url); ?>)">
	<div class="header" >
		<h1 class="standard-h1"><?php the_title();?></h1>
	</div>
</div>

   <?php if(get_field('dienst_aanzetten') == "Ja"): ?>
   <div id="bruiloften"></div>
		<div class="diensten-single">
			<div class="row">
			<div class="balk"></div>
				<div class="col-md-5">
					<div class="container">
					</div>
				</div>

				<div class="col-md-7">
					<div class="container">
					<img class="portfolio-image-mobile" src="<?php the_field('dienst_afbeelding'); ?>" alt="dienst">
						<h2><?php the_field('dienst_titel');?></h2>
						<div class="diensten-single-box">
							<img src="<?php the_field('dienst_afbeelding'); ?>" alt="dienst">
							<p><?php the_field('dienst_beschrijving'); ?></p>

							<p class="diensten-prijs">€ <?php the_field('prijs'); ?>,-</p>
							<a class="standard-button scrollto-button">Afspraak maken</a>
						</div>
					</div>
				</div>
			</div>
			<div id="videoclips"></div>
		</div>
	<?php endif; ?>

	<?php if(get_field('dienst_aanzetten_2') == "Ja"): ?>
		<div class="diensten-single">
			<div class="row">

				<div class="col-md-7">
				<div class="balk"></div>
					<div class="container diensten-single-right">
					<img class="portfolio-image-mobile" src="<?php the_field('dienst_afbeelding_2'); ?>" alt="dienst">
						<h2><?php the_field('dienst_titel_2');?></h2>
						<div class="diensten-single-box diensten-afbeelding-right">
							<p><?php the_field('dienst_beschrijving_2'); ?></p>

							<p class="diensten-prijs">€ <?php the_field('prijs_2'); ?>,-</p>
							<a class="standard-button scrollto-button">Afspraak maken</a>
							<img src="<?php the_field('dienst_afbeelding_2'); ?>" alt="dienst">
						</div>
					</div>
				</div>

				<div class="col-md-5">
					<div class="container">
					</div>
				</div>
			</div>
			<div id="feestjes"></div>
		</div>
	<?php endif; ?>

	<?php if(get_field('dienst_aanzetten_3') == "Ja"): ?>
			<div class="diensten-single">
				<div class="row">
				<div class="balk"></div>
					<div class="col-md-5">
						<div class="container">
						</div>
					</div>

					<div class="col-md-7">
						<div class="container">
						<img class="portfolio-image-mobile" src="<?php the_field('dienst_afbeelding_3'); ?>" alt="dienst">
							<h2><?php the_field('dienst_titel_3');?></h2>
							<div class="diensten-single-box">
								<img src="<?php the_field('dienst_afbeelding_3'); ?>" alt="dienst">
								<p><?php the_field('dienst_beschrijving_3'); ?></p>

								<p class="diensten-prijs">€ <?php the_field('prijs_3'); ?>,-</p>
								<a class="standard-button scrollto-button">Afspraak maken</a>
							</div>
						</div>
					</div>
				</div>
				<div id="wenkbrouwen"></div>
			</div>
	<?php endif; ?>

	<?php if(get_field('dienst_aanzetten_4') == "Ja"): ?>
		<div class="diensten-single">
			<div class="row">

				<div class="col-md-7">
				<div class="balk"></div>
					<div class="container diensten-single-right">
					<img class="portfolio-image-mobile" src="<?php the_field('dienst_afbeelding_4'); ?>" alt="dienst">
						<h2><?php the_field('dienst_titel_4');?></h2>
						<div class="diensten-single-box diensten-afbeelding-right">
							<p><?php the_field('dienst_beschrijving_4'); ?></p>

							<p class="diensten-prijs">€ <?php the_field('prijs_4'); ?>,-</p>
							<a class="standard-button scrollto-button">Afspraak maken</a>
							<img src="<?php the_field('dienst_afbeelding_4'); ?>" alt="dienst">
						</div>
					</div>
				</div>

				<div class="col-md-5">
					<div class="container">
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_field('dienst_aanzetten_5') == "Ja"): ?>
		<div class="diensten-single">
			<div class="row">
			<div class="balk"></div>
				<div class="col-md-5">
					<div class="container">
					</div>
				</div>

				<div class="col-md-7">
					<div class="container">
					<img class="portfolio-image-mobile" src="<?php the_field('dienst_afbeelding_5'); ?>" alt="dienst">
						<h2><?php the_field('dienst_titel_5');?></h2>
						<div class="diensten-single-box">
							<img src="<?php the_field('dienst_afbeelding_5'); ?>" alt="dienst">
							<p><?php the_field('dienst_beschrijving_5'); ?></p>

							<p class="diensten-prijs">€ <?php the_field('prijs_5'); ?>,-</p>
							<a class="standard-button scrollto-button">Afspraak maken</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_field('dienst_aanzetten_6') == "Ja"): ?>
		<div class="diensten-single">
			<div class="row">

				<div class="col-md-7">
				<div class="balk"></div>
					<div class="container diensten-single-right">
					<img class="portfolio-image-mobile" src="<?php the_field('dienst_afbeelding_6'); ?>" alt="dienst">
						<h2><?php the_field('dienst_titel_6');?></h2>
						<div class="diensten-single-box diensten-afbeelding-right">
							<p><?php the_field('dienst_beschrijving_6'); ?></p>

							<p class="diensten-prijs">€ <?php the_field('prijs_6'); ?>,-</p>
							<a class="standard-button scrollto-button">Afspraak maken</a>
							<img src="<?php the_field('dienst_afbeelding_6'); ?>" alt="dienst">
						</div>
					</div>
				</div>

				<div class="col-md-5">
					<div class="container">
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_field('dienst_aanzetten_7') == "Ja"): ?>
		<div class="diensten-single">
			<div class="row">
			<div class="balk"></div>
				<div class="col-md-5">
					<div class="container">
					</div>
				</div>

				<div class="col-md-7">
					<div class="container">
					<img class="portfolio-image-mobile" src="<?php the_field('dienst_afbeelding_7'); ?>" alt="dienst">
						<h2><?php the_field('dienst_titel_7');?></h2>
						<div class="diensten-single-box">
							<img src="<?php the_field('dienst_afbeelding_7'); ?>" alt="dienst">
							<p><?php the_field('dienst_beschrijving_7'); ?></p>

							<p class="diensten-prijs">€ <?php the_field('prijs_7'); ?>,-</p>
							<a class="standard-button scrollto-button">Afspraak maken</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_field('dienst_aanzetten_8') == "Ja"): ?>
		<div class="diensten-single">
			<div class="row">

				<div class="col-md-7">
				<div class="balk"></div>
					<div class="container diensten-single-right">
					<img class="portfolio-image-mobile" src="<?php the_field('dienst_afbeelding_8'); ?>" alt="dienst">
						<h2><?php the_field('dienst_titel_8');?></h2>
						<div class="diensten-single-box diensten-afbeelding-right">
							<p><?php the_field('dienst_beschrijving_8'); ?></p>

							<p class="diensten-prijs">€ <?php the_field('prijs_8'); ?>,-</p>
							<a class="standard-button scrollto-button">Afspraak maken</a>
							<img src="<?php the_field('dienst_afbeelding_8'); ?>" alt="dienst">
						</div>
					</div>
				</div>

				<div class="col-md-5">
					<div class="container">
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_field('dienst_aanzetten_9') == "Ja"): ?>
		<div class="diensten-single">
			<div class="row">
			<div class="balk"></div>
				<div class="col-md-5">
					<div class="container">
					</div>
				</div>

				<div class="col-md-7">
					<div class="container">
					<img class="portfolio-image-mobile" src="<?php the_field('dienst_afbeelding_9'); ?>" alt="dienst">
						<h2><?php the_field('dienst_titel_9');?></h2>
						<div class="diensten-single-box">
							<img src="<?php the_field('dienst_afbeelding_9'); ?>" alt="dienst">
							<p><?php the_field('dienst_beschrijving_9'); ?></p>
							<a class="standard-button scrollto-button">Afspraak maken</a>

							<p class="diensten-prijs">€ <?php the_field('prijs_9'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_field('dienst_aanzetten_10') == "Ja"): ?>
		<div class="diensten-single">
			<div class="row">

				<div class="col-md-7">
				<div class="balk"></div>
					<div class="container diensten-single-right">
					<img class="portfolio-image-mobile" src="<?php the_field('dienst_afbeelding_10'); ?>" alt="dienst">
						<h2><?php the_field('dienst_titel_10');?></h2>
						<div class="diensten-single-box diensten-afbeelding-right">
							<p><?php the_field('dienst_beschrijving_10'); ?></p>

							<p class="diensten-prijs">€ <?php the_field('prijs_10'); ?>,-</p>
							<a class="standard-button scrollto-button">Afspraak maken</a>
							<img src="<?php the_field('dienst_afbeelding_10'); ?>" alt="dienst">
						</div>
					</div>
				</div>

				<div class="col-md-5">
					<div class="container">
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

<?php get_template_part( 'template-parts/contactform'); ?>

<?php get_footer();?>
