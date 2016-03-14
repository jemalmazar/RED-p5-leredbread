<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-info container">
					<div class="footer-contact">
						<h3>Contact</h3>
						<p>
							<i class="fa fa-envelope"></i>
						  <a href="mailto:info@leredbread.com">info@leredbread.com</a>
						</p>
						<p>
							<i class="fa fa-phone"></i>
							<a href="tel:5553434567891">(555) 343 456 7891</a>
						</p>
						<p>
							<span><i class="fa fa-facebook-square"></i></span>
							<span><i class="fa fa-twitter-square"></i></span>
							<span><i class="fa fa-google-plus-square"></i></span>
						</p>

					</div>

					<div class="footer-logo">
						<img src="<?php bloginfo('template_directory'); ?>/images/lrb-logo-white.svg" alt="Le Red Bread alternate logo" />
					</div>

					<div class="footer-hours">
						<h3>Business Hours</h3>
						<p><span class="day-of-week">Monday to Friday: </span>9am to 5pm</p>
						<p><span class="day-of-week">Saturday: </span>10am to 2pm</p>
						<p><span class="day-of-week">Sunday: </span>Closed</p>

					</div>

				</div>

				<div class="copyright">
					<span class="container">Copyright &copy; 2015 Le Red Bread</span>
					<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
