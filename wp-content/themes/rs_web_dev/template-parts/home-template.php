<?php

/**
*	Template Name: Homepage
**/

?>

<?php get_header(); ?>
	
<div class="info-wrapper">
	<div class="container">
		<div class="desktop-view">
			<video playsinline autoplay muted loop class="fullscreen" id="star_vid">
			    <source src="wp-content/themes/rs_web_dev/assets/videos/stars-min.mp4" type="video/mp4">
			</video>
		</div>
		<img class="rs-large" src="wp-content/themes/rs_web_dev/assets/images/RS.png">
		<div class="col-sm-12">
			<p class="gold-title">Web Development</p>
		</div>
		<div class="text col-sm-6 col-md-3">
			<h3><?php the_field('column_1_title'); ?></h3>
			<p><?php the_field('column_1'); ?></p>
		</div>
		<div class="text col-sm-6 col-md-3">
			<h3><?php the_field('column_2_title'); ?></h3>
			<p><?php the_field('column_2'); ?></p>
		</div>
		<div class="text col-sm-6 col-md-3">
			<h3><?php the_field('column_3_title'); ?></h3>
			<p><?php the_field('column_3'); ?></p>
		</div>
		<div class="text col-sm-6 col-md-3">
			<h3><?php the_field('column_4_title'); ?></h3>
			<p><?php the_field('column_4'); ?></p>
		</div>
		<div class="learn-more col-sm-12">
			<a href="<?php the_field('learn_more_btn'); ?>"><button class="learn-more-btn">Learn More</button></a>
		</div>
	</div>
</div>

<?php

$bg_1 = get_field( 'button_bkgd_1' );
$bg_2 = get_field( 'button_bkgd_2' );
$bg_3 = get_field( 'button_bkgd_3' );
$bg_4 = get_field( 'button_bkgd_4' );

?>

<div class="feature-wrapper">
	<div class="container">
		<div class="row">
			<div class="feature-button col-sm-12 col-md-6" style="background-image: url('<?php the_field("button_bkgd_1"); ?>')";>
				<div class="row">
					<div class="col-sm-5 col-sm-push-7">
						<div class="btn-title black">
							<h2><?php the_field('button_title_1'); ?></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7 col-sm-push-5">
						<div class="btn-link">
							<a href="<?php the_field('button_link_1'); ?>"><?php the_field('button_link_text_1'); ?><span> &#10095;</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="feature-button col-sm-12 col-md-6" style="background-image: url('<?php the_field("button_bkgd_2"); ?>')";>
				<div class="row">
					<div class="col-sm-5 col-sm-push-7">
						<div class="btn-title white">
							<h2><?php the_field('button_title_2'); ?></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7 col-sm-push-5">
						<div class="btn-link">
							<a href="<?php the_field('button_link_2'); ?>"><?php the_field('button_link_text_2'); ?><span> &#10095;</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="feature-button col-sm-12 col-md-6" style="background-image: url('<?php the_field("button_bkgd_3"); ?>')";>
				<div class="row">
					<div class="col-sm-5 col-sm-push-7">
						<div class="btn-title white">
							<h2><?php the_field('button_title_3'); ?></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7 col-sm-push-5">
						<div class="btn-link">
							<a href="<?php the_field('button_link_3'); ?>"><?php the_field('button_link_text_3'); ?><span> &#10095;</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="feature-button col-sm-12 col-md-6 orange" style="background-image: url('<?php the_field("button_bkgd_4"); ?>')";>
				<div class="row">
					<div class="col-sm-5 col-sm-push-7">
						<div class="btn-title black">
							<h2><?php the_field('button_title_4'); ?></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-7 col-sm-push-5">
						<div class="btn-link">
							<a href="<?php the_field('button_link_4'); ?>"><?php the_field('button_link_text_4'); ?><span> &#10095;</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="mission-wrapper">
	<div class="container">
		 <div class="mission-title">
		 	<img src="wp-content/themes/rs_web_dev/assets/images/mission.png"><br><span>Statement</span>
		 </div>
		 <p><?php the_field('mission_text'); ?></p>
	</div>
</div>

<div class="form-wrapper">
	<div class="container">
        <div class="col-sm-12">
        	<img class="rs-large" src="wp-content/themes/rs_web_dev/assets/images/RS.png">
			<p class="form-title">Contact Ryan Stacy</p>
		</div>
        <?php echo do_shortcode('[contact-form-7 id="19" title="Contact form 1"]'); ?>
    </div>
</div>

<?php get_footer(); ?>
