<?php
/**
*	Template Name: My Work
**/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<?php the_title( '<h1 class="entry-title">', '</h1>' );
				/*while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.*/
				?></h1>
			</div>
			<div class="container panels">
				<?php

				$panel_1 = get_field( 'panel_1_front' );
				$panel_2 = get_field( 'panel_2_front' );
				$panel_3 = get_field( 'panel_3_front' );
				$panel_4 = get_field( 'panel_4_front' );
				$panel_5 = get_field( 'panel_5_front' );
				$panel_6 = get_field( 'panel_6_front' );
				$panel_7 = get_field( 'panel_7_front' );
				$panel_8 = get_field( 'panel_8_front' );

				$panel_1_emp = get_field('panel_1_emp');
				$panel_2_emp = get_field('panel_2_emp');
				$panel_3_emp = get_field('panel_3_emp');
				$panel_4_emp = get_field('panel_4_emp');
				$panel_5_emp = get_field('panel_5_emp');
				$panel_6_emp = get_field('panel_6_emp');
				$panel_7_emp = get_field('panel_7_emp');
				$panel_8_emp = get_field('panel_8_emp');

				function emp_link($emp) {
					if ($emp == '/wp-content/themes/rs_web_dev/assets/images/RS-WebDev-Logo.png') {
						return "http://ryanstacy.net/";
					} else if ($emp == '/wp-content/themes/rs_web_dev/assets/images/ceatus-logo.png') {
					    return "http://www.ceatus.com/";
					}
				}

				?>
				<div class="row">
					<div class="flip-container col-xs-12 col-sm-6 col-md-4" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper" id='flip-1'>
							<div class="front">
								<img src="<?php echo $panel_1; ?>" />
							</div>
							<div class="back">
								<div class="emp">
								<span class="emp-statement">Employed At:</span>
									<a href="<?php echo emp_link($panel_1_emp); ?>" target="_blank">
										<img src="<?php echo the_field('panel_1_emp'); ?>" />
									</a>
								</div>
								<h2><a href="<?php the_field('panel_1_link'); ?>" target="_blank"><?php the_field('panel_1_title'); ?></a></h2>
								<p><?php the_field('panel_1_text'); ?></p>
								<p class="panel-link">Url: <a href="<?php the_field('panel_1_link'); ?>" target="_blank"><?php the_field('panel_1_link'); ?></a>
								</p>
							</div>
						</div>
					</div>
					<div class="flip-container col-xs-12 col-sm-6 col-md-4" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="<?php echo $panel_2; ?>" />
							</div>
							<div class="back">
								<div class="emp">
								<span class="emp-statement">Employed At:</span>
									<a href="<?php echo emp_link($panel_2_emp); ?>" target="_blank">
										<img src="<?php echo the_field('panel_2_emp'); ?>" />
									</a>
								</div>
								<h2><a href="<?php the_field('panel_2_link'); ?>" target="_blank"><?php the_field('panel_2_title'); ?></a></h2>
								<p><?php the_field('panel_2_text'); ?></p>
								<p class="panel-link">Url: <a href="<?php the_field('panel_2_link'); ?>" target="_blank"><?php the_field('panel_2_link'); ?></a>
								</p>
							</div>
						</div>
					</div>
					<div class="flip-container col-xs-12 col-sm-6 col-md-4" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="<?php echo $panel_3; ?>" />
							</div>
							<div class="back">
								<div class="emp">
								<span class="emp-statement">Employed At:</span>
									<a href="<?php echo emp_link($panel_3_emp); ?>" target="_blank">
										<img src="<?php echo the_field('panel_3_emp'); ?>" />
									</a>
								</div>
								<h2><a href="<?php the_field('panel_3_link'); ?>" target="_blank"><?php the_field('panel_3_title'); ?></a></h2>
								<p><?php the_field('panel_3_text'); ?></p>
								<p class="panel-link">Url: <a href="<?php the_field('panel_3_link'); ?>" target="_blank"><?php the_field('panel_3_link'); ?></a>
								</p>
							</div>
						</div>
					</div>
					<div class="flip-container col-xs-12 col-sm-6 col-md-4" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="<?php echo $panel_4; ?>" />
							</div>
							<div class="back">
								<div class="emp">
								<span class="emp-statement">Employed At:</span>
									<a href="<?php echo emp_link($panel_4_emp); ?>" target="_blank">
										<img src="<?php echo the_field('panel_4_emp'); ?>" />
									</a>
								</div>
								<h2><a href="<?php the_field('panel_4_link'); ?>" target="_blank"><?php the_field('panel_4_title'); ?></a></h2>
								<p><?php the_field('panel_4_text'); ?></p>
								<p class="panel-link">Url: <a href="<?php the_field('panel_4_link'); ?>" target="_blank"><?php the_field('panel_4_link'); ?></a>
								</p>
							</div>
						</div>
					</div>
					<div class="flip-container col-xs-12 col-sm-6 col-md-4" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="<?php echo $panel_5; ?>" />
							</div>
							<div class="back">
								<div class="emp">
								<span class="emp-statement">Employed At:</span>
									<a href="<?php echo emp_link($panel_5_emp); ?>" target="_blank">
										<img src="<?php echo the_field('panel_5_emp'); ?>" />
									</a>
								</div>
								<h2><a href="<?php the_field('panel_5_link'); ?>" target="_blank"><?php the_field('panel_5_title'); ?></a></h2>
								<p><?php the_field('panel_5_text'); ?></p>
								<p class="panel-link">Url: <a href="<?php the_field('panel_5_link'); ?>" target="_blank"><?php the_field('panel_5_link'); ?></a>
								</p>
							</div>
						</div>
					</div>
					<div class="flip-container col-xs-12 col-sm-6 col-md-4" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="<?php echo $panel_6; ?>" />
							</div>
							<div class="back">
								<div class="emp">
								<span class="emp-statement">Employed At:</span>
									<a href="<?php echo emp_link($panel_6_emp); ?>" target="_blank">
										<img src="<?php echo the_field('panel_6_emp'); ?>" />
									</a>
								</div>
								<h2><a href="<?php the_field('panel_6_link'); ?>" target="_blank"><?php the_field('panel_6_title'); ?></a></h2>
								<p><?php the_field('panel_6_text'); ?></p>
								<p class="panel-link">Url: <a href="<?php the_field('panel_6_link'); ?>" target="_blank"><?php the_field('panel_6_link'); ?></a>
								</p>
							</div>
						</div>
					</div>
					<div class="flip-container col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4" ontouchstart="this.classList.toggle('hover');">
						<div class="flipper">
							<div class="front">
								<img src="<?php echo $panel_7; ?>" />
							</div>
							<div class="back">
								<div class="emp">
								<span class="emp-statement">Employed At:</span>
									<a href="<?php echo emp_link($panel_7_emp); ?>" target="_blank">
										<img src="<?php echo the_field('panel_7_emp'); ?>" />
									</a>
								</div>
								<h2><a href="<?php the_field('panel_7_link'); ?>" target="_blank"><?php the_field('panel_7_title'); ?></a></h2>
								<p><?php the_field('panel_7_text'); ?></p>
								<p class="panel-link">Url: <a href="<?php the_field('panel_7_link'); ?>" target="_blank"><?php the_field('panel_7_link'); ?></a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<hr class="hr">
				<div class="row">
					<div class="testimonials">
						<h2>Check out what my clients have to say:</h2>
						<?php echo do_shortcode('[testimonials_slider title_link="/testimonials/"]'); ?>
					</div>
				</div>
			</div>
			<div class="solar">
	            <img id="sun" src="/wp-content/themes/rs_web_dev/assets/images/sun.png">
	            <div id="mercury-orbit">
	                <img id="mercury" src="/wp-content/themes/rs_web_dev/assets/images/mercury.png">
	            </div>
	            <div id="venus-orbit">
	                <img id="venus" src="/wp-content/themes/rs_web_dev/assets/images/venus.png">
	            </div>
	            <div id="earth-orbit">
	                <img id="earth" src="/wp-content/themes/rs_web_dev/assets/images/earth.png">
	                <div class="moon-container">
	                  <div id="moon-orbit">
	                      <img id="moon" src="/wp-content/themes/rs_web_dev/assets/images/moon.png">
	                  </div>
	                </div>
	            </div>
	            <div id="mars-orbit">
	                <img id="mars" src="/wp-content/themes/rs_web_dev/assets/images/mars.png">
	                <div class="moon-container">
	                  <div id="deimos-orbit">
	                      <img id="deimos" src="/wp-content/themes/rs_web_dev/assets/images/moon.png">
	                  </div>
	                  <div id="phobos-orbit">
	                      <img id="phobos" src="/wp-content/themes/rs_web_dev/assets/images/moon.png">
	                  </div>
	                </div>
	            </div>
	            <div id="jupiter-orbit">
	                <img id="jupiter" src="/wp-content/themes/rs_web_dev/assets/images/jupiter.png">
	                <div class="moon-container">
	                  
	                </div>
	            </div>
	            <div id="saturn-orbit">
	                <img id="saturn" src="/wp-content/themes/rs_web_dev/assets/images/saturn.png">
	                <div class="moon-container">
	                  
	                </div>
	            </div>
	            <div id="uranus-orbit">
	                <img id="uranus" src="/wp-content/themes/rs_web_dev/assets/images/uranus.png">
	                <div class="moon-container">
	                  
	                </div>
	            </div>
	            <div id="neptune-orbit">
	                <img id="neptune" src="/wp-content/themes/rs_web_dev/assets/images/neptune.png">
	                <div class="moon-container">
	                  
	                </div>
	            </div>
	        </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
