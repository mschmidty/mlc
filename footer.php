<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mlc_v1
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="top-footer-section">
			<div class="contact-info">
				<h3>Get in Touch</h3>
				<ul>
					<li>
					<svg  viewBox="0 0 216.3 135.3" xmlns="http://www.w3.org/2000/svg" version="1.1">
						<use xlink:href="#phone"></use>
					</svg>
						(970) 565-1664
					</li>
					<li>
						<svg  viewBox="0 0 216.3 135.3" xmlns="http://www.w3.org/2000/svg" version="1.1">
							<use xlink:href="#email"></use>
						</svg>
						<a href="contact">Send Us a Message</a>
					</li>
				</ul>
			
			</div>
			<ul class="major-funders">
				<li><img src="<?php echo get_template_directory_uri(); ?>/images/acc_seal_stamp.png" alt=""></li>
				<li><a href="https://www.landtrustalliance.org/"><img src="<?php echo get_template_directory_uri(); ?>/images/land_trust_all.jpg" alt="Land Trust Alliance Logo"></a></li>
			</ul>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mlc_v1' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'mlc_v1' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'mlc_v1' ), 'Montezuma Land Conservancy Custom Theme V1.0', '<a href="http://schmidtyworks.com/">Schmidtyworks</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
