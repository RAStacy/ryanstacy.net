<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rs_web_dev
 */

?>

	</div><!-- #content -->

	<footer>
	    <div class="sub-footer">
	    	<div class="container">
	    		<div class="row">
					<div class="col-xs-12 col-sm-4">
						<p class="copyright">&copy;<?php echo date("Y"); ?> Ryan Stacy Web Development</p>
					</div>
					<div class="col-xs-12 col-sm-4">
						<div class="footer-nav">
							<p class="copyright"><a href="/licensing/">Licensing</a></p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-4">
						<ul class="social">
							<li class="col-xs-4 col-sm-4 ">
								<a href="<?php the_field('fb_link'); ?>" target="_blank"><img class="fb-icon" src="/wp-content/themes/rs_web_dev/assets/images/fb-icon.png"></a>
							</li>
							<li class="col-xs-4 col-sm-4 ">
								<a href="<?php the_field('li_link'); ?>" target="_blank"><img class="li-icon" src="/wp-content/themes/rs_web_dev/assets/images/li-icon.png"></a>
							</li>
							<li class="col-xs-4 col-sm-4 ">
								<a href="<?php the_field('gh_link'); ?>" target="_blank"><img class="gh-icon" src="/wp-content/themes/rs_web_dev/assets/images/gh-icon.png"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
	    </div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>