<?php
/**
*	Template Name: Contact
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
				?>
				<p>Send me a message letting me know what kind of work you have, any links to reference what you'd like, your time frame as well as your budget. Thank you very much and I look forward to working with you soon!</p>
				<?php echo do_shortcode('[contact-form-7 id="70" title="Contact Page"]'); ?>
			</div>
		</main> <!-- #main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
